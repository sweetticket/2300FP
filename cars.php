<?php session_start(); 
$title = "THE CARS";
$headersrc = "./img/headers/header_cars.png"; ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>The Cars</title>
    <!--<link rel="stylesheet" type="text/css" href="css/all.css">-->
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/cars.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src='js/cars.js'></script>	
</head>

<body>
<?php include("template/nav.php");  ?>
<div class="wrapper">
<?php
include("template/header.php"); ?>
<div class="main_content_wrapper">
		<div class="landing_img_container">
			<img src="" alt="" class="landing_img"> <!-- landing img will go here-->
		</div>
		<div class="side_nav">
			<ul>
				<li class="car_nav"><a id="2015" href="#main_content" class="car_nav_link">The Current Car</a></li>
				<li class="car_nav"><span class="toggle_btn">2010s</span>
					<ul>
						<li><a id="2014" href="#main_content" class="car_nav_link">2014</a></li>
						<li><a id="2013" href="#main_content" class="car_nav_link">2013</a></li>
						<li><a id="2012" href="#main_content" class="car_nav_link">2012</a></li>
						<li><a id="2011" href="#main_content" class="car_nav_link">2011</a></li>
						<li><a id="2010" href="#main_content" class="car_nav_link">2010</a></li>
					</ul>
				</li>
				<li class="car_nav"><span class="toggle_btn">2000s</span>
					<ul>
						<li><a id="2009" href="#main_content" class="car_nav_link">2009</a></li>
						<li><a id="2008" href="#main_content" class="car_nav_link">2008</a></li>
						<li><a id="2007" href="#main_content" class="car_nav_link">2007</a></li>
						<li><a id="2006" href="#main_content" class="car_nav_link">2006</a></li>
						<li><a id="2005" href="#main_content" class="car_nav_link">2005</a></li>
						<li><a id="2004" href="#main_content" class="car_nav_link">2004</a></li>
						<li><a id="2003" href="#main_content" class="car_nav_link">2003</a></li>
						<li><a id="2002" href="#main_content" class="car_nav_link">2002</a></li>
						<li><a id="2001" href="#main_content" class="car_nav_link">2001</a></li>
						<li><a id="2000" href="#main_content" class="car_nav_link">2000</a></li>
					</ul>
				</li>
				<li class="car_nav"><span class="toggle_btn">1990s</span>
					<ul>
						<li><a id="1999" href="#main_content" class="car_nav_link">1999</a></li>
						<li><a id="1998" href="#main_content" class="car_nav_link">1998</a></li>
						<li><a id="1997" href="#main_content" class="car_nav_link">1997</a></li>
						<li><a id="1996" href="#main_content" class="car_nav_link">1996</a></li>
						<li><a id="1995" href="#main_content" class="car_nav_link">1995</a></li>
						<li><a id="1994" href="#main_content" class="car_nav_link">1994</a></li>
						<li><a id="1993" href="#main_content" class="car_nav_link">1993</a></li>
						<li><a id="1992" href="#main_content" class="car_nav_link">1992</a></li>
						<li><a id="1991" href="#main_content" class="car_nav_link">1991</a></li>
						<li><a id="1990" href="#main_content" class="car_nav_link">1990</a></li>
					</ul>
				</li>
				<li class="car_nav"><span class="toggle_btn">1980s</span>
					<ul>
						<li><a id="1989" href="#main_content" class="car_nav_link">1989</a></li>
						<li><a id="1988" href="#main_content" class="car_nav_link">1988</a></li>
						<li><a id="1987" href="#main_content" class="car_nav_link">1987</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div id="main_content">
			<div class="car_item" id="2015_item">
				<h1>The Current Car</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="2014_item">
				<h1>2014</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="2013_item">
				<h1>2013</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="2012_item">
				<h1>2012</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="2011_item">
				<h1>2011</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="2010_item">
				<h1>2010</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="2009_item">
				<h1>2009</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="2008_item">
				<h1>2008</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="2007_item">
				<h1>2007</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="2006_item">
				<h1>2006</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="2005_item">
				<h1>2005</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="2004_item">
				<h1>2004</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="2003_item">
				<h1>2003</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="2002_item">
				<h1>2002</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="2001_item">
				<h1>2001</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="2000_item">
				<h1>2000</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="1999_item">
				<h1>1999</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="1998_item">
				<h1>1998</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="1997_item">
				<h1>1997</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="1996_item">
				<h1>1996</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="1995_item">
				<h1>1995</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="1994_item">
				<h1>1994</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="1993_item">
				<h1>1993</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="1992_item">
				<h1>1992</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="1991_item">
				<h1>1991</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="1990_item">
				<h1>1990</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="1989_item">
				<h1>1989</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="1988_item">
				<h1>1988</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>
			<div class="car_item" id="1987_item">
				<h1>1987</h1>
				<img src="" alt="car img" class="car_item_img">
				<p> Description goes here.</p>
			</div>

		</div>

</div>
<?php include("template/footer.php"); ?>
</div>

</body>
</html>
