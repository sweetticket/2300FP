<?php session_start();
$title = "GALLERY";
$headersrc = "../img/headers/header_gallery.png"; ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <!--<link rel="stylesheet" type="text/css" href="css/all.css">-->
    <script src="js/jquery.js"></script>
    <script src="js/packery.pkgd.min.js"></script>
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
			<h1>Gallery</h1>
            <p>Images will go here.</p>
            <?php
            // This page will load content from the database using php and display all the album information for view
            // Alternatively this feature may be done using javascript, which would be done in a separate js file
            // JavaScript would make it easier to display all the images organized by albums on one page
            ?>
		</div>

</div>
</div>
<script src="js/display_data.js"></script>
</body>
</html>
