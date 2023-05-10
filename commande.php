<?php 

include 'connect.php';

error_reporting(0);

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
$article=$_POST['article'];
$quantite=$_POST['quantite'];
if (isset($_POST['submit'])) {
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
   $daten = $_POST['daten'];
	$cin = $_POST['cin'];
	$code = $_POST['code'];
   $ville = $_POST['ville'];
	$ad1 = $_POST['ad1'];



		$sql = "SELECT * FROM cmd WHERE email=$email";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO cmd (article, quantite, nom, prenom, username, daten, cin, code, ville, ad1)
					VALUES ('$article','$quantite','$nom', '$prenom','" . $_SESSION[ "username" ] . "','$daten','$cin','$code','$ville','$ad1')";
			$result = mysqli_query($conn, $sql);
			
         if ($result) {
            header("location:final.php");
            echo "<script>alert('Wow! Commande Completed.')</script>";

   $nom="";
	$prenom="";
   $daten="";
	$cin ="";
	$code="";
	$ad1="";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
}
?>
<!DOCTYPE html>
<html lang="en">
<header>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="styles.css" media="screen">

<?php include 'assets/header.html' ?>
</header>
<body>

<section class="get-in-touch">
   <p class="title">Merci	de	bien	vouloir	remplir le	formulaire	ci-joint</p>

   <div class="text-center">

   </div>
   <form method="POST" action="" class="contact-form row">
      <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input" name="nom" type="text" value="" required>
         <label class="label" for="name">Nom</label>
      </div>
      <div class="form-field col-lg-6">
         <input id="name" class="input-text js-input" name="prenom" type="text" value="<?php echo $prenom; ?>" required>
         <label class="label" for="lastname">Prénom</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="daten" class="input-text js-input" name="daten" type="date" value="<?php echo $daten; ?>" required>
         <label class="label" for="daten">Date de naissance</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="CIN" class="input-text js-input" type="text" minlength="8" maxlength="8"  name="cin" value="<?php echo $cin; ?>" required>
         <label class="label" for="cin">Carte d'identité</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="ville" class="input-text js-input" type="text" name="ville" value="<?php echo $ville; ?>" required>
         <label class="label" for="ville">Ville</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="code" class="input-text js-input" type="text" name="code" value="<?php echo $code; ?>" required>
         <label class="label" for="code">Code Postal</label>
      </div>
      <div class="form-field col-lg-12">
         <input id="message" class="input-text js-input" type="text" name="ad1" value="<?php echo $ad1; ?>" required>
         <label class="label" for="ad1">Adresse</label>
      </div>
<input name="quantite" value="<?php echo $_POST['quantite']; ?>" hidden>
<input name="article" value="<?php echo $_POST['article'] ; ?>" hidden>

           <div class="form-field col-lg-8">
         <input class="submit-btn" name="submit" type="submit" value="Commander">
      </div>
      <a href="welcome.php" style="text-decoration:none;" class="text-right"><p style="color:#04345a"><u>Annuler</u></p></a></div>

      
   </form>
</section>

</body><footer>
<?php include 'assets/footer.html' ?>
</footer>
</html>


