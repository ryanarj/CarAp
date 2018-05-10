<?php
	$cid = (int)$_POST['cid'];
	$sql = "DELETE FROM cars WHERE carid=$cid;";
	mysqli_query($dbconnect, $sql);
?>
<p>Car has been deleted for the Database. </p>
<p><a href="index.php?page=cpanel">Go to Control Panel.</a></p>