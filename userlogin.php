<?php
     session_start();
?>
<h1>User Login</h1>
<form method="post" action="">
	<table>
		<tr>
			<td> Username:</td>
			<td><input type="text" name="username" class="textInput" maxlength=30></td>
		</tr>
		<tr>
			<td> Password:</td>
			<td><input name="password" type="password" class="password" maxlength=30></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="userlogin" value="Login"></td>
		</tr>
		<tr>
			<td></td>
			<td><p><a href="index.php?page=logout">Logout</a><p></td>
		</tr>
	</table>
</form>

<?php
	if(isset($_POST['userlogin'])) {
		$login_sql="SELECT * FROM users WHERE username='".$_POST['username']."' AND password='".$_POST['password']."';";
		$login_query=mysqli_query($dbconnect, $login_sql);
		if(mysqli_num_rows($login_query) > 0) {
			$login_rs=mysqli_fetch_assoc($login_query);
			$_SESSION['userid'] = $login_rs['userid'];
			$_SESSION['username'] = $login_rs['username'];
		}
	}
?>


<?php
	if(isset($_SESSION['username'])){
		?>
		<p>Welcome <?php echo $_SESSION['username']; ?></p>
		<?php
	}
?>



