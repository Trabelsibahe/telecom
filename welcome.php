
<?php 
include 'connect.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");

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
<nav class="navbar">
<div class="container-fluid">
    <a class="navbar-brand" href="welcome.php"><h6  style="color:gray;font-family:tahoma">Bienvenue <?php echo $_SESSION['username']; ?>!</h6></a>
    <?php if ($_SESSION['username']=="admin"){?>
        <a class="navbar-brand" href="admin.php"><h6  style="color:gray;font-family:tahoma">Panneau d'administration</h6></a>
        <?php ;} else { ?>
    <a class="navbar-brand" href="history.php"><h6  style="color:gray;font-family:tahoma">Historique des commandes</h6></a><?php ;} ?>
    <a class="navbar-brand" href="logout.php"><h6  style="font-family:tahoma;color:gray">Se déconnecter</h6></a>
</div>
</nav>
<hr style="background:linear-gradient(125deg,#c72660,#04345a);height:6px;position:relative;top:-21px;">

<!--body-->
<?php include 'assets/carousel.html' ?>
<?php include 'object.php' ?>

</body>
<footer>
<!--footer-->
<?php include 'assets/footer.html' ?>
</footer>
</html>








