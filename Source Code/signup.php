<?php
 	if(isset($_POST['submit'])){
 		$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"project_lms");
	$query = "insert into users values('','$_POST[name]','$_POST[email]','$_POST[password]','$_POST[address]')";
	$query_run = mysqli_query($connection,$query);
 	}
	
?>
<script type="text/javascript">
	alert("Registration Successfull");
	window.location.href = "login.html";
</script>