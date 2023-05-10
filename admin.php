<?php 
include 'connect.php';
session_start();
if ($_SESSION['username']!=="admin") {
    header("Location: error.php");
}
$sql = "SELECT article, quantite, nom, prenom, username, daten, cin, code, ville, ad1, Date FROM cmd";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    .admin{
        width: 150px;
    padding: 10px;
    border: none;
    background: #000;
    color: #fff;
    cursor: pointer;
    }
</style>
<link rel="stylesheet" href="styles.css" media="screen">
<!--Navigation bar-->
<?php include 'assets/header.html' ?>
</head>
<body>
<section class="get-in-touch">

<h1 class="title">panneau d'administration</h1>
<div class="form-field col-lg-8">
         <a href="admin2.php"><button class="admin">Historique des Messages</button></a>
      </div>
<table class="table">
            <tr>
                <th>Article</th>
                <th>Quantité</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Nom d'utilisateur</th>
                <th>Date de naissance</th>
                <th>Carte d'identité</th>
                <th>Code postale</th>
                <th>Ville</th>
                <th>Adresse</th>
                <th>Date d'achat</th>

            </tr>
            <?php 
                while($row = $result->fetch_assoc()) {
                ?>
            <tr>
                <td><?php echo $row['article'];?></td>
                <td><?php echo $row['quantite'];?></td>
                <td><?php echo $row['nom'];?></td>
                <td><?php echo $row['prenom'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['daten'];?></td>
                <td><?php echo $row['cin'];?></td>
                <td><?php echo $row['code'];?></td>
                <td><?php echo $row['ville'];?></td>
                <td><?php echo $row['ad1'];?></td>
                <td><?php echo $row['Date'];?></td>

                </tr>
                <?php
                }
             ?>
        </table>
</section>
</Body>
<?php include 'assets/footer.html' ?>
</html>