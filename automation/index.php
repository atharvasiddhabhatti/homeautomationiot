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
        
        
        
<!-- LIGHT CODING STARTS -->
    <style type="text/css">
.buttonon {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: green;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.buttonon:hover {background-color: green}

.buttonon:active {
  background-color: green;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

.buttonoff {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: white;
  background-color: red;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.buttonoff:hover {background-color: red}

.buttonoff:active {
  background-color: red;
  box-shadow: 0 5px white;
  transform: translateY(4px);

</style>

        <div style="padding:0 16px;">
<center>
<b><p>Children's Room Light</p></b>
         <form method="get" action="../automation">
                 <input type="submit" class="buttonon" value="ON"    name="on">
                 <input type="submit" value="OFF" class="buttonoff"  name="off">
         </form>
         <?php
         $setmode17 = shell_exec("/usr/local/bin/gpio -g mode 18 out");
         if(isset($_GET['on'])){
                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 18 1");
                  echo "Light is ON";
         }
         else if(isset($_GET['off'])){
                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 18 0");
                 echo "Light is OFF";
         }
         ?>

</center>
</div>
        
        
        
<!-- LIGHT CODING ENDS -->        

</body>
</html>
        