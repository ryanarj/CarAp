<?php
	$cid = (int)$_POST['cid'];
	$uid = $_SESSION['userid'];
	$sql = "DELETE FROM favoritecars WHERE carid=$cid and userid=$uid;";
	mysqli_query($dbconnect, $sql);
?>
<p>Car has been deleted from favorites. </p>
<p><a href="index.php?page=usercars">Go favorite cars cars.</a></p>