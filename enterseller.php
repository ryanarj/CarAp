<?php

	$newseller_sql= "INSERT INTO seller (sellername, sellerlocation) 
				  VALUES('".mysqli_real_escape_string($dbconnect, $_POST['sellername'])."',
				  		 '".mysqli_real_escape_string($dbconnect, $_POST['sellerlocation'])."');";
	$newseller_query = mysqli_query($dbconnect, $newseller_sql);
?>
<p> New Seller Added </p>
<p><a href="index.php?page=addseller">Add another seller</a> --
   <a href="index.php?page=addcar">Add car</a></p>