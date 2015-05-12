<?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Cornell FSAE</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
<?php include("template/nav.php"); ?>
<div class="wrapper">
<?php //include("template/header.php"); ?>
	<div class="main_content_wrapper">
		<div class="landing_img_container">
			<div class="header_logo_container">
				<img src="img/logo.png" alt="logo" class="header_logo">
			</div>
			<img src="img/team/theteam.jpg" alt="the team" class="landing_img">
		</div>
		<div id="main_content">
			<h1></h1>
		</div>
		<div class="twitter_side">
			<!-- this is where the twitter feed will go -->
		</div>
	</div>

	<?php include("template/footer.php"); ?>

</div>

</body>
</html>
