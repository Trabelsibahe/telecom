<?php 

include 'connect.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: error.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles.css" media="screen">

<!--Navigation bar-->
<?php include 'assets/header.html' ?>
</head>
<body>
<section class="get-in-touch">
<h1 class="title">Votre commande a bien été reçue</h1>
<p>Bonjour <?php echo $_SESSION['username']; ?>,</p>
<p>Merci pour votre commande. Vous recevrez un e-mail sur <b><?php

$sql = "SELECT email FROM users WHERE username = '" . $_SESSION[ "username" ] . "'";

$result = $conn->query($sql);
while($row = $result->fetch_assoc()) { echo $row["email"]; } ?> </b>contenant la confirmation de votre commande et la date de livraison.</p>
<a href="history.php"><p><u>Cliquez ici pour revoir votre commande.</u></p></a>
</section>
</Body>
<?php include 'assets/footer.html' ?>
</html>