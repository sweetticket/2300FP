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
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
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

           
            <img src="img/gallery/the_team/2011.jpg" alt="team2011">
            <img src="img/gallery/the_team/fa_2012.jpg" alt="team2012">
            <img src="img/gallery/the_team/sp_2013.jpg" alt="team2013"> 
            <img src="img/gallery/the_car/img1.jpg" alt="car1">
            <img src="img/gallery/the_car/img2.jpg" alt="car2">
            <img src="img/gallery/childrenstem.jpg" alt="childrenstem">
            <img src="img/gallery/sp14recruit.jpg" alt="sp14recruit">
            <img src="img/gallery/newsletter1.jpg" alt="newsletter1">
            <img src="img/gallery/newsletter.jpg" alt="newsletter">
            <img src="img/gallery/2013_accel_win.png" alt="newsletter">

		</div>

</div>
</div>
<script src="js/display_data.js"></script>
</body>
</html>
