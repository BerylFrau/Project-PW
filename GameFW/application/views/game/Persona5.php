<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=1024, user-scalable=yes">
	
	<?php echo link_tag('assets/css/styleRe.css')?>
	<link rel="icon" href="http://oi67.tinypic.com/zm1bpz.jpg">
	<title>Persona5</title>
	
</head>

<body id="top">
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
	
	<div class="line">
		<img src="http://cdn.persona5.jp/resources/img/top/line.png?v=1501756323862" width="1512" height="2650" alt="背景"  style="margin-top: -120px">
	</div>
	<div class="shadow">
        <img src="http://cdn.persona5.jp/resources/img/top/about_p5_s.svg?v=1501756323862" width="1120" height="627" alt="Persona5is？" class="about-p5s ">
        <img src="http://cdn.persona5.jp/resources/img/top/school_life_s.svg?v=1501756323862" width="1049" height="604" alt="Tokyo School Life" class="school-lifes ">
		<img src="http://cdn.persona5.jp/resources/img/top/phantom_life_s.svg?v=1501756323862" width="1110" height="813" alt="Phantom Life" class="phantom-lifes ">
    </div>
    <div class="scene_title">
        <div class="spec slide-from-left">
            <img src="http://oi63.tinypic.com/v771i9.jpg" class="game_spec_s">
            <img src="http://oi67.tinypic.com/2z8yrk4.jpg" alt="specs" class="game_spec">
            <p class="text title">Persona 5<br></p>
            <p class="text platform">PlayStation 4 & PlayStation 3<br></p>
            <p class="text rating">17+<br></p>
            <p class="text genre">RPG, Social Simulation<br></p>
            <p class="text publisher">Atlus<br></p>
            <p class="text score">9.7/10<br></p>
        </div>
    </div>
	<div class="scene1">
        <div class="about-p5 right-left-up">
        	<img src="http://cdn.persona5.jp/resources/img/top/about_p5.png?v=1501756323862" width="1113" height="627" alt="Persona5is？" >
	        <img src="https://s28.postimg.org/4m287tk0d/section_2_title.png" class="whatis " width="400" height="185" alt="Persona5is？">
	        <img src="http://www.20sidedpixel.blog/_persona5/protag-finishingtouch.png" class="rotateimg340" width="280" height="200">
	        <p class="text">
            	In a certain circumstance I will transfer to <br>
            	a high school in "Tokyo"<br>
            	A boy whose hero was decided to make a strange dream.<br>
            	<br>
            	Because of "rehabilitation" imposed on himself,<br>
            	And to save people from bad lust,<br>
            	The hero who became a thief encounters many people,<br>
            	I will establish bonds.<br>
            	After having an irreplaceable year,<br>
            	What are you waiting for ... ....?<br>
          	</p>
        </div>
    </div>
    <div class="scene2">
        <div class="school-life right-left-up run">
        	<img src="http://cdn.persona5.jp/resources/img/top/school_life.png?v=1501756323862" width="1049" height="604" alt="大都会東京で始まる最高に楽しい学園ライフ！" >
            <p class="text">
                As a high school student during the day,<br>
                enjoy the school life starting in the big city.<br>
                How you spend your day is up to you!<br>
                Even if I can not change the world alone,<br>
                If you meet others and deexpen the power of "bonds"<br>
                You may be able to change that visible world.<br>
            </p>
        </div>
    </div>
	<div class="scene3">
        <div class="phantom-life right-left-up">
            <img src="http://cdn.persona5.jp/resources/img/top/phantom_life.png?v=1501756323862" width="1110" height="813" alt="Phantom Life" >
            <img src="https://atlus.com/persona5/img/home/phantom_phrase.png" width="850" height="200" alt="Phantom Life" class="phantom">
            <p class="text">
                After school, don the mask of a phantom thief and fight to reform<br>
                corrupt adults!<br>
                <br>
                Use the mysterious mobile app "Metaverse Navigator" to enter<br>
                the world within people's hearts. Then with the power of<br>
                Persona, steal the source of their distorted desires!<br>
                You may be able to change that visible world.<br>
                <br>
                By doing so, you can make anyone from an abusive teacher<br>
                to a fraudulent artist have a change of heart!?<br>
            </p>
        </div>
    </div>
</body>