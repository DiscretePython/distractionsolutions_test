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
	if(empty($_POST['Fname']))
    {
        $this->HandleError("First name is empty!");
        return false;
    }
	if(empty($_POST['Lname']))
    {
        $this->HandleError("Last Name is empty!");
        return false;
    }
	if(empty($_POST['Phone_number']))
    {
        $this->HandleError("Phone number is empty!");
        return false;
    }
	if(empty($_POST['Birth_date']))
    {
        $this->HandleError("Birth date is empty!");
        return false;
    }
	if(empty($_POST['Id_number']))
    {
        $this->HandleError("ID number is empty!");
        return false;
    }
	if(empty($_POST['Job_title']))
    {
        $this->HandleError("Job title is empty!");
        return false;
    }
	if(empty($_POST['Admin_status']))
    {
        $this->HandleError("Admin status is empty!");
        return false;
    }
	if(empty($_POST['Password']))
    {
        $this->HandleError("Password is empty!");
        return false;
    }
	
	
	$Fname = trim($_POST['Fname']);
	$Lname = trim($_POST['Lname']);
	$Phone_number = trim($_POST['Phone_number']);
	$Birth_date = trim($_POST['Birth_date']);
    $Id_number = trim($_POST['Id_number']);
    $Job_title = trim($_POST['Job_title']);
	$Id_number = trim($_POST['Id_number']);
	$Admin_status = trim($_POST['Admin_status']);
	$Password = trim($_POST['Password']);
	
	include 'DataBaseConnect.php';
	$pdo = databaseconnect();
	try {
		$sql = 'INSERT INTO EMPLOYEE SET 
			Fname="'. $Fname.'", 
			Lname="'. $Lname.'", 
			Phone_number="'. $Phone_number.'", 
			Birth_date="'. $Birth_date.'", 
			Job_title="'. $Job_title.'", 
			Id_number="'. $Id_number.'", 
			Admin_status="'. $Admin_status.'", 
			Password="' . $Password .'" ;';
		$result = mysqli_query($pdo,$sql);
	}
	catch(PDOExeption $e) {
		$output = 'error table:' . $e->getMessage();
		echo $output;
		exit();
	}
	$_SESSION["id_number"] = $Id_number;
	echo
	(
	"<br>
		<p><a href=\"".$redirect."\">Redirect</a></p>"
	);

?>
</body>
</html>
