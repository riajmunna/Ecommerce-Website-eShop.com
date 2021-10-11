<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"project_lms");
	$name = "";
	$email = "";
	$address = "";
	$query = "select * from users where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$address = $row['address'];
	}
?><!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>eShop</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Asap&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="login.css">
</head>

<body>
   
<div class="container login" id="container">
	<div class="form-container sign-up-container">
		<form action="update.php" method="post">
			<h1>Update Inforamtion</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			
			<input type="text" name="name" placeholder="Name" required>
			<input type="email" name="email" placeholder="Email" required>
			<input type="text" name="address" placeholder="Address" required>
			<button name="submit">Update</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="update_password.php" method="post">
			<h1>Change Password</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="password" placeholder="Current Password" name="old_password" required>
			<input type="password" placeholder="New Password" name="new_password" required>
			<button name="update">Update Password</button>
		</form>
		
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To upadte user's inforamtion please use it</p>
				<button class="ghost" id="signIn">Update</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>To change user's password please use it</p>
				<button class="ghost" id="signUp">change Password</button>
			</div>
		</div>
	</div>
</div>

</div>



   <script> 
   const signUpButton = document.getElementById('signUp');
   const signInButton = document.getElementById('signIn');
   const container = document.getElementById('container');

      signUpButton.addEventListener('click', () => {
	      container.classList.add("right-panel-active");
      });

      signInButton.addEventListener('click', () => {
	      container.classList.remove("right-panel-active");
      });
   </script>
   <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>
