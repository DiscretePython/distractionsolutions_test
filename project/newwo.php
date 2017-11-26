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
	if(empty($_POST['Wo_number']))
    {
		
		/* Create A new W/O */
		
		if(empty($_POST['type']))
	    {
	        $this->HandleError("Bill to is empty!");
	        return false;
	    }	
		$Status = trim($_POST['Status']);
		$Wo_type = trim($_POST['type']); 
		
		include 'DataBaseConnect.php';
		$pdo = databaseconnect();
		try {
			$sql = 'INSERT INTO WORK_ORDER SET  
				Status="' . $Status .'" ;';
			$result = mysqli_query($pdo,$sql);
			$Wo_number = $pdo->insert_id;
		}
		catch(PDOExeption $e) {
			$output = 'error table:' . $e->getMessage();
			echo $output;
			exit();
		}
		echo $Wo_number;
		switch ($Wo_type) {
			case "Warranty":
			break;
			case"Customer":
			break;
			case"Internal":
			break;
			default:
			break;
		}
    }
	
	/*Look Up W/O*/
	echo $_POST['Wo_number'];

	
	

	
	
?>
</body>
</html>
