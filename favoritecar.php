<?php
	$cid = (int)$_POST['cid'];
	$uid = $_SESSION['userid'];
	$sql = "INSERT INTO favoritecars(carid, userid) Values($cid, $uid);";
	mysqli_query($dbconnect, $sql);
?>
<p> Car Added to favorites </p>
<p><a href="index.php?page=usercars">Go to favorites.</a></p>