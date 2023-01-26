<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Custom Website</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
  <img src="asset/img/banner1.png" width="100%">

	<div class="wrapper">
			<div class="center">
			<center><p style="font-size:50px;">SELAMAT DATANG KE SISTEM GENERASI PEDULI SAMPAH</p></center>
			
			<div class="slideshow-container">

<center>
<div class="mySlides fade">
  <img src="asset/img/b3.jpg" style="width: 20%">
</div>

<div class="mySlides fade">
  <img src="asset/img/ban2.jpg" style="width:20%">
</div>

<div class="mySlides fade">
  <img src="asset/img/b5.jpg" style="width:20%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</center>

<marquee width="100%" direction="left" height="100px" style="font-size: 30px;">
INFO AKTIVITI YANG TERKINI DARI KOMUNITI GENERASI PEDULI SAMPAH
</marquee>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

<center>
  <style>
    .styled {
    border: 0;
    line-height: 2.5;
    padding: 0 20px;
    font-size: 1rem;
    text-align: center;
    color: #fff;
    text-shadow: 1px 1px 1px #000;
    border-radius: 10px;
    background-color: rgba(220, 0, 0, 1);
    background-image: linear-gradient(to top left, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) 30%, rgba(0, 0, 0, 0));
    box-shadow: inset 2px 2px 3px rgba(255, 255, 255, 0.6), inset -2px -2px 3px rgba(0, 0, 0, 0.6);
}

.styled:hover {
    background-color: rgba(255, 0, 0, 1);
}

.styled:active {
    box-shadow: inset -2px -2px 3px rgba(255, 255, 255, 0.6), inset 2px 2px 3px rgba(0, 0, 0, 0.6);
}
</style>

<a href="login.php"button class="favorite styled"
        type="button">Admin</button>

<a href="index.php" button class="favorite styled"
        type="button">User</button>
<br><br>
        <a href="register.php"button class="favorite styled"
        type="button">Registration</button>
</center>