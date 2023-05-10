<?php 
include 'connect.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$message =$_POST['message'];

		$sql = "SELECT * FROM msg WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO msg (username, email, message)
					VALUES ('$username', '$email', '$message')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
			}
		} 
		
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tunisie Telecom</title>
    <link rel="icon" type="image/x-icon" href="img/logo-tt.svg"><?php include 'assets/header.html' ?>
<link rel="stylesheet" href="styles.css" media="screen">
</head>
<body>
<section class="get-in-touch">
   <h1 class="title">Nous contacter</h1>
   <form method="post" class="contact-form row">
      <div class="form-field col-lg-6">
         <input class="input-text js-input" name="username" value="" required>
         <label class="label" for="name">Nom et Prénom</label>
      </div>
      <div class="form-field col-lg-6 ">
         <input id="email" class="input-text js-input" type="email" name="email" value="" required>
         <label class="label" for="email">E-mail</label>
      </div>
      <div class="form-field col-lg-12">
         <textarea class="input-text js-input" placeholder="Message" type="text" name="message" value="" required></textarea>
      </div>      
    
      <div class="text-center form-field col-lg-12">
         <input class="submit-btn" name="submit" type="submit" value="Envoyer">
   </form>
</section>
</body>
<footer>
<!--footer-->
<?php include 'assets/footer.html' ?>
</footer>
</html>