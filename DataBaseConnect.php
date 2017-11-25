<?php 
function DataBaseConnect()
{
	$server = 'localhost';
	$username ='php';
	$password ='123';
	$database = 'test';
	return mysqli_connect($server, $username, $password, $database);
}
?>