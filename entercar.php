<?php
	$seller_sql = "Select seller.sellerid from seller where seller.sellername = '".$_POST['sellername']."';";
	$seller_query=mysqli_query($dbconnect, $seller_sql);
		if(mysqli_num_rows($seller_query) > 0) {
			$seller_rs=mysqli_fetch_assoc($seller_query);
		}
	$sid = $seller_rs['sellerid'];

	$newcar_sql= "INSERT INTO cars (make, model, color, type, transmission, mileage, price, year, sellerid) 
				  VALUES('".mysqli_real_escape_string($dbconnect, $_POST['make'])."',
				  		 '".mysqli_real_escape_string($dbconnect, $_POST['model'])."',
				  		 '".mysqli_real_escape_string($dbconnect, $_POST['color'])."',
				  		 '".mysqli_real_escape_string($dbconnect, $_POST['type'])."',
				  		 '".mysqli_real_escape_string($dbconnect, $_POST['transmission'])."',
				  		 '".mysqli_real_escape_string($dbconnect, $_POST['mileage'])."',
				  		 '".mysqli_real_escape_string($dbconnect, $_POST['price'])."',
				  		 '".mysqli_real_escape_string($dbconnect, $_POST['year'])."', $sid);";
	$newcar_query = mysqli_query($dbconnect, $newcar_sql);
	$new_rs=mysqli_fetch_assoc($newcar_query);
	$new_car_id = $new_rs['carid'];
	$seller_sql = "INSERT INTO favoritecars(carid, userid) VALUES($new_car_id, 1);";

?>
<p> New Car Added </p>
<p><a href="index.php?page=addseller">Add another seller</a> --
   <a href="index.php?page=addcar">Add another car</a></p>