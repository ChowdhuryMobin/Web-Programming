<!DOCTYPE html>
<html>
<head>
	<title>User Sign up</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<img src="photos/jep_logo.png" alt="jep logo" id="bannerarea">
	<form action="signup_submit.php" method="post" enctype="multipart/form-data">
	<fieldset class="column">
		<legend>New User Signup: </legend>
		<p>
			<strong>Name:</strong> 
			<input type="text" name="name" size="16" placeholder="First name">
		</p>
		<p>
			<strong>Username:</strong> 
			<input type="text" name="username" size="16" placeholder="username">
		</p>
		<p>
			<strong>Password:</strong> 
			<input type="password" name="password" size="16" placeholder="password">
		</p>
		
		<input type="submit" name="sign-up" value="Sign Up">
	</fieldset>
	</form>

	<p>
		<a href="jep_homepage.php" class="button">Go back to homepage</a>
	</p>

</body>
</html>