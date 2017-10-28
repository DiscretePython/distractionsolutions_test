<?php
	include 'DataBaseConnect.php';
	$pdo = databaseconnect();
	try {
		$sql = 'CREATE TABLE Users (
		id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		username TEXT,
		password TEXT,
		passwordUpDate DATE NOT NULL,
		singUpDate DATE NOT NULL
		) DEFAULT CHARSET utf8 ENGINE=InnoDB';
		mysqli_query($pdo,$sql);
	}
	catch(PDOExeption $e) {
		$output = 'error creating table:' . $e->getMessage();
		echo $output;
		exit();
	}
?>