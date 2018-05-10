<?php
	include("dbconnect.php");
	$username = mysqli_real_escape_string($dbconnect, $_POST['username']);
	$password = mysqli_real_escape_string($dbconnect, $_POST['password']);
	$sql = "INSERT INTO users(username, password) Values('$username', '$password');";
	mysqli_query($dbconnect, $sql);
?>
<p> Welcome <?php echo $username ?> !</p>
<p><a href="index.php?page=cars">Go to cars</a></p>