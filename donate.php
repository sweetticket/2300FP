<?php session_start();
$title = "DONATE";
$headersrc = "../img/headers/header_donate.png"; ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Donate</title>
    <!--<link rel="stylesheet" type="text/css" href="css/all.css">-->
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/donate.css">
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
			<h1>Donate</h1>
			<button id="paypal_btn">DONATE VIA PAYPAL</button>
		</div>

</div>
</div>

</body>
</html>
