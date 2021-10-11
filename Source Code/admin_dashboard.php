<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"project_lms");
	$name = "";
	$email = "";
	$address = "";
	$password = "";

	$query = "select * from users";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Asap&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
	<style type="text/css">
  		#side_bar{
  			background-color: whitesmoke;
  			padding: 50px;
  			width: 300px;
  			height: 450px;
  		}
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">		
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item"><a class="nav-link" href="admin_logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>
<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
			<<form>
				<table class="table-bordered" width="900px" style="text-align: center">
					<h1 style="text-align: center">Registerd Users</h1><br>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
					</tr>
					<?php
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						$name = $row['name'];
						$email = $row['email'];
						$address = $row['address'];
				?>
					<tr>
						<td>
							<?php echo $name;?>
						</td>
						<td>
							<?php echo $email;?>
						</td>
						<td>
							<?php echo $address;?>
						</td>
					</tr>
					<?php
					}
				?>
				</table>
			</form>
	</div>
	<div class="col-md-2"></div>
</div>
	
</body>
</html>