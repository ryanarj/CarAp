<?php
	$dbconnect = mysqli_connect("127.0.0.1", "root", "12345", "carsDB");
	if(mysqli_connect_errno()){
		echo "Connection failed".mysqli_connect_error();
		exit;
	}
?>