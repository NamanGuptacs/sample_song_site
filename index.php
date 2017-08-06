<?php
require 'connect.php';
if(isset($_POST['sub']))
{
	$name=$_POST['Name'];
	$email=$_POST['Email'];
	$message=$_POST['Message'];
	
	$sql="insert into contact (name,email,message) values('$name','$email','$message')";
	$query=mysqli_query($con,$sql);
	if($query==true)
	{
	  $message="Successfully Submitted";
	echo "<script type='text/javascript'>alert('$message');</script>";
	
	}
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
<title>Dj Songs</title>
<style>
body,h1,h2,h3,h4,h5 {font-family:"Raleway",sans-serif}
body, html {height: 100%}
.bgimg {
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url("/project/img/bgimg.jpg");
    min-height: 90%;
}
.text:hover{ cursor: pointer}
.text:hover{opacity: 0.6; transition: 0.3s}
</style>
</head>

<body>
<!-- Sidenav/menu -->
<nav class="w3-sidenav w3-black  w3-animate-left w3-center w3-top w3-text-light-grey w3-large" style="z-index:3;width:250px;font-weight:bold;display:none;left:0;" id="mySidenav">
  <a href="javascript:void()" onclick="w3_close()" class="w3-padding-32">CLOSE</a> 
   <a href="#about" onclick="w3_close()" class="w3-padding-16">ABOUT ME</a> 
  <a href="#contact" onclick="w3_close()" class="w3-padding-16">CONTACT</a>
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
<!-- Project Section -->
<div class="w3-padding-bottom w3-sand w3-container w3-padding-28" id="songs">
    <h1 class="w3-border-bottom w3-border-light-grey w3-padding-8" style="font-family:'Amatic SC' ,sans-serif">Songs</h1>
  
<?php
include ('homeview.php');
 while ($data=mysqli_fetch_array($query))
 {
 ?>      

          <div class="w3-center w3-quarter">
 	 		<h2 class="w3-center" style="font-family:'Amatic SC' ,sans-serif"><?php echo $data['song_title'];?></h2>
		
		<div class="w3-opacity-min w3-image w3-hover-opacity">
        <img src="/project/img/song.png" title="<?php echo $data['song_title'];?>" alt="<?php echo $data['song_title'];?>" style="width:80%;height:50%;">
		</div>
		<div class="w3-center w3-grey text w3-padding" style="width:90%">
		<a href="download.php?dwn=<?php echo $data['id'];?>">
		<p>Download<span class="glyphicon glyphicon-download-alt"></span></p></a>
		</div>
		</div>		
  <?php
 }
 ?>
 </div>
<!-- About section -->
  <div class="w3-container w3-dark-grey w3-center w3-text-light-grey w3-padding-32" id="about">
    <h4><b>About Me</b></h4>
    <img src="/project/img/me.jpg" alt="Me" class="w3-image w3-padding-32" width="600" height="650">
    <div class="w3-content w3-justify" style="max-width:600px">
      <h4>John Martin</h4>
      <p> I love mixing songs. In the free time I spent time doing a mix with different bits. I am a full time student and part time a Dj. I also love to sing a song and play various instrument. The best thing about being a DJ is making people happy. There is nothing like seeing people get up from a table to dance or the expression on their face when they hear a song they love. I also love to educate people on music they have never heard. <br />I've always wanted to be a DJ so I could play the music I love for other people. That feeling hasn't changed, but my sets are always evolving. In terms of tailoring to a specific crowd, certainly I do play differently depending on the situation. It's a different feel, for example, in a small club versus a festival.  
      </p>
	  </div>
	  </div>
	  
 <!-- Contact section -->
 <div class="w3-container w3-light-grey w3-padding-32 w3-padding-large" id="contact">
    <div class="w3-content" style="max-width:600px">
      <h4 class="w3-center"><b>Contact Me</b></h4>
      <p>Do you want me to mix a song for you? Fill out the form and fill me in with the details :) I love meeting new people!</p>
      <form method="post" name="form">
        <div class="w3-group">
          <label>Name</label>
          <input class="w3-input w3-border" type="text" name="Name" required>
        </div>
        <div class="w3-group">
          <label>Email</label>
          <input class="w3-input w3-border" type="text" name="Email" required>
        </div>
        <div class="w3-group">
          <label>Message</label>
          <input class="w3-input w3-border" type="text" name="Message" required>
        </div>
        <button name="sub" id="sub" type="submit" class="w3-btn-block w3-padding-large w3-black w3-margin-bottom">Send Message</button>
      </form>
    </div>
  </div> 
  <footer class="w3-center w3-black w3-padding-48 w3-xxlarge" style="font-family:'Amatic SC' ,sans-serif;">
  <p>Powered by <a href="#" title="dj songs"  class="w3-hover-text-green" style="text-decoration:none">dj songs</a></p>
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
