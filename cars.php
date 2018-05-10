<?php 
	$stock_sql = "SELECT car.make as make, car.color as color, car.model as model, car.type as type, car.transmission as trans, car.year as year, car.price as price, car.mileage as mileage, car.carid as cid FROM cars car;";
	$stock_query=mysqli_query($dbconnect, $stock_sql) or die(mysqli_error($stock_sql));
	$stock_rs=mysqli_fetch_assoc($stock_query);
	if(mysqli_num_rows($stock_query)==0){
		echo "No cars available.";
	} else {
		?>
		<h1>Car Listing </h1>
		<?php do {
			?>
		     <div class="col-md-4">  
	             <form method="post" action="index.php?page=favoritecar">  
	                  <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">   
	                       <h4 class="text-info"><?php echo "| Color: ", $stock_rs["color"], " | Make: ", $stock_rs["make"], " | Model: ", $stock_rs["model"], " | Type: ", $stock_rs["type"], " | Transmission: ", $stock_rs["trans"], " | Year: ", $stock_rs["year"], " | Odometer: ", $stock_rs["mileage"], " | Price: $", $stock_rs["price"]; ?></h4>   
	                       <input type="hidden" name="cid" value="<?php echo $stock_rs["cid"]; ?>" />   
	                       <input type="submit" name="add_to_favorite" style="margin-top:5px;" class="btn btn-success" value="Add to favorite" />  
	                  </div>  
	             </form>  
	        </div>
		<?php
		} while($stock_rs=mysqli_fetch_assoc($stock_query));
		?>
	<?php
	}
?>