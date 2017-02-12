<?php
include ('connect.php');
session_start();
if (isset($_POST['sub']))
{
    $user=$_POST['user'];
	$pass=$_POST['pass'];
	$user = stripslashes($user);
	$pass = stripslashes($pass);
	$user = mysqli_real_escape_string($con,$user);
	$pass = mysqli_real_escape_string($con,$pass);
	$sql="select * from admin_info where username='$user' and password='$pass'";
	
	$query=mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
	if ($row>0)
	{
	$_SESSION['login_user'] = $row['Username'];
	
	}
	else
	{
	echo "Check the Username and Password";
	}
	
}
if(isset($_SESSION["login_user"])) {
header("Location:dashboard.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta charset="utf-8"> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Login</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<form method="post">
      <div class="form-group">
   <div class="row">
      	   <div class="col-xm-3 col-sm-3 col-md-3">
	  <p></p>
	  </div>
	</div><!--row-->
	<div class="row">
      	   <div class="col-xm-3 col-sm-3 col-md-3">
	  <p></p>
	  </div>
	</div><!--row-->
	<div class="row">
      	   <div class="col-xm-3 col-sm-3 col-md-3">
	  <p></p>
	  </div>
	</div><!--row-->
	<div class="row">
      	  
	 <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>
	  <div class="col-xm-6 col-sm-6 col-md-6">
	  <h3>Login Pannel</h3>
	  </div>
	  <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>
	 </div> <!--row-->
	<div class="row">
      <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>
	  <div class="col-xm-6 col-sm-6 col-md-6">
	  	  
	     <input type="text" class="form-control" name="user" placeholder="Enter your username" />
		   </div>
	   </div>
	  
	  <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>	  
	</div> <!--row-->
	
	<div class="row">
      <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>
	  <div class="col-xm-6 col-sm-6 col-md-6">
	  	   <div class="form-group">
	     <input type="password" class="form-control" name="pass" placeholder="Enter your password" />
		   </div>
	   </div>
	  
	  <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>	  
	</div><!--row-->
	<div class="row">
      <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>
	  <div class="col-xm-6 col-sm-6 col-md-6">
	  	   <div class="form-group">
	   		  <input type="submit" class="btn btn-default"  name="sub"/>	
			</div>
	   </div>
	  
	  <div class="col-xm-3 col-sm-3 col-md-3">
	  
	  </div>	  
	</div> <!--row-->
	</div><!--form div-->          
</form>
</div><!--container-->
</body>
</html>
