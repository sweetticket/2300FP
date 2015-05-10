<?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Newsletters</title>
    <!--<link rel="stylesheet" type="text/css" href="css/all.css">-->
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/newsletters.css">
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
			<h1>Newsletters</h1>
			<ul>
				<li class="newsletter_item"><a class="newsletter_link" href="docs/ARG15_Winter.pdf">Winter 2015</a></li>
				<li class="newsletter_item"><a class="newsletter_link" href="docs/ARG14_Winter.pdf">Winter 2014</a></li>
				<li class="newsletter_item"><a class="newsletter_link" href="docs/Fall2013.pdf">Fall 2013</a></li>
				<li class="newsletter_item"><a class="newsletter_link" href="docs/postcomp13.pdf">Post-Competition 2013</a></li>
				<li class="newsletter_item"><a class="newsletter_link" href="docs/sp12.pdf">Post-Competition 2012</a></li>

			</ul>
			<p>PLACEHOLDER FOR NEWSLETTER SIGNUP FORM</p>
		</div>

</div>
</div>

</body>
</html>
