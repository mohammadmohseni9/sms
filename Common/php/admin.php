<?php
if($_POST['admin']=='admin' && $_POST['apassword']=='password'){
	?>
<form action="register.php" method="POST">
Register Here
<input type="text" name="username" value="username" />
<input type="password" name="password" value="password" />
<input type="password" name="repassword" value="repassword" />

<input type="text" name="user_status" value="student" />
<input type="submit" name="register"  value="Register"/>
</form>
<?php
}
else{
	echo "Invalid username or password.";
	?>
	<form action="login.php" method="POST">
	<input type="submit" name="retry" value="Retry!">
	</form>
	<?php
}
?>