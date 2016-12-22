<?php

include_once('connection.php');
class ManageUsers{
  public $link;

function __construct(){
	$db_connection=new dbConnection();
	$this->link=$db_connection->connect();
	return $this->link;
} 
function RegisterUsers($username,$password,$ip_address,$time,$date,$us){
	$query=$this->link->prepare("INSERT INTO users (username,password,ip_address,time,date,user_status) VALUES (?,?,?,?,?,?)");
	$values=array($username,$password,$ip_address,$time,$date,$us);
	$query->execute($values);
	$counts = $query->rowCount();
	return $counts;
}
 
}
$users= new ManageUsers();
echo $users->RegisterUsers('bob','bob','127.0.0.1','12:00','29-02-2016','ok');
?>