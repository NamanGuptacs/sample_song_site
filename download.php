<?php
include ('connect.php');
if (isset($_GET['dwn']))
{
   $download = $_GET['dwn'];
   $sql = "select * from upload where id='$download'";
   $query = mysqli_query($con,$sql);
   $data = mysqli_fetch_array($query);
   
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Download</title>
<style>
body,h1,h2,h3,h4,h5 {font-family:"Raleway",sans-serif}
body, html {height: 100%}
.bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("/project/img/bgimage.jpg");
    min-height: 60%;
}
</style>
</head>

<body>
<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-black  w3-animate-left w3-center w3-top w3-text-light-grey w3-large" style="z-index:3;width:250px;font-weight:bold;display:none;left:0;" id="mySidenav">
  <a href="javascript:void()" onclick="w3_close()" class="w3-padding-32">CLOSE</a>
  <a href="index.php" onclick="w3_close()" class="w3-padding-16">HOME</a> 
   <a href="index.php#about" onclick="w3_close()" class="w3-padding-16">ABOUT ME</a> 
  <a href="index.php#contact" onclick="w3_close()" class="w3-padding-16">CONTACT</a>
</nav>

<!-- Top menu on small screens -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
   <span class="w3-opennav w3-xxlarge w3-left w3-margin-left" onclick="w3_open()"><i class="fa fa-bars"></i></span>
  
   <div class="w3-display-middle w3-center">
    <span class="w3-text-black w3-hide-small" style="font-size:100px;font-family:'Amatic SC' ,sans-serif;">dj<br>SONG WORLD</span>
    <span class="w3-text-black w3-hide-large w3-hide-medium" style="font-size:60px;font-family:'Amatic SC' ,sans-serif;"><b>dj<br>SONG WORLD</b></span>
	</div>
  
</header>
<!-- Overlay effect when opening sidenav on small screens -->
<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!--download-->
<div class="w3-container w3-light-grey w3-padding-32 w3-padding-large" id="download">
    <div class="w3-content w3-padding" style="max-width:600px; background-color:#CCCCFF;">
	  <h3>Song Name:<?php echo $data['song_title'];?></h3>
	  <h3>Movie:<?php echo $data['song_movie'];?></h3>
	  <h3>Category:<?php echo $data['category'];?></h3>
	  <h3>Size:<?php echo $data['size']."kb";?></h3>
	  <audio controls>
	<source src="../project/upload/<?php echo $data['file'];?>" type="<?php echo $data['type'];?>">
	</audio>
	  <h3 style="text-decoration:none"><a href="../project/upload/<?php echo $data['file']; ?>" target="_blank">Download<span class="glyphicon glyphicon-download-alt"></span></a>
	  <a href="index.php" class="w3-right">Back</a></h3>
	</div>
	
</div>

 <footer class="w3-center w3-black w3-padding-48 w3-xxlarge" style="font-family:'Amatic SC' ,sans-serif;">
  <p>Powered by <a href="index.php" title="dj songs"  class="w3-hover-text-green" style="text-decoration:none">dj songs</a></p>
</footer>
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
