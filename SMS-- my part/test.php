<?php

	try{
		$handler = new PDO("mysql:host=127.0.0.1; dbname='test'", 'root', '');	//remember, no space is allowed in the first argument
	}

	catch(PDOException $e){
		print($e->getMessage());
	}
?>