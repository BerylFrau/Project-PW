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
	<link rel="icon" href="http://oi67.tinypic.com/zm1bpz.jpg">
	<title>Sign Up</title>
	
</head>

<body>
	<div class="web_logo">
			<p><img src="http://oi67.tinypic.com/zm1bpz.jpg" alt="Logo" style="width:150px;height:100px;"/></p>
	</div>
	<div class="navbar">
		<?php echo anchor('index.php/User/home', 'Home') ?></a>
		<div class="dropdown">
			<button class="dropbtn">Games 
			<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="#">Publisher</a>
				<a href="#">Genre</a>
				<a href="#">Rating</a>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Platform 
			<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="#">List Platform</a>
				<a href="#">Company</a>
			</div>
		</div>
	</div>
	<div id="login_container">
		<div class="login_form">
		<form action=<?php echo base_url('index.php/User/input'); ?> method="POST">
			<h2 style="text-align:center; font-family: Comic San MS, cursive, sans-serif;"><b>SIGN UP</b></h2>
			<p style="text-indent: 35px;">
				Email<input type="text" name="email" style="margin-left: 35px" required="">
			</p>
			<p style="text-indent: 35px;">
				Username<input type="text" name="user_name" style="margin-left: 35px" required="">
			</p>
			<p style="text-indent: 35px;">
				Password<input type="password" name="password" style="margin-left: 35px" required="">
			
			</p>
			<br>
			<input type="submit" value="SUBMIT"  style="background: #cc0000;font-size: 2.0em; color: white;  position: relative; float:right; right: 60px;">
			<br><br><br>
			
			</p>
		</form>
		</div>
	</div>
</body>
</html>