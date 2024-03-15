
<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>welcome <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">logout</a></span>
	</div>
<?php }else{ ?>
<div class="banner">
	<div class="welcome_msg">
		<h1>Today's Inspiration</h1>
		<p> 
		    Crying doesn't mean that you're weak <br> 
		    Don't dwell on those who hold you down. <br> 
		    Sometimes you have to fight through your worst days  <br>
			in order to earn the best days of your life</br>
		</p>
		<a href="register.php" class="btn">Join us!</a>
	</div>
	<div class="login_div">
		<form action="index.php" method="post" >
			<h2>Login</h2>
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password"  placeholder="Password"> 
			<button class="btn" type="submit" name="login_btn">Sign in</button>
		</form>
	</div>
</div>
<?php } ?>