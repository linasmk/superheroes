<?php 
include "includes/header.php";

?>
<div class="user-details">
	<a href="<?php echo $usserLoggedIn;?>"><img src="<?php echo $reg_name['profile_pic']; ?>"></a>
	<br>

	<?php 
	echo $reg_name['reg_name'] . "<br>" . $reg_name['superpower'] . " " . "<br>" . $reg_name['email'] . "<br>" . "Sign up date: " . $reg_name['singup_date'] . "<br>" . "Number of posts: " . $reg_name['num_posts'] . "<br>" . "Number of Likes: " . $reg_name['num_likes'];
	?>
</div>

<div class="main-content">
	<form action="index.php" method="POST">
		<textarea name="post_text" id="post_text" placeholder="Wanna post something?"></textarea>
		<input type="submit" name="post" id="post_button" value="post">
		<hr>
	</form>
</div>

</body>
</html>