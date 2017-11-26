<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
</head>
<body>

<?php 
	$redirect = "index.php#home";
    if(empty($_POST['username']))
    {
        $this->HandleError("UserName is empty!");
        return false;
    }
	if(isset($_SESSION['username']))
	{
		echo "Already logged in as ". $_SESSION['username'].".";
	}
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
	include 'DataBaseConnect.php';
	$pdo = databaseconnect();
	
	try {
		$sql = 'SELECT * FROM users';
		$result = mysqli_query($pdo,$sql);
	}
	catch(PDOExeption $e) {
		$output = 'error table:' . $e->getMessage();
		echo $output;
		exit();
	}
	/*make sure data base has something to look through or inform user */
	if (mysqli_num_rows($result)> 0) 
	{
		/*go through each row and look at the user and password to see for match */
    	while($row = mysqli_fetch_assoc($result)) 
		{
        	if($username == $row['username'] && $password == $row['password'] && !isset($_SESSION['username']))
			{
				$_SESSION["username"] = $username;
				echo '<br>success! You are now loged in as ' . $_SESSION["username"];
			}
    	}
	} 
	else 
	{
    	echo "database empty";
	}
	echo
	(
	"<br>
		<p><a href=\"".$redirect."\">Redirect</a></p>"
	);
/* 
ADD to table
try {
		$sql = 'INSERT INTO Users SET username="Will", password="password", passwordUpDate=CURDATE(), singUpDate=CURDATE() ';
		$pdo->exec($sql);
	}
	catch(PDOExeption $e) {
		$output = 'error creating table:' . $e->getMessage();
		echo $output;
		exit();
	}
*/
/*
 Code For creating new tables
try {
		$sql = 'CREATE TABLE Users (
		id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		username TEXT,
		password TEXT,
		passwordUpDate DATE NOT NULL,
		singUpDate DATE NOT NULL
		) DEFAULT CHARSET utf8 ENGINE=InnoDB';
		$pdo->exec($sql);
	}
	catch(PDOExeption $e) {
		$output = 'error creating table:' . $e->getMessage();
		echo $output;
		exit();
	}
*/
?>
</body>
</html>