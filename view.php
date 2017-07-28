<?php
include ('connect.php');
session_start();
if(!isset($_SESSION['login_user']))
{
    header("Location:admin-login.php");
}

$sql="select * from upload";
$query = mysqli_query($con,$sql);

if (isset($_GET['del']))
{
    $delete = $_GET['del'];
	$sql1 = "delete from upload where id='$delete'";
	$query1 = mysqli_query($con,$sql1);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="utf-8"> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>View Songs</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-black  w3-animate-left w3-center w3-top w3-text-light-grey w3-large" style="z-index:3;width:250px;font-weight:bold;display:none;left:0;" id="mySidenav">
  <a href="javascript:void()" onclick="w3_close()" class="w3-padding-32">CLOSE</a> 
   <a href="upload.php" onclick="w3_close()" class="w3-padding-16">UPLOAD</a>
   <a href="view.php" onclick="w3_close()" class="w3-padding-16">VIEWFILES</a> 
  <a href="dashboard.php" onclick="w3_close()" class="w3-padding-16">DASHBOARD</a>
	<a href="logout.php" onclick="w3_close()" class="w3-padding-16">LOGOUT</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-display-container w3-grayscale-min" id="view">
   <span class="w3-opennav w3-xxlarge w3-left w3-margin-left" onclick="w3_open()"><i class="fa fa-bars"></i></span>

</header>  
<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div> 

<div class="container">
<div class="row">
 <div class="col-xm-12 col-sm-12 col-md-12">
   <div class="table-responsive">
     <table class="table">
	  <thead>
	    <tr>
		   <th>ID</th>
	      <th>Songs Names</th>
		  <th>Songs Movies</th>
		  <th>Songs category</th>
		  <th>Files</th>
		  <th>Files type</th>
		  <th>Files Size</th>
		 </tr>
		
		 </thead> 
		 <tbody>
		
		 <?php
		 while ($data = mysqli_fetch_array($query))
		 {
		 ?>
		         <tr>
		         <td><?php echo $data['id'];?></td>
				 
				 <td><?php echo $data['song_title'];?></td>
				 <td><?php echo $data['song_movie'];?></td>
				 <td><?php echo $data['category'];?></td>
				 <td><?php echo $data['file'] ?></td>
                 <td><?php echo $data['type'] ?></td>
				 
                 <td><?php echo $data['size'] ?></td>
                 <td><a href="../project/upload/<?php echo $data['file'] ;?>" target="_blank">view file</a></td>
				 <td><a href="view.php?del=<?php echo $data['id'];?>"><span class="glyphicon glyphicon-trash"></span></a></td>
				 </tr>
		 <?php
		 }
		 ?>
		 </tbody>
	 </table>
	 </div>
 </div><!--col-->
</div><!--row-->
</div><!--container-->
 <footer class="w3-center w3-black w3-padding-8 w3-xxlarge" style="font-family:'Amatic SC' ,sans-serif;">
  <p>Powered by <a href="dashboard.php" title="dj songs"  class="w3-hover-text-green" style="text-decoration:none">dj songs</a></p>
</footer></td></td></td>
<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
</body>
</html>
