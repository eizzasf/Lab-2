<?php
session_start();
if (!isset($_SESSION['sessionid'])) {
    echo "<script>alert('Session not available. Please login');</script>";
    echo "<script> window.location.replace('./index.php')</script>";
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="design.css">
    <script src="Js/script.js"></script>


    <title>RGB Camera Rental</title>
</head>


<body>

    <!-- Navigation -->
<nav>
  <input type="checkbox" id="check">
  <label for="check" class="checkbtn">
  <i class="fas fa-bars"></i>
  </label>
    <img src="..\rgb\pic\logoRGB2.jpg" alt="Logo RGB" class="logo" style="position: relative;"></img>
    
    <ul>
        <li><a href="#home" class=" w3-padding-large w3-mobile w3-text-black w3-hover-text-white" > HOME</a></li>
        <li><a href="#about" class="w3-padding-large w3-mobile w3-text-black  w3-hover-text-white"> ABOUT</a></li>
        <li><a href="#product" class="w3-padding-large w3-mobile w3-text-black  w3-hover-text-white">PRODUCT</a></li>
        <li><a href="#packages" class="w3-padding-large w3-mobile w3-text-black  w3-hover-text-white">PACKAGES</a></li>
        <li><a href="#policy" class="w3-padding-large w3-mobile w3-text-black w3-hover-text-white "> POLICY</a></li>
        <li><a href="#logout" class="active w3-black w3-padding-large w3-mobile w3-text-white w3-hover-text-black w3-border-blue" 
        name="logout" id="logout" onclick="logout()"> LOGOUT</a></li>
    </ul>
    </nav>

    <!---First section-->
  <div class="w3-container w3-blue w3-padding-64 w3-center">
    <label class="w3-xlarge">ADMIN PAGE</label>
    <br><br><br>
    <h1>The website is under development!</h1>
  </div>


      <!--footer-->
      <center><img src="pic/logoRGB2.jpg" alt="whatsapp" style="width: 20vw; height: auto"></center>
      <p style="text-align: center; color: grey; padding-top: 2%">© Copyright 2021 by Norizzati Sofi. Matric No. 263870 | RGB Colours Production</p>
  </div>
  
 <!--top button-->
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<script>
      function logout(){
           location.replace('logout.php');
      }
  </script>
    
</body>
</html>