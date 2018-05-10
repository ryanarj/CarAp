<?php 
	$uid = $_SESSION['userid'];
	$favorite_sql="SELECT DISTINCT car.make as make, car.color as color, car.model as model, car.type as type, car.transmission as trans, sell.sellerlocation as location, sell.sellername as location_name, car.carid as cid, sell.sellerphone as phone FROM cars car, favoritecars fc, seller sell WHERE fc.userid=$uid and fc.carid=car.carid and car.sellerid=sell.sellerid;";
	$favorite_query=mysqli_query($dbconnect, $favorite_sql);
	$fav_rs=mysqli_fetch_assoc($favorite_query);
	if(mysqli_num_rows($favorite_query) == 0) {
		echo "No cars available.";
	} else {
		?>
		<h1>Car Listing </h1>
		<?php do {
			?>
		     <div class="col-md-4">  
	             <form method="post" action="index.php?page=deleteusercar">
	                  <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">   
	                       <h4>
	                       <?php echo $fav_rs["color"], " ",  $fav_rs["make"]," ", $fav_rs["model"], " in ", $fav_rs['location'], " at ", $fav_rs['location_name'], " Contact: ", $fav_rs['phone']; ?> 
	                       </h4>
	                       <input type="hidden" name="cid" value="<?php echo $fav_rs["cid"]; ?>" /> 
	                       <input type="submit" name="add_to_favorite" style="margin-top:5px;" class="btn btn-success" value="Delete Car" /> 
	                  </div>  
	             </form>  
	        </div>
		<?php
		} while($fav_rs=mysqli_fetch_assoc($favorite_query));
		?>
	<?php
	}
?>
