<?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>The Competition</title>
    <!--<link rel="stylesheet" type="text/css" href="css/all.css">-->
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/competition.css">
</head>

<body>
<?php include("template/nav.php");  ?>
<div class="wrapper">
<?php include("template/header.php"); ?>
<div class="main_content_wrapper">
		<div class="landing_img_container">
			<img src="" alt="" class="landing_img"> <!-- landing img will go here-->
		</div>
		<div class="main_content">
			<h1>The Competition</h1>
			<p>
				Formula SAE, or FSAE, is an international competition for students to design, 
				manufacture, and contend a formula-style race car. Over 400 teams from universities 
				worldwide participate in these races spread out over numerous continents, with a growing 
				number of universities entering the competition annually. The final product of each team must 
				excel in multiple categories in order to bring the team to the 1st place podium at the 
				Formula SAE Design Competition in Michigan each year. The goal of this event is to efficiently 
				develop and market the fastest race car. 
			</p>
			<p>
				The structure of the competition is as follows:
			</p>
			<p id="list">

				Static Events: <br>
				Engineering Design <br>
				Cost Analysis <br>
				Business Presentation <br>
				<br>
				Dynamic Events <br>
				Endurance<br>
				Autocross<br>
				Fuel Efficiency<br>
				Acceleration<br>
				Skid-pad<br>
				<br>
				<br>

				Total:<br>
				150 points<br>
				100 points<br>
				75 points <br>

				<br>
				<br>
				300 points <br>
				150 points <br>
				100 points <br>
				75 points <br>
				50 points <br>
				______________<br> 

				1000 points<br>
			</p>
		</div>

</div>
</div>

</body>
</html>
