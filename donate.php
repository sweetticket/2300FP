<?php session_start();
$title = "DONATE";
$headersrc = "./img/headers/header_donate.png"; ?>
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
				<h1>Interested In Donating?</h1>
				<p>
					To donate to the Cornell Racing FSAE team, please make checks payable to <strong>"Cornell Formula SAE"</strong> and mail to the address below: <br>
					<br>
					<strong>
					Attn: Prof. Albert R. George <br>
					Cornell Formula SAE<br>
					258 Upson Hall<br>
					Ithaca, NY 14853<br>
				</strong>
					<br>
					Cornell University is a 501(c)(3) organization and all donations are tax deductible. <br>
					<br>
					If you have any questions, please check out our 
					<a href="https://www.giving.cornell.edu/give/?gifttype=21&comments=Cornell%20Formula%20SAE%20Racing%20%28All%20Donations%20To%20E55-8747%29">
						online donation page,
					</a>
					our 
					<a href="docs/2015sponsor.pdf">
					sponsorship packet
					</a>
					 or contact us through our email, <strong> cufsae@cornell.edu</strong>.<br>
					<br>
					Thank you for your support!
				</p>
				<div class="donate_wrapper">

					<img src="img/gallery/2013_accel_win.png" alt="donate">
				
				<a href="https://www.giving.cornell.edu/give/?gifttype=21&comments=Cornell%20Formula%20SAE%20Racing%20%28All%20Donations%20To%20E55-8747%29">
					<button id="paypal_btn">Donate Online</button>
				</a>

				</div>
			</div>

		</div>
		<?php include("template/footer.php"); ?>
	</div>

</body>
</html>
