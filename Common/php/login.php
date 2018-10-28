<?php
if(isset($_POST['logout'])){
	sessio_start();
}
?>
<form action="login_user.php" method="POST">
Log In
<input type="text" name="username" value="username" />
<input type="password" name="password" value="password" />
<input type="submit" name="submit" />
</form>
<form action="admin.php" method="POST">
<input type="text" name="admin" value="admin">
<input type="password" name="apassword" />
<input type="submit" name="adminpg" value="Go To Admin" />
</form>