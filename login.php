<h1>Admin Login</h1>
<form name="login" method="post" action="index.php?page=admin">
<p>Username <input name="username" type="text" maxlength=30 style="margin-left: 1.3%" /></p>
<p>Password <input name="password" type="password" maxlength=30 style="margin-left: 2%"/></p>
<?php
	if(isset($_POST['login']) && !isset($_SESSION['admin'])){
		?>
		<p><span class="error">Incorrect Username or Password</span></p>
		<?php
	}
?>

<p><input type="submit" name="login" value-"Submit"/></p>
</form>
