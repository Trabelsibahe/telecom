
<?php 
session_start();
if (isset($_SESSION['username'])) {
  header("Location: welcome.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tunisie Telecom</title>
    <link rel="icon" type="image/x-icon" href="img/logo-tt.svg">

</head>
<body>
<!--Navigation bar-->
<?php include 'assets/header.html' ?>
<!-- Nav -->
<nav class="navbar navbar-expand-lg">
<div class="container-fluid">
  <ul class="navbar-nav mr-auto"><li>
    <a class="navbar-brand" href="Login.php"><h6  style="color:gray;font-family:tahoma">Connexion</h6></a></li>
    <li><a class="navbar-brand" href="Register.php"><h6  style="font-family:tahoma;color:gray">S'inscrire</h6></a></li></ul>
</div></nav>
<hr style="background:linear-gradient(125deg,#c72660,#04345a);height:6px;position:relative;top:-21px;">
<?php include 'assets/carousel.html' ?>
<?php include 'object.php' ?>

</body>
<footer>
<!--footer-->
<?php include 'assets/footer.html' ?>
</footer>
</html>








