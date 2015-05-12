<?php session_start();
$title = "GALLERY";
$headersrc = "./img/headers/header_gallery.png"; ?>
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
		<div id="main_content">
			<h1>Gallery</h1>
            <p>Images will go here.</p>
            <div id="container">
            
            <div class="item_container">
            <a href="img/gallery/the_team/2011.jpg"><img src="img/gallery/the_team/2011.jpg" alt="team2011"></a>
            </div>

            <div class="item_container">
            <a href="img/gallery/the_team/sp_2013.jpg"><img src="img/gallery/the_team/sp_2013.jpg" alt="team2013"></a>
            </div>

            <div class="item_container">
            <a href="img/gallery/the_car/img1.jpg"><img src="img/gallery/the_car/img1.jpg" alt="car1"></a>
            </div>

            <div class="item_container">
            <a href="img/gallery/the_car/img2.jpg"><img src="img/gallery/the_car/img2.jpg" alt="car2"></a>
            </div>

            <div class="item_container">
            <a href="img/gallery/childrenstem.jpg"><img src="img/gallery/childrenstem.jpg" alt="childrenstem"></a>
            </div>

            <div class="item_container">
            <a href="img/gallery/sp14recruit.jpg"><img src="img/gallery/sp14recruit.jpg" alt="sp14recruit"></a>
            </div>

            <div class="item_container">
            <a href="img/gallery/newsletter1.jpg"><img src="img/gallery/newsletter1.jpg" alt="newsletter1"></a>
            </div>

            <div class="item_container">
            <a href="img/gallery/newsletter.jpg"><img src="img/gallery/newsletter.jpg" alt="newsletter"></a>
            </div>

            <div class="item_container">
            <a href="img/gallery/2013_accel_win.png"><img src="img/gallery/2013_accel_win.png" alt="newsletter"></a>
            </div>

            </div>

		</div>

</div>
<?php include("template/footer.php"); ?>
</div>
<script src="js/display_data.js"></script>
</body>
</html>
