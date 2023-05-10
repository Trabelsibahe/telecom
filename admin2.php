<?php 
include 'connect.php';
session_start();
if ($_SESSION['username']!=="admin") {
    header("Location: error.php");
}
$sql = "SELECT username,email, message FROM msg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styles.css" media="screen">
<style>
    .admin{
        width: 200px;
    padding: 10px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
    }
</style>
<!--Navigation bar-->
<?php include 'assets/header.html' ?>
</head>
<body>
<section class="get-in-touch">
<h1 class="title">Panneau d'administration</h1>
<div class="form-field col-lg-8">
<a href="admin.php"><button class="admin">Historique des Commandes</button>
      </div>
<table class="table">
            <tr>
                <th>Nom et Prénom</th>
                <th>Email</th>
                <th>Message</th>

            </tr>
            <?php $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                    ?>
            <tr>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['message'];?></td>
                <?php ;}?>
            </tr><table></section>
</Body>
<?php include 'assets/footer.html' ?>
</html>