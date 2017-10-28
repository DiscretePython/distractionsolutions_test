<?php 
function DataBaseConnect()
{
	$server = 'localhost';
	$username ='root';
	$password ='';
	$database = 'test';
	return mysqli_connect($server, $username, $password, $database);
}
?>