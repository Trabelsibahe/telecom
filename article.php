<?php 
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<header>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="styles.css" media="screen">

<style>
.img2{
   border:2px solid #04345a;
   width:100px;
}
</style>

</header>
<body>
<?php include 'assets/header.html' ?>
<section class="get-in-touch">
<p class="title">Merci	de	bien	vouloir	remplir le	formulaire	ci-joint
</p>
<form method="POST" action="commande.php" class="contact-form row">
<div class="form-field col-lg-2">
<?php if (isset($_POST['sim'])) {
echo "<img class='img2'  src='img/card1.png'>";}
if (isset($_POST['box'])) {
  echo " <img class='img2' src='img/card2.png'> ";}
  if (isset($_POST['cle'])) {
    echo "<img class='img2' src='img/card3.png'>";} ?>
</div>
      <div class="form-field col-lg-3">
         <input id="name" class="input-text js-input" name="article" type="text" value="<?php

if (isset($_POST['sim'])) {
  echo "Carte Sim 4G TT";
  $prix="2DT";}
  
  if (isset($_POST['box'])) {
    echo "Netbox Pro 4G TT";
    $prix="30DT";}
  
  
    if (isset($_POST['cle'])) {
      echo "Clé 4G TT";
      $prix="25DT";}
     
     ?>" readonly>
      </div>


      <div class="form-field col-lg-3">
         <input id="name" class="input-text js-input" name="quantite" type="number" placeholder="Quantité" max="3" min="1" value="" required>
      </div>
           <div class="form-field col-lg-2">
         <input class="submit-btn" name="suivant" type="submit" value="Suivant"></div>

    </form>
    <p>Prix: <?php echo $prix; ?></p>
    <p>Livraison: à domicile.</p>
  </section>
<a href="welcome.php" style="text-decoration:none;" class="text-center"><p style="color:#04345a"><u>Précédent</u></p></a></div>
</body><?php include 'assets/footer.html' ?>

</html> 




