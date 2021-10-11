<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"project_lms");
	$name = "";
	$email = "";
	$contact = "";
	$address = "";
	$query = "select * from users where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$address = $row['address'];
	}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 290px;
    margin: auto;
    text-align: center;
    color: black;
    margin-top: 10vh;
  }

  .title {
    color: grey;
    font-size: 18px;
  }

  .img {
    height: 250px !important;
    width: 250px !important;
    margin: 1vw;
  }

  a {
    text-decoration: none;
    font-size: 22px;
    color: black;
  }

  .button {
    margin-left: 0vw !important;
  }
</style>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Asap&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <title>eShop</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light sticky-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="#"><img class="img-navbar img-fluid" src="./assets/img/Eshop.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="index.html#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="shop.html">Shop</a></li>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        <li class="nav-item"><a class="nav-link" href="checkout.php" id="myBtn">
            <i class="fas fa-lg fa-shopping-cart"></i>
          </a></li>
</nav>
<div class="card">
  <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class=" rounded-circle img" alt="User's picture"
    style="width:100%">
  <h3>
    <?php echo $name;?>
  </h3>
  <p class="title">
    <?php echo $email;?>
  </p>
  <p>
    <?php echo $address;?>
  </p>
  <p>
    <a class="button" href="edit_profile.php">Update Information</a>
</p>
</div>
<div class="container text-center">
  <p class="text-muted mb-0 py-2">© 2021 All rights reserved. develop by Riaj, Anando, Azharul</p>
</div>

</html>