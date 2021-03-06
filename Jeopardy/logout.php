<?php 
session_save_path("/home/cmobin1/public_html/Jeopardy/session");
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout Successful</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<img src="photos/jep_logo.png" alt="jep logo" id="bannerarea" class="center-banner">
	<h1>Bye, <?php echo $_SESSION["username"]; ?>!</h1>
	<?php 
		include "methods.php";

		logout_submit($_SESSION["name"], $_SESSION["username"], $_SESSION["password"], $_SESSION["points"]);

		session_unset();
		session_destroy(); // end the session
	?>

	<p class="dialogue"><a class="button" href="jep_homepage.php">Go to Homepage</a></p>
</body>
</html>