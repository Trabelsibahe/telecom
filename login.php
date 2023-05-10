<?php 

include 'connect.php';

error_reporting(0);

session_start();


if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE username='$email' AND password='$password' or email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
   $msg="";
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php"); 
	} else { $msg = "Vérifiez que votre nom d'utilisateur et votre mot de passe sont corrects, puis réessayez.";}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="img/logo-tt.svg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tunisie Telecom</title>
<link rel="stylesheet" href="styles.css" media="screen">
<style>
::placeholder {color: blue;}
::-ms-input-placeholder {color: blue;}</style>
</head>
<body>
<!--Navigation bar-->
<?php include 'assets/header.html' ?>
<!--Body-->
<section class="get-in-touch">
   <h1 class="title">S'identifier </h1>
   <form method="post" class="contact-form row">
      <div class="form-field col-lg-6">
         <input class="input-text js-input" type="text" name="email" value="<?php echo $email;?>">
         <label class="label" for="email">Nom d'utilisateur</label>

      </div>
      <div class="form-field col-lg-6">
         <input id="email" class="input-text js-input" type="password"
          name="password" value="<?php echo $_POST['password']; ?>">
          <label class="label" for="Password">Mot de Passe</label>
      </div>
      <p class="text-center" style="color:#c72660;"><?php echo $msg; ?></p>
   
      <div class="text-center form-field col-lg-12">
         <input class="submit-btn" name="submit"type="submit" value="Connexion">
      <p class="text-center text-muted mt-5 mb-0">Vous n'avez pas de compte?


        <a href="Register.php" class="fw-bold text-body"><u style="color:#04345a">Inscrivez-vous</u></a></p></div>
   </form>
</section>
</body>

<footer>
<!--footer-->
<?php include 'assets/footer.html' ?>
</footer>t
</html>








