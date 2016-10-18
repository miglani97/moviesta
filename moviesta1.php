<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<title>MOVIESTA</title>
	<link rel="stylesheet" type="text/css" href="style1.css"></head>

	<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
 
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


ul {
 
    list-style-type: none;
    margin: 0px;
    padding: 0px;
  overflow: hidden;
    background-color: #333	;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: cyan	;
	 
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
	<body>	 
<?php	
		include("session.php");
?>
 
 <font face = "Copperplate Gothic Light" size="4"> 
<ul><li><div class="logo"><font face = "Magneto" size="40" color="white">MOVIESTA</font></li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a class="active" href="#home">Home</a></li>
  
  <li>
  <li class="dropdown">
    <a href="#" class="dropbtn">Category</a>
    <div class="dropdown-content">
      <a href="movies.html">Movies</a>
      <a href="#">Sports</a>
      <a href="#">Plays</a>
    </div>
  
  </li>
<li><a href="#news">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAbout Us</a></li>
  <li><a href="#news">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspContact Us</a></li>
  </ul>	
 
<div class="sect sectOne" align="center">
 <br><br><br><br><br><br>
 <div class="right">
 <align="center"><font color="#FFFFFF"> Hello <?php echo $login_session; ?></font><br>
<td align="center"><a href="logout1.php"><font color="#FFFFFF">Logout</font></a>
 </div>
<div class="slideshow-container" >

<div class="mySlides fade">
  <div class="numbertext"> </div>
  <img src="pink.jpg" style="width:100%">
  <div class="text">Pink</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"> </div>
  <img src="msd.jpg" style="width:80%">
  <div class="text">MS Dhoni: The Untold Story</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"> </div>
  <img src="razz.jpg" height="40%" width="85%">
  <div class="text">Razz Reboot</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>

<div class="sect sectTwo"></div>

</body>
</html>