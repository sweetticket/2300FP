<?php session_start();
$title = "ABOUT";
$headersrc = "./img/headers/header_about.png"; ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>About</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
</head>

<body>
<?php include("template/nav.php"); ?>
<div class="wrapper">
<?php include("template/header.php"); ?>
<div class="main_content_wrapper">
		<div class="landing_img_container">
			<img src="" alt="" class="landing_img"> <!-- landing img will go here-->
		</div>
		<div id="main_content">
			<section>
			<h1>Our History</h1>
			<p>Cornell’s Formula SAE Team was established in 1986. Professor Albert R. George became the faculty advisor overseeing approximately a dozen mechanical engineering students who began researching and designing a racecar from scratch. Since then, the team has grown substantially and has been greatly diversified. Today, an average Cornell Racing team is comprised of about 50 undergraduate and graduate students and has had participating members from nearly every school within Cornell.  </p>
			<p>Cornell Racing has competed for the last 26 years at FSAE Michigan, the last 5 years at the University of Toronto Shootout, and in 2011 at Formula Student Germany. </p>
			<img src="img/gallery/history/main1.jpg" alt="historyimg" class="historyimg">
			</section>
			<section>
			<h1>Learn More</h1>
			<p>Click on the links below to learn more about us.</p>
			<ul>
				<li><a href="team.php">The Team</a></li>
				<li><a href="competition.php">The Competition</a></li>
				<li><a href="cars.php">The Cars</a></li>
			</ul>
			</section>
		</div>

</div>
<?php include("template/footer.php"); ?>
</div>

</body>
</html>
