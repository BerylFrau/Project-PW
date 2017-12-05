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
		<?php echo anchor('index.php/User/home_user', 'Home') ?></a>
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
	<div class="container">
		<div class="home_ctn tab_container" style="overflow: visible;">
			<div class="home_page_content">
				<div class="home_leftcol home_tab_col">
					<div class="home_tabs_content">
					<div class="tab_content" id="tab_newreleases_content">
					<a href="http://store.steampowered.com/app/356190/Middleearth_Shadow_of_War/?snr=1_4_4__tab-PopularNewReleases" class="tab_item  "  data-ds-appid="356190">
					<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="http://cdn.edgecast.steamstatic.com/steam/apps/356190/capsule_184x69.jpg?t=1507601625">
					</div>
					<div class="tab_item_content">
						<div class="tab_item_name">
							Middle-earth™: Shadow of War™
						</div>
						<div class="tab_item_details">
							<img src="http://sms.playstation.com/static/img/global/footer/icon-playstation.png" width="20px" height="20px">
							<div class="tab_item_top_tags">
								<span class="top_tag">Open World,</span>
								<span class="top_tag"> Action,</span>
								<span class="top_tag"> Violent</span>
							</div>
						</div>
					</div>
					<div style="clear: both;"></div>
					</a>

					<a href="http://store.steampowered.com/app/356190/Middleearth_Shadow_of_War/?snr=1_4_4__tab-PopularNewReleases" class="tab_item  "  data-ds-appid="356190">
					<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="http://cdn.edgecast.steamstatic.com/steam/apps/698780/capsule_184x69.jpg?t=1507294824">
					</div>
					<div class="tab_item_content">
						<div class="tab_item_name">
							Doki Doki Literature Club!
						</div>
						<div class="tab_item_details">
							<img src="http://files.softicons.com/download/system-icons/web0.2ama-icons-by-chrfb/png/256x256/Operating%20System%20-%20Windows.png" width="20px" height="20px">
							<div class="tab_item_top_tags">
								<span class="top_tag">Visual Novel,</span>
								<span class="top_tag"> Anime,</span>
								<span class="top_tag"> Psychological Horror</span>
							</div>
						</div>
					</div>
					<div style="clear: both;"></div>
					</a>

					<a href="http://store.steampowered.com/app/356190/Middleearth_Shadow_of_War/?snr=1_4_4__tab-PopularNewReleases" class="tab_item  "  data-ds-appid="356190">
					<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="http://cdn.edgecast.steamstatic.com/steam/apps/594570/capsule_184x69.jpg?t=1507215631">
					</div>
					<div class="tab_item_content">
						<div class="tab_item_name">
							Total War: WARHAMMER II
						</div>
						<div class="tab_item_details">
							<img src="http://files.softicons.com/download/system-icons/web0.2ama-icons-by-chrfb/png/256x256/Operating%20System%20-%20Windows.png" width="20px" height="20px">
							<div class="tab_item_top_tags">
								<span class="top_tag">Strategy,</span>
								<span class="top_tag"> Fantasy,</span>
								<span class="top_tag"> RTS</span>
							</div>
						</div>
					</div>
					<div style="clear: both;"></div>
					</a>

					<a href="http://store.steampowered.com/app/356190/Middleearth_Shadow_of_War/?snr=1_4_4__tab-PopularNewReleases" class="tab_item  "  data-ds-appid="356190">
					<div class="tab_item_cap" >
						<img class="tab_item_cap_img" src="http://cdn.edgecast.steamstatic.com/steam/apps/268910/capsule_184x69.jpg?t=1507409276">
					</div>
					<div class="tab_item_content">
						<div class="tab_item_name">
							Cuphead
						</div>
						<div class="tab_item_details">
							<img src="http://files.softicons.com/download/system-icons/web0.2ama-icons-by-chrfb/png/256x256/Operating%20System%20-%20Windows.png" width="20px" height="20px">
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
										Lala
									</div>
								</div>
							</div>
							<div id="bottom_container">
								<div class="profile_bottom">
									<div class="welcome_message">
									Welcome Lala
									</div>
									<div class="login_message">
									<?php echo anchor('index.php/User/logout', 'Sign Out') ?></a>
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