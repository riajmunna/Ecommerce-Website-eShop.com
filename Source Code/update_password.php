<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"project_lms");
	$password = "";
	$query = "select * from users where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$password = $row['password'];
	}
	if($password == $_POST['old_password']){
		$query = "update users set password = '$_POST[new_password]' where email = '$_SESSION[email]'";
		$query_run = mysqli_query($connection,$query);
        echo'<script type="text/javascript"> window.onload=function() {alert("Password Updated...");}
        </script>';
	}
    else{
        echo'<script type="text/javascript"> window.onload=function() {alert("Current Password is Wrong!!");}
        </script>';
    }
    ?>

