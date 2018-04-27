<?php
// Declaring variables to prevent errors
$reg_name = "";
$superpower = "";
$email = "";
$email2 = "";
$password = "";
$password2 = "";
$date = "";
$error_array = array();

if (isset($_POST['reg_button'])) {
	//Registration form values

	// For the nickname
	$reg_name = strip_tags($_POST['reg_name']); //Remove HTML tags
	$reg_name = str_replace(' ', '', $reg_name); // Remove spaces
	$reg_name = ucfirst(strtolower($reg_name));
	$_SESSION['reg_name'] = $reg_name; // Stores the registration name into the session variable.

	// For the superpower
	$superpower = strip_tags($_POST['superpower']); //Remove HTML tags
	$_SESSION['superpower'] = $superpower; // Stores the superpower into the session variable.

	// For the email
	$email = strip_tags($_POST['reg_email']); //Remove HTML tags
	$email = str_replace(' ', '', $email); // Remove spaces
	$email = ucfirst(strtolower($email));
	$_SESSION['reg_email'] = $email; // Stores the email into the session variable.
	
	// For the email2
	$email2 = strip_tags($_POST['reg_email2']); //Remove HTML tags
	$email2 = str_replace(' ', '', $email2); // Remove spaces
	$email2 = ucfirst(strtolower($email2));
	$_SESSION['reg_email2'] = $email2; // Stores the email2 into the session variable.

	// For the password
	$password = strip_tags($_POST['reg_password']); //Remove HTML tags
	// For the password2
	$password2 = strip_tags($_POST['reg_password2']); //Remove HTML tags

	$date = date("Y-m-d");	// Current date

	if ($email == $email2) {
		// Check if emails in a valid format
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email = filter_var($email, FILTER_VALIDATE_EMAIL);
			// Check if email already exists
			$e_check = mysqli_query($con, "SELECT email FROM users WHERE email = '$email'");
			// Count the number of rows returned
			$num_rows = mysqli_num_rows($e_check);
			if ($num_rows > 0) {
				array_push($error_array, "This email is already in use.<br>");
			}
		} else {
			array_push($error_array, "Invalid format<br>");
		}
	} else {
		array_push($error_array, "Emails don't match<br>");
	}
	if (strlen($reg_name) > 25 || strlen($reg_name) < 2 ) {
		array_push($error_array, "Your name must be between 2 and 25 characters.<br>");
	}
	if ($password != $password2) {
		array_push($error_array, "Your paswords do not match.<br>");
	} else {
		if (preg_match('/[^A-Za-z0-9]/', $password)) {
			array_push($error_array, "Your password can only contain English characters or numbers<br>");
		}
	}
	if (strlen($password > 30 || strlen($password) < 5)) {
		array_push($error_array, "Your password must be between 5 and 30 characters.<br>");
	}
	if (empty($error_array)) {
		$password = md5($password); //encrypt password before sending to database

	// Assigning profile picture.
		$rand = rand(1, 2); // Randomizes the number between 1 and 2
		if ($rand == 1 ) {
		$profile_pic = "assets/images/profile_pics/defaults/head_deep_blue.png"; }
		else if ($rand == 2) {
			$profile_pic = "assets/images/profile_pics/defaults/head_red.png"; }

		$query = mysqli_query($con, "INSERT INTO users VALUES ('', '$reg_name', '$superpower', '$email', '$password', '$date', '$profile_pic', '0', '0', 'no', ',')");
		array_push($error_array, "<span style='color: #14C800;'>Congatulations!  Go ahead and login!<span><br>");

		// Clear session variables
		$_SESSION['reg_name'] = "";
		$_SESSION['superpower'] = "";
		$_SESSION['reg_email'] = "";
		$_SESSION['reg_email2'] = "";
	}
}
?>