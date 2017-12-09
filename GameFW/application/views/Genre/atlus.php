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
					<div class="home_tabs_content">
					<div class="tab_content" id="tab_newreleases_content">
					<a href="<?php echo site_url('index.php/User/persona5') ?>" class="tab_item  "  >
					<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="http://gameranx.com/wp-content/uploads/2016/03/Persona-5-1080-Wallpaper-3.jpg" width="185px" height="70px" >
					</div>
					<div class="tab_item_content">
						<div class="tab_item_name">
							Persona 5
						</div>
						<div class="tab_item_details">
							<img src="http://sms.playstation.com/static/img/global/footer/icon-playstation.png" width="20px" height="20px">
							<div class="tab_item_top_tags">
								<span class="top_tag">RPG</span>
							</div>
						</div>
					</div>
					<div style="clear: both;"></div>
					</a>

					<a href="http://store.steampowered.com/app/698780/Doki_Doki_Literature_Club/" class="tab_item  "  >
					<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="http://cdn.edgecast.steamstatic.com/steam/apps/698780/capsule_184x69.jpg?t=1507294824">
					</div>
					<div class="tab_item_content">
						<div class="tab_item_name">
							Doki Doki Literature Club!
						</div>
						<div class="tab_item_details">
							<img src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Windows_logo_2012-Black.svg" width="15px" height="15px">
							<div class="tab_item_top_tags">
								<span class="top_tag">Visual Novel,</span>
								<span class="top_tag"> Anime,</span>
								<span class="top_tag"> Psychological Horror</span>
							</div>
						</div>
					</div>
					<div style="clear: both;"></div>
					</a>

					<a href="https://www.totalwar.com/total_war_warhammer" class="tab_item  "  >
					<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="http://cdn.edgecast.steamstatic.com/steam/apps/594570/capsule_184x69.jpg?t=1507215631">
					</div>
					<div class="tab_item_content">
						<div class="tab_item_name">
							Total War: WARHAMMER II
						</div>
						<div class="tab_item_details">
							<img src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Windows_logo_2012-Black.svg" width="15px" height="15px">
							<div class="tab_item_top_tags">
								<span class="top_tag">Strategy,</span>
								<span class="top_tag"> Fantasy,</span>
								<span class="top_tag"> RTS</span>
							</div>
						</div>
					</div>
					<div style="clear: both;"></div>
					</a>

					<a href="http://store.steampowered.com/app/356190/Middleearth_Shadow_of_War/?snr=1_4_4__tab-PopularNewReleases" class="tab_item  "  >
					<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="http://cdn.edgecast.steamstatic.com/steam/apps/268910/capsule_184x69.jpg?t=1507409276">
					</div>
					<div class="tab_item_content">
						<div class="tab_item_name">
							Cuphead
						</div>
						<div class="tab_item_details">
							<img src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Windows_logo_2012-Black.svg" width="15px" height="15px">
							<div class="tab_item_top_tags">
								<span class="top_tag">Difficult,</span>
								<span class="top_tag"> Platformer,</span>
								<span class="top_tag"> Cartoon</span>
							</div>
						</div>
					</div>
					<div style="clear: both;"></div>
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