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
	<p class="body"><form id='login' action= 'login.php' method='post' accept-charset='UTF-8'>
	<fieldset class="body">
		<legend>Login</legend>
			<input type='hidden' name='submitted' id='submitted' value='1'/>

			<label for='Id_number' >ID Number:</label>
			<input type='text' name='Id_number' id='Id_number'  maxlength="50" />

			<label for='Password' >Password*:</label>
			<input type='Password' name='Password' id='Password' maxlength="50" />

			<input type='submit' name='Submit' value='Submit' />
			</fieldset>
		</form>
	</p>
	<p><a href="../project/UserCreateForm.php">Enter New User </p>
	</div>
</body>
</html>