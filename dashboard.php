<?php
session_start();
if(!isset($_SESSION['login_user']))
{
    header("Location:admin-login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
body,h1 {font-family: "Montserrat", sans-serif}
img { padding-top:100px; padding-bottom:90px;}
img:hover{cursor:pointer}
img:hover{opacity: 0.7; transition: 0.3s;}




</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dashboard</title>
</head>

<body>
<div class="w3-top">
  <div class="w3-text-white w3-navbar w3-black w3-wide w3-padding-32">
      <b class="w3-margin-left">Dashboard</b>
    
	<?php
	if($_SESSION['login_user'])
	{
	?>
	<div class="w3-padding-right w3-right">
	<?php echo "Howdy!"." ".$_SESSION['login_user'];?> <a href="logout.php">Logout<span class="glyphicon glyphicon-log-out"></span></a>
	</div>
	<?php
	}
	?> 
	</div>
	</div>
	
	<div class="w3-container w3-light-grey w3-padding-32" style="max-width:1600px" >
	    <div class="w3-half w3-center">
	   <a href="upload.php"><img src="img/Files-Upload-File-icon.png" style="width:50%;" alt="Upload HERE!" title="Upload HERE!" /></a>
		</div>
		<div class="w3-half w3-center">
		<a href="view.php"><img src="img/YPS__file_document_enlarge_magnifier_magnify_examine_read_paper_page_text-512.png" 
		style="width:50%" alt="View Data" title="View Recoard" /></a>
		</div>
	</div>
	
	 <footer class="w3-center w3-black w3-padding-48 w3-xxlarge" style="font-family:'Amatic SC' ,sans-serif;">
  <p>Powered by <a href="#" title="dj songs"  class="w3-hover-text-green" style="text-decoration:none">dj songs</a></p>
</footer>
</body>
</html>
