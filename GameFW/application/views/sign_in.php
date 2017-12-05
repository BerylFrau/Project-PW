<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
	
	
</style>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1024, user-scalable=yes">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<?php echo link_tag('assets/css/styleRe.css')?>
	<link rel="icon" href="http://static.tumblr.com/1ac4e6c5ceffa81774a8cefcdbb1eb37/grhj0hn/Dhmmherqf/tumblr_static_ign.jpeg">
	<title>Sign In</title>
	
</head>

<body>
	<div class="title">
			<p><img src="https://peopleofgaming.com/wiki/images/archive/9/94/20150406194144%21Steam.png" alt="SteamLogo" style="width:80px;height:80px;"/></p>
	</div>
	<div id="login_container">
		<div class="login_form">
		<form action=<?php echo base_url('auth/login'); ?> method="POST">
			<h2 style="text-align:center; font-family: Comic San MS, cursive, sans-serif;"><b>SIGN IN</b></h2>
			<p style="text-indent: 35px;">
				Username/Email<input type="text" name="uname" style="margin-left: 35px" required="">
			</p>
			<p style="text-indent: 35px;">
				Password<input type="password" name="pwd" style="margin-left: 35px" required="">
			
			</p>
			<br>
			<input type="submit" value="Login"  style="background: #008ae6;font-size: 2.0em; color: #005c99;  position: relative; float:right; right: 90px;">
			<br><br><br>
			
			<p style="text-align:center;">
			Don't' have account? Sign Up
			<a href="www.bluelion.com/signup">here</a>
			</p>
		</form>
		</div>
	</div>
</body>
</html>