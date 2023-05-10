<?php 
include 'connect.php';
session_start();
$sql = "SELECT article, quantite, nom, prenom, daten, cin, code, ville, ad1, Date FROM cmd WHERE username = '" . $_SESSION[ "username" ] . "'";

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
<h1 class="title">Historique des commandes</h1>
<table class="table">
            <tr>
                <th>Article</th>
                <th>Quantité</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>Carte d'identité</th>
                <th>Code postale</th>
                <th>Ville</th>
                <th>Adresse</th>
                <th>Date d'achat</th>

            </tr>
            <?php $result = $conn->query($sql);
            $none="Aucune commande trouvée.";
            while($row = $result->fetch_assoc()) {
                    ?>
            <tr>
                <td><?php echo $row['article'];?></td>
                <td><?php echo $row['quantite'];?></td>
                <td><?php echo $row['nom'];?></td>
                <td><?php echo $row['prenom'];?></td>
                <td><?php echo $row['daten'];?></td>
                <td><?php echo $row['cin'];?></td>
                <td><?php echo $row['code'];?></td>
                <td><?php echo $row['ville'];?></td>
                <td><?php echo $row['ad1'];?></td>
                <td><?php echo $row['Date'];?></td>
                <?php $none="";}?>
            </tr><table><p class="text-center"><?php echo $none;?></p></section>
</Body>
<?php include 'assets/footer.html' ?>
</html>