<?php session_start();
$title = "CONTACT US";
$headersrc = "../img/headers/header_contact.png"; ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <!--<link rel="stylesheet" type="text/css" href="css/all.css">-->
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/all.css">
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
			<h1>Contact Us</h1>
			<p>Contact form will go here.</p>
			<?php
			// This page will contain a form allowing the user to contact the team members
			// This the form submission will be processed using PHP
			?>
		</div>

</div>
</div>

</body>
</html>
