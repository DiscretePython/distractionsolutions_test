<?php
session_start();
$redirect = "index.php#home";
if(!isset($_SESSION['username']))
{
	$msg = "must be logged in to log out";
}
else
{
	$msg =  "Logging out: ". $_SESSION['username'].".";
	session_destroy();
}
echo
	(
	"
	<head>
		
	</head>
	<body>
		".$msg."<br>
		<p><a href=\"".$redirect."\">Redirect</a></p>	
	</body>

	</html>
	"
	);

?>