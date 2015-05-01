<?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>The Cars</title>
    <!--<link rel="stylesheet" type="text/css" href="css/all.css">-->
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/cars.css">
</head>

<body>
<?php include("template/nav.php");  ?>
<div class="wrapper">
<?php include("template/header.php"); ?>
<div class="main_content_wrapper">
		<div class="landing_img_container">
			<img src="" alt="" class="landing_img"> <!-- landing img will go here-->
		</div>
		<div class="side_nav">
			<ul>
				<li><a href="#current" class="car_nav_link">The Current Car</a></li>
				<li><a href="#2010s" class="car_nav_link">2010s</a>
					<ul>
						<li><a id="2015" href="#current" class="car_nav_link">2015</a></li>
						<li><a id="2014" href="#" class="car_nav_link">2014</a></li>
						<li><a id="2013" href="#" class="car_nav_link">2013</a></li>
						<li><a id="2012" href="#" class="car_nav_link">2012</a></li>
						<li><a id="2011" href="#" class="car_nav_link">2011</a></li>
						<li><a id="2010" href="#" class="car_nav_link">2010</a></li>
					</ul>
				</li>
				<li><a href="#2000s" class="car_nav_link">2000s</a>
					<ul>
						<li><a id="2009" href="#" class="car_nav_link">2009</a></li>
						<li><a id="2008" href="#" class="car_nav_link">2008</a></li>
						<li><a id="2007" href="#" class="car_nav_link">2007</a></li>
						<li><a id="2006" href="#" class="car_nav_link">2006</a></li>
						<li><a id="2005" href="#" class="car_nav_link">2005</a></li>
						<li><a id="2004" href="#" class="car_nav_link">2004</a></li>
						<li><a id="2003" href="#" class="car_nav_link">2003</a></li>
						<li><a id="2002" href="#" class="car_nav_link">2002</a></li>
						<li><a id="2001" href="#" class="car_nav_link">2001</a></li>
						<li><a id="2000" href="#" class="car_nav_link">2000</a></li>
					</ul>
				</li>
				<li><a href="#1990s" class="car_nav_link">1990s</a>
					<ul>
						<li><a id="1999" href="#" class="car_nav_link">1999</a></li>
						<li><a id="1998" href="#" class="car_nav_link">1998</a></li>
						<li><a id="1997" href="#" class="car_nav_link">1997</a></li>
						<li><a id="1996" href="#" class="car_nav_link">1996</a></li>
						<li><a id="1995" href="#" class="car_nav_link">1995</a></li>
						<li><a id="1994" href="#" class="car_nav_link">1994</a></li>
						<li><a id="1993" href="#" class="car_nav_link">1993</a></li>
						<li><a id="1992" href="#" class="car_nav_link">1992</a></li>
						<li><a id="1991" href="#" class="car_nav_link">1991</a></li>
						<li><a id="1990" href="#" class="car_nav_link">1990</a></li>
					</ul>
				</li>
				<li><a href="#1980s" class="car_nav_link">1980s</a>
					<ul>
						<li><a id="1989" href="#" class="car_nav_link">1989</a></li>
						<li><a id="1988" href="#" class="car_nav_link">1988</a></li>
						<li><a id="1987" href="#" class="car_nav_link">1987</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="main_content">
			<h1>The Cars</h1>
			<?php
			// Similar to the news page, the list of articles will be loaded from the database using php.
			// Logged-in users will also have the ability to edit content.
			// The editing feature may be done in all PHP with an additional edit post page or with JavaScript on this page.
			?>
		</div>

</div>
</div>

</body>
</html>
