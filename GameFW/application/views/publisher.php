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
			<div class="home_page_content" >
				<div class="home_leftcol home_tab_col">
					
					<div class="tab_content" id="tab_newreleases_content">
					<a href="" class="tab_item  ">
					<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="https://upload.wikimedia.org/wikipedia/commons/c/cd/Atlus_logo_2014.png" width="185px" height="70px" >
					</div>
					
					<div class="tab_item_content">
						<div class="tab_item_name">
							ATLUS
						</div>
						<div class="tab_item_name" style="font-size:10px">
							Atlus Co., Ltd. (株式会社アトラス Kabushiki gaisha Atorasu) is a Japanese video game developer, publisher and distribution company based in Tokyo, and a subsidiary of Sega.
						</div>
						
					</div>
					<div style="clear: both;"></div>
					</a>

					<a href="http://store.steampowered.com/app/356190/Middleearth_Shadow_of_War/?snr=1_4_4__tab-PopularNewReleases" class="tab_item  "  >
					<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Konami_4th_logo_2.svg/1921px-Konami_4th_logo_2.svg.png" width="170px" height="50px" >
					</div>
					<div class="tab_item_content">
						<div class="tab_item_name">
							KONAMI
						</div>
						<div class="tab_item_name" style="font-size:10px">
							Konami, is a Japanese entertainment company. It operates as a product distributor, video game developer and publisher company.
						</div>
					</div>
					<div style="clear: both;"></div>
					</a>

					<a href="http://store.steampowered.com/app/356190/Middleearth_Shadow_of_War/?snr=1_4_4__tab-PopularNewReleases" class="tab_item  "  >
					
					<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Capcom_logo.png" width="185px" height="70px" >
					</div>
					<div class="tab_item_content">
						<div class="tab_item_name">
							CAPCOM
						</div>
						<div class="tab_item_name" style="font-size:10px">
							 Capcom, is a Japanese video game developer and publisher known for creating multi-million-selling franchises such as Street Fighter, Resident Evil, Devil May Cry, and Monster Hunter
						</div>
					</div>
					<div style="clear: both;"></div>
					</a>

					<a href="http://store.steampowered.com/app/356190/Middleearth_Shadow_of_War/?snr=1_4_4__tab-PopularNewReleases" class="tab_item  "  >
					
					<div class="tab_item_content">
						<div class="tab_item_name">
							ELECTRONIC ART
						</div>
						<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="https://vignette.wikia.nocookie.net/fifa/images/e/e8/EA_GAMES_LOGO.png/revision/latest?cb=20161222182808" width="185px" height="70px" >
					</div>
						<div class="tab_item_name" style="font-size:10px">
							 Electronic Arts Inc. (EA) is an American video game company headquartered in Redwood City, California. Founded and incorporated on May 28, 1982 by Trip Hawkins
						</div>
						</div>
					
						
					
					</a>
					
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