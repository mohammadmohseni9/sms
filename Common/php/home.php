<?php
session_start();
$_SESSION['loggedin'] =true;
if(isset($_POST['logout'])){
	echo $_SESSION['loggedin'];
     session_unset();
	session_destroy();
	//die();
header("Location:login.php");
}

echo "Welcome";
?>
<form action="<?php $_PHP_SELF ?>" method="POST">
<input type="submit" name="logout" value="Log Out" />
</form>
