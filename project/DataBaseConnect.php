<?php 
function DataBaseConnect()
{
	$server = 'localhost';
	$username ='root';
	$password ='';
	$database = 'Company_Payroll';
	return mysqli_connect($server, $username, $password, $database);
}
?>