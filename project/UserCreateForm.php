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
	<p class="body"><form id='login' action= 'newuser.php' method='post' accept-charset='UTF-8'>
	<fieldset class="body">
		<legend>Add </legend>
			<input type='hidden' name='submitted' id='submitted' value='1'/>

			<label for='Fname' >First Name:</label>
			<input type='text' name='Fname' id='Fname'  maxlength="50" />
			
			<label for='Lname' >Last Name:</label>
			<input type='text' name='Lname' id='Lname'  maxlength="50" />
			
			<label for='Phone_number' >Phone Number:</label>
			<input type='tel' name='Phone_number' id='Phone_number'  maxlength="50" />
			
			<label for='Birth_date' >Birth Date:</label>
			<input type='date' name='Birth_date' id='Birth_date'  maxlength="50" />
			
			<label for='Id_number' >Id number:</label>
			<input type='text' name='Id_number' id='Id_number'  maxlength="50" />

			<label for='Password' >Password*:</label>
			<input type='Password' name='Password' id='Password' maxlength="50" />

			<label for='Job_title' >Job Title:</label>
			<input type='text' name='Job_title' id='Job_title'  maxlength="50" />
			
			<label for='Admin_status' >Admin:</label>
			<form>
				<input type='radio' name='Admin_status' id='Admin_status' value="1" maxlength="50" /> Make Admin <br>
				<input type='radio' name='Admin_status' id='Admin_status' value="0" maxlength="50" /> Make Slave <br>
			</form>	
			<input type='submit' name='Submit' value='Submit' />
			</fieldset>
		</form>
	</p>
	<p><a href="../project/UserLoginForm.php">Sign in with an existing account </p>
	</div>
</body>
</html>