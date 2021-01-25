<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {          
background-color: #F8F8FF;
}

</style>
</head>
    
    
    
    
<body>
    
<title>Internet Of Things</title>
    
    <center><IMG SRC="/MEDIA/IMAGES/title.png" ALT="Internet Of things"></center>
        
        
<!-- NAVIGATION MENU CODING AND SCRIPTS -->
<style>    
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}

    </style>
        
        
<div class="topnav" id="myTopnav">
  <a href="/">Home</a>
  <a href="#">Temprature Moniter</a>
  <a href="../automation/">Homeautomation</a>
  <a href="../howto/">HowTo's</a>    
  <a href="#">Downloads</a>
  <a href="#">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
 
    

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
        
<!-- NAVIGATION MENU CODING AND SCRIPTS END HERE -->
        
<!-- MARQUEE STARTS -->
 
        <marquee style="" scrollamount="5" scrolldelay="3" direction="left" onmouseover="this.stop()" onmouseout="this.start()"><strong><span style="color:red">"Welcome to Internet Of Things By Atharva Siddhabhatti"</span></strong></marquee>
        <!-- MARQUEE ENDS -->
    
<!-- SLIDE SHOW STARTS -->
        
<style>
* {box-sizing:border-box}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: black;
  font-size: 17px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: black;
  font-size: 15px;
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

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
  
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="/MEDIA/IMAGES/pic1.jpeg" style="width:100%">
  <div class="text">How to chat on Facebook without using messenger</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="/MEDIA/IMAGES/pic2.jpg" style="width:100%">
  <div class="text">How To Send Orignal Image On Whatsapp</div>
</div>

 <div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="/MEDIA/IMAGES/pic3.png" style="width:100%">
  <div class="text">How To Play Songs with Lyrics</div>
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
    setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>
        
<!-- SLIDESHOW ENDS -->        
        
    
</body>
</html>