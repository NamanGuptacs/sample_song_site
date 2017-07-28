<?php
include ('connect.php');
session_start();
if(!isset($_SESSION['login_user']))
{
    header("Location:admin-login.php");
}

if (isset($_POST['sub']))
{
    $title = $_POST['title'];
	$movie =$_POST['movie'];
	$category =$_POST['list'];
	
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="../project/upload/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO upload(song_title,song_movie,category,file,type,size) VALUES('$title','$movie','$category','$file','$file_type','$file_size')";
 $query=mysqli_query($con,$sql);
 if ($query > 0)
 {
 echo "\n"."inserted";
 }    
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="utf-8"> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Upload Files</title>
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
</nav>

<!-- Top menu on small screens -->
<header class="w3-display-container w3-grayscale-min" id="view">
   <span class="w3-opennav w3-xxlarge w3-left w3-margin-left" onclick="w3_open()"><i class="fa fa-bars"></i></span>
</header>  

<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div> 
<div class="container">
 <div style="max-height:100%; padding-top:160px; padding-bottom:150px"
<form method="post" enctype="multipart/form-data">
      <div class="form-group">
	    	<div class="row">
      	  
	 <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>
	  <div class="col-xm-6 col-sm-6 col-md-6">
	  <h3 class="w3-center" style="padding-top:20px; padding-bottom:20px">Upload File</h3>
	  </div>
	  <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>
	 </div> <!--row-->
	<div class="row">
      <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>
	  <div class="col-xm-6 col-sm-6 col-md-6">
	  	              <label for="sel1">Song Title:</label>
                     <input type="text" class="form-control" name="title" />

		   </div>
	   
	  
	  <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>	  
	</div> <!--row-->
	<div class="row">
      <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>
	  <div class="col-xm-6 col-sm-6 col-md-6">
	  	              <label for="sel1">Movie Name:</label>
                     <input type="text" class="form-control" name="movie" />

		   </div>
	   
	  
	  <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>	  
	</div> <!--row-->
	
	<div class="row">
      <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>
	  <div class="col-xm-6 col-sm-6 col-md-6">
	  	   
		   	     <label for="sel1">Song Category:</label>
  <select class="form-control" name="list">
    <option value="Bollywood">Bollywood</option>
    <option value="mashup">Mashup</option>
    <option value="english">English</option>
    <option value="romantic">Romantic</option>
  </select>
	     		   </div>
	   
	  
	  <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>	  
	</div><!--row-->
	<div class="row">
      <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>
	  <div class="col-xm-6 col-sm-6 col-md-6">
	  	   <div class="form-group">
	   		   <label for="sel1">Upload File:</label>
			   <input type="file" name="file" />
	   </div>
	   </div>
	  
	  <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>	  
	</div> 
	</div><!--form-->    
	<div class="row">
      <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>
	  <div class="col-xm-6 col-sm-6 col-md-6">
	  	   <div class="form-group">
	   		  <button type="submit" name="sub" class="btn btn-default">Submit</button>
	   </div>
	   </div>
	  
	  <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>	  
	</div> 
	</div><!--form-->          
	</form>
	</div>
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
