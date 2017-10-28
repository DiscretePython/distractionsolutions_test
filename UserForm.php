<?php
session_start();
?>
<html>
<?php include 'head.php';?>
<body class="back">
	<?php include 'navbar.php';?>	
	<div id="home"></div>
	<div class="i-1"></div>
	<div class="header_title"> Your solutions to all of the worlds problems</div> 
	<p class="body"><form id='logout' action='logout.php' method='post' accept-charset='UTF-8'></p>
	<fieldset class="body">
		<legend>Logout</legend>
			<input type='hidden' name='submitted' id='submitted' value='1'/>
			<input type='submit' name='Submit' value='Submit' />
			</fieldset>
		</form>
	<p class="body"><form id='login' action='login.php' method='post' accept-charset='UTF-8'>
	<fieldset class="body">
		<legend>Login</legend>
			<input type='hidden' name='submitted' id='submitted' value='1'/>

			<label for='username' >UserName*:</label>
			<input type='text' name='username' id='username'  maxlength="50" />

			<label for='password' >Password*:</label>
			<input type='password' name='password' id='password' maxlength="50" />

			<input type='submit' name='Submit' value='Submit' />
			</fieldset>
		</form>
	</p>
	<p class="body"><form id='createUser' action='newuser.php' method='post' accept-charset='UTF-8'>
	<fieldset class="body">
		<legend>Create Account</legend>
			<input type='hidden' name='submitted' id='submitted' value='1'/>

			<label for='username' >UserName*:</label>
			<input type='text' name='username' id='username'  maxlength="50" />

			<label for='password' >Password*:</label>
			<input type='password' name='password' id='password' maxlength="50" />

			<input type='submit' name='Submit' value='Submit' />
			</fieldset>
		</form>
	</p>
	<p class="body">note: password is not stored seculy yet (stored as plain text), do not reuse a password from another site.</p>
	</div>
</body>
</html>