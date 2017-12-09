<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1024, user-scalable=yes">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<?php echo link_tag('assets/css/styleRe.css')?>
	<link rel="icon" href="http://oi67.tinypic.com/zm1bpz.jpg">
	<title>Game</title>
	
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
				<?php echo anchor('index.php/User/publisher', 'Publisher') ?>
				<?php echo anchor('index.php/User/genre', 'Genre') ?>
				<?php echo anchor('index.php/User/rating', 'Rating') ?>
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Platform 
			<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<?php echo anchor('index.php/User/platform', 'List Platform') ?>
				<?php echo anchor('index.php/User/company', 'Company') ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="home_ctn tab_container" style="overflow: visible;">
			<div class="home_page_content">
				<div class="home_leftcol home_tab_col">
					
					<div class="tab_content" id="tab_newreleases_content">
					<a href="#adventure" class="tab_item  "  >
					
					<div class="tab_item_content">
						<div class="tab_item_name">
							Adventure
						</div>
						<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="http://www.freeiconspng.com/uploads/forest-icon-png-5.png" width="120px" height="70px" >
					</div>
					</div>
					<div style="clear: both;"></div>
					</a>

					<a href="#RPG" class="tab_item  "  >
					
					<div class="tab_item_content">
						<div class="tab_item_name">
							RPG
						</div>
						<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="https://cdn.iconscout.com/public/images/icon/premium/png-512/game-fight-sword-shield-attack-defence-3b9742d18e4100d5-512x512.png" width="110px" height="70px" >
					</div>
					</div>
					<div style="clear: both;"></div>
					</a>

					<a href="http://store.steampowered.com/app/356190/Middleearth_Shadow_of_War/?snr=1_4_4__tab-PopularNewReleases" class="tab_item  "  >
					
					<div class="tab_item_content">
						<div class="tab_item_name">
							Sport
						</div>
						<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="https://cdn0.iconfinder.com/data/icons/stroke-ball-icons-2/633/02_Soccer-512.png	" width="110px" height="70px" >
					</div>
					</div>
					<div style="clear: both;"></div>
					</a>

					<a href="http://store.steampowered.com/app/356190/Middleearth_Shadow_of_War/?snr=1_4_4__tab-PopularNewReleases" class="tab_item  "  >
					
					<div class="tab_item_content">
						<div class="tab_item_name">
							Fighting
						</div>
						<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="https://cdn0.iconfinder.com/data/icons/fighting-1/258/brawl003-512.png	" width="110px" height="70px" >
					</div>
						</div>
					<div class="tab_item_content">
						<div class="tab_item_name">
							Arcade
						</div>
						<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="http://cdn.onlinewebfonts.com/svg/img_523299.png	" width="110px" height="70px" >
					</div>
					</a>
					</div>
					</div>
				</div>			
				<div class="home_rightcol">
					<div id="profile_container">
						<div class="profile">
							<div id="upper_container">
								<div class="profile_upper">
									<div class="profile_image">
										<img class="img_profile" src = "https://nerdist.com/wp-content/uploads/2017/08/here-s-how-to-catch-pikachus-before-they-become-super-rare-in-pokemon-go.jpg" width="70px" height="70px">
									</div>
									<div class="profile_name">
									<?php 
									if($this->session->userdata('status') !== 'login') {
									echo ("Guest");
									}
									else{
										$user_name = $this->session->userdata('user_name');
										echo $user_name;
									}
									?>
									</div>
								</div>
							</div>
							<div id="bottom_container">
								<div class="profile_bottom">
									<div class="welcome_message">
									<?php 
									if($this->session->userdata('status') !== 'login') {
									echo ("Welcome Guest");
									}
									else{
									$user_name = $this->session->userdata('user_name');
									echo ("Welcome ". $user_name);
									}
									?>
									</div>
									<div class="login_message">
									<?php 
									if($this->session->userdata('status') !== 'login') {
									echo anchor('index.php/User/login_form', 'Sign In');
									echo (" or ");
									echo anchor('index.php/User/input_form', 'Sign Up');
									}
									else{
									echo anchor('index.php/User/logout', 'Sign Out');
									}
									?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>