<?php session_start();
$title = "ABOUT";
$headersrc = "./img/headers/header_about.png"; ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>About</title>
    <!--<link rel="stylesheet" type="text/css" href="css/all.css">-->
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/all.css">
</head>

<body>
<?php include("template/nav.php"); ?>
<div class="wrapper">
<?php include("template/header.php"); ?>
<div class="main_content_wrapper">
		<div class="landing_img_container">
			<img src="" alt="" class="landing_img"> <!-- landing img will go here-->
		</div>
		<div class="main_content">
			<section>
			<h1>About FSAE</h1>
			<p>Main about page. General information about FSAE will go here. Also, links to the sub-categories under "About" </p>
			</section>
			<section>
			<h1>Our History</h1>
			<p>Stuff about history goes here. </p>
			</section>
			<section>
			<h1>Learn More</h1>
			<p>Links to sub categories go here. </p>
			</section>
		</div>

</div>
<?php include("template/footer.php"); ?>
</div>

</body>
</html>
