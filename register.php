<?php 
require "config/config.php";
require "includes/form_handlers/register_handler.php";
require "includes/form_handlers/login_handler.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Superheroes Dating</title>
</head>
<body>
	<span>You can for ex. use:</span><br>
	<span>email: spider@spiderman.com</span><br>
	<span>password: spiderman</span>
	<span>Or create another account.</span>
	<form action="register.php" method="POST">
		<input type="email" name="log_email" placeholder="Email" value="<?php if(isset($_SESSION['log_email'])) { echo $_SESSION['log_email']; } ?>" required>
		<br>
		<input type="password" name="log_password" placeholder="Password">
		<br>
		<input type="submit" name="login_button" value="Login">
		<br>

		<?php if (in_array("Email or password is incorrect.<br>", $error_array)) echo "Email or password is incorrect.<br>"; ?>
	</form>

	<form action="register.php" method="POST">
		<input type="text" name="reg_name" placeholder="Name" 
		value="<?php if(isset($_SESSION['reg_name'])) { echo $_SESSION['reg_name']; } ?>" required>
		<br>

		<?php if(in_array("Your name must be between 2 and 25 characters.<br>", 
		$error_array)) echo "Your name must be between 2 and 25 characters.<br>"; ?>

		<input type="text" name="superpower" placeholder="Enter superpower" 
		value="<?php if(isset($_SESSION['superpower'])) { echo $_SESSION['superpower']; } ?>" required>
		<br>

		<input type="email" name="reg_email" placeholder="Email" 
		value="<?php if(isset($_SESSION['reg_email'])) { echo $_SESSION['reg_email']; } ?>" required>
		<br>
		<input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php if(isset($_SESSION['reg_email2'])) { echo $_SESSION['reg_email2']; } ?>" required>
		<br>

		<?php if(in_array("This email is already in use.<br>", $error_array)) echo 
		"This email is already in use.<br>";
		else if(in_array("Invalid format<br>", $error_array)) echo 
		"Invalid format<br>";
		else if(in_array("Emails don't match<br>", $error_array)) echo 
		"Emails don't match<br>"; ?>



		<input type="password" name="reg_password" placeholder="Password" required>
		<br>
		<input type="password" name="reg_password2" placeholder="Confirm Password" required>
		<br>
		<?php if(in_array("Your password must be between 5 and 30 characters.<br>", $error_array)) echo 
		"Your password must be between 5 and 30 characters.<br>";
		else if(in_array("Your password can only contain English characters or numbers<br>", $error_array)) echo 
		"Your password can only contain English characters or numbers<br>";
		else if(in_array("Your paswords do not match.<br>", $error_array)) echo 
		"Your paswords do not match.<br>"; ?>

		<input type="submit" name="reg_button" value="Register">
		<br>
		<?php if(in_array("<span style='color: #14C800;'>Congatulations!  Go ahead and login!<span><br>", $error_array)) echo 
		"<span style='color: #14C800;'>Congatulations!  Go ahead and login!<span><br>";?>
	</form>
</body>
</html>