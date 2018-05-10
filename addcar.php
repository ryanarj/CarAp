<h1>Add new car</h1>
<form method="post" action="index.php?page=entercar" />
<td>
	<p> Make: <input type="text" name="make" size="40" maxlength="50"/></p>
</td>
<td>
	<p> Model: <input type="text" name="model" size="40" maxlength="50"/></p>
</td>
<td>
	<p> Year: <input type="text" name="year" size="40" maxlength="50"/></p>
</td>
<td>
	<p> Color: <input type="text" name="color" size="40" maxlength="50"/></p>
</td>
<td>
	<p> Mileage: <input type="text" name="mileage" size="40" maxlength="50"/></p>
</td>
<td>
	<p> Type: <input type="text" name="type" size="40" maxlength="50"/></p>
<td>
</td>
	<p> Transmission: <input type="text" name="transmission" size="40" maxlength="50"/></p>
<td>
	<p> Price: <input type="text" name="price" size="40" maxlength="50"/></p><br />
</td>
<p> Please add a seller if there isn't any available.<a href="index.php?page=addseller"> Add Seller</a></p>
<td>
	<p> Seller <select class="form-dropdown" name="sellername" style="width:150px" id="input_5" name="q5_listOf"> <

<?php
	$sql = "SELECT * FROM seller";
	$result = mysqli_query($dbconnect, $sql);

	// Add options to the drop down
	while($row=mysqli_fetch_array($result))
	{
	?>
	  <option><?php echo $row['sellername']; ?> </option>
	<?php
	}

?>
</select></p>
</td>
<p><input type="submit" name="submit" value="Add Car" /></p>