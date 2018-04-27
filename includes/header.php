<?php 
require "config/config.php";

if (isset($_SESSION['reg_name'])) {
	$usserLoggedIn = $_SESSION['reg_name'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE reg_name = '$usserLoggedIn' ");
	$reg_name = mysqli_fetch_array($user_details_query);
} else {
	header("Location: register.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Superheroes: Dating</title>
</head>
<body>

<nav>
	<a href="#"><h1><?php echo $reg_name['reg_name']; ?></h1></a>
	<a href="index.php">Home</a>
	<a href="#">Messages</a>
	<a href="#">Settings</a>
</nav>	
