<?php session_start(); 
$title = "NEWS";
$headersrc = "./img/headers/header_news.png";?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>News</title>
    <!--<link rel="stylesheet" type="text/css" href="css/all.css">-->
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/news.css">
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
			<h1>News</h1>
			<p>Main news page. Link to Announcements and Newsletters will also be here.</p>
			<?php
			// The list of articles will be loaded from the database using php.
			// Logged-in users will also have the ability to edit content.
			// The editing feature may be done in all PHP with an additional edit post page or with JavaScript on this page.
			?>

			<h1>Newsletters</h1>
			<ul>
				<li><a href="docs/ARG15_Winter.pdf">Winter 2015</a></li>
				<li><a href="docs/ARG14_Winter.pdf">Winter 2014</a></li>
				<li><a href="docs/Fall2013.pdf">Fall 2013</a></li>
				<li><a href="docs/postcomp13.pdf">Post-Competition 2013</a></li>
				<li><a href="docs/sp12.pdf">Post-Competition 2012</a></li>

			</ul>
			<p>PLACEHOLDER FOR NEWSLETTER SIGNUP FORM</p>
		</div>

</div>
<?php include("template/footer.php"); ?>
</div>

</body>
</html>
