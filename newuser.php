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

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
	include 'DataBaseConnect.php';
	$pdo = databaseconnect();
	try {
		$sql = 'INSERT INTO Users SET username="'. $username .'", password="' . $password .'", passwordUpDate=CURDATE(), singUpDate=CURDATE() ';
		$result = mysqli_query($pdo,$sql);
	}
	catch(PDOExeption $e) {
		$output = 'error table:' . $e->getMessage();
		echo $output;
		exit();
	}
	$_SESSION["username"] = $username;
	echo
	(
	"<br>
		<p><a href=\"".$redirect."\">Redirect</a></p>"
	);

?>
</body>
</html>
