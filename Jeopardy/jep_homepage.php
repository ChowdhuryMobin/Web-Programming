<!DOCTYPE html>
<html>
<head>
	<title>Welcome Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<img src="photos/jep_logo.png" alt="jep logo" id="bannerarea">
	<h1 style="text-align: left;">Welcome to Jep!</h1>

	<form action="login_submit.php" method="POST">
	<fieldset class="column">
		<legend>Sign in: </legend>
		<p>
			<strong>Username:</strong>
			<input type="text" name="username" size="16" placeholder="username">
		</p>

		<p>
			<strong>Password:</strong> 
			<input type="password" name="password" size="16" placeholder="password">
		</p>

		<input type="submit" name="login" value="Login">
	</fieldset>
	</form>

	<p>
		<a href="signup.php" class="button">Sign up for a free account</a>
		<a href="highscores.php" class="button">See Global Highscores</a>
	</p>


</body>
</html>