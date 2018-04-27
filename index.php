<?php 
include "includes/header.php";

?>
<div class="user-details">
	<a href="#"><img src="<?php echo $reg_name['profile_pic']; ?>"></a>
	<br>
	<?php 
	echo $reg_name['reg_name'] . "<br>" . $reg_name['superpower'] . " " . "<br>" . $reg_name['email'] . "<br>" . "Sign up date: " . $reg_name['singup_date'] . "<br>" . "Number of posts: " . $reg_name['num_posts'] . "<br>" . "Number of Likes: " . $reg_name['num_likes'];
	?>
</div>

</body>
</html>