<?php
session_start();
?>
<html>
<?php include '../head.php';?>
<body class="back">
	<?php include '../navbar.php';?>	
	<div id="home"></div>
	<p class="body"><form id='logout' action='logout.php' method='post' accept-charset='UTF-8'></p>
	<fieldset class="body">
		<legend>Logout</legend>
			<input type='hidden' name='submitted' id='submitted' value='1'/>
			<input type='submit' name='Submit' value='Submit' />
			</fieldset>
		</form>
	<p class="body">
		<form id='login' action= 'newwo.php' method='post' accept-charset='UTF-8'>
		<fieldset class="body">
			<legend>Add </legend>
			<form method="POST">
				<input type='hidden' name='submitted' id='submitted' value='1'/>

				<label for='Wo_number' >Work Order Number:</label>
				<input type='text' name='Wo_number' id='Wo_number'  maxlength="50" />
				
				<label for='type' >Bill to:</label>
				<form method="POST">
					<input type='radio' name='type' id='type' value="Warranty" maxlength="16" /> Warranty <br>
					<input type='radio' name='type' id='type' value="Customer" maxlength="16" /> Customer <br>
					<input type='radio' name='type' id='type' value="Internal" maxlength="16" /> Internal <br>
					
				
				<label for='Status' >Status:</label>
				<form method="POST">
					<input type='radio' name='Status' id='Status' value="Open" maxlength="16" /> Open <br>
					<input type='radio' name='Status' id='Status' value="Closed" maxlength="16" /> Closed <br>
				
				

							
				<input type='submit' name='Submit' value='Submit' />
		</fieldset>
	</form>
	
	</p>
	<p><a href="../project/UserLoginForm.php">Sign in with an existing account </p>
	</div>
</body>
</html>