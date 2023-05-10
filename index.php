
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tunisie Telecom</title>
    <link rel="icon" type="image/x-icon" href="img/logo-tt.svg">

    <style>
    /* Add some content at the bottom of the video/page */
.content {
    position: fixed;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
  }
  
  /* Style the button used to pause/play the video */
  #myBtn {
    width: 200px;
    font-size: 18px;
    padding: 10px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
  }
  
  #myBtn:hover {
    background: #ddd;
    color:black;}
  
  .mute {
  top: 89px;
  right: 33px;
  position:absolute;
  z-index: 1;
  color:white;
  border:none;
  background:none;
}
</style>
</head>
<body>
<!--Navigation bar-->
<?php include 'assets/header.html' ?>


<!--Body-->

<!--video-->
<button id="button" onclick="Mute()" type="button" class="mute"><i style='font-size:24px' class='fas'>&#xf6a9;</i>
</button>
<video autoplay muted loop id="myVideo" width="100%">
<source src="video/tt.mp4" type="video/mp4"></video>
<script>
var vid = document.getElementById("myVideo");
var but = document.getElementById("button");
function Mute() {
  if (vid.muted == true){
  vid.muted = false;
  but.innerHTML="<i style='font-size:24px' class='fa'>&#xf028;</i>"}
  else {
  vid.muted = true;
  but.innerHTML="<i style='font-size:24px' class='fas'>&#xf6a9;</i>"}
}</script> 
<!-- Optional: some overlay text to describe the video -->
<div class="content">
  <h1>Tunisie Telecom</h1>
  <p>Rejoindre le meilleur réseau en Tunisie.</p>
  <!-- Use a button to pause/play the video with JavaScript -->
  <a href="Register.php"><button id="myBtn">S'inscrire</button></a>
  &#8198
  <a href="services.php"><button id="myBtn">Commander</button></a>
</div>
</body>

<footer>
<!--footer-->
<?php include 'assets/footer.html' ?>
</footer>
</html>


















<?php
include 'connect.php';
error_reporting(0);
session_start();

?>