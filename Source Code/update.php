<?php

	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"project_lms");
	$query = "update users set name='$_POST[name]',email='$_POST[email]',address='$_POST[address]' where email = '$_POST[email]'";
	$query_run = mysqli_query($connection,$query);
	
?>
<script type="text/javascript">
	alert("Updated successfully...");
	window.location.href = "view_profile.php";
</script>