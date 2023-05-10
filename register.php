<?php 

include 'connect.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
$msg ="";
	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
            $msg="Inscription réussite! <br><a href='login.php'><u style='color:#04345a'>Connexion ici</u></a>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				$msg ="Une erreur est survenue!";
			}
		} else {
			$msg ="L'email/Le nom d'utilisateur existe déjà!";
		}
		
	} else {
		$msg ="Le mot de passe ne correspond pas!";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<!--header-->
<?php include 'assets/header.html' ?>
<link rel="stylesheet" href="styles.css" media="screen">
</head>
<body>
<section class="get-in-touch">
   <h1 class="title">CRÉEZ VOTRE COMPTE</h1>
   <form method="post" class="contact-form row">
      <div class="form-field col-lg-6">
         <input class="input-text js-input" name="username" value="<?php echo $username; ?>" >
         <label class="label" for="name">Nom d'utilisateur</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="email" class="input-text js-input" type="email" name="email" value="<?php echo $email; ?>">
         <label class="label" for="email">E-mail</label>
      </div>
      <div class="form-field col-lg-6">
         <input id="email" class="input-text js-input" type="password" name="password" value="<?php echo $_POST['password']; ?>">
         <label class="label" for="Password">Mot de Passe</label>
      </div>
      </div>
      
      <div class="form-field col-lg-6 ">
         <input type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" class="input-text js-input" type="text" required>
         <label class="label" for="company">Confirmer le mot de passe</label>
      </div>

      <p class="text-center" style="color:#c72660;"><?php echo $msg; ?></p>

   
      <div class="text-center form-field col-lg-12">
         <input class="submit-btn" name="submit" type="submit" value="Inscription">
      <p class="text-center text-muted mt-5 mb-0">Vous avez déja un compte?
        <a href="Login.php" class="fw-bold text-body"><u style="color:#04345a">Connexion</u></a></p></div>
   </form>
</section>
</body>
<footer>
<!--footer-->
<?php include 'assets/footer.html' ?>
</footer>
</html>