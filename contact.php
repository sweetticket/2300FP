<?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Contact Us</title>
	<!--<link rel="stylesheet" type="text/css" href="css/all.css">-->
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	
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
				<h1>Contact Form</h1>
				<form name = "contactForm" method = "post" action = "verify.php">
					<label for = "contactName"> Name </label>
				   		<input type = "text" name = "contactName" value = "<?php echo $name;?>">
				   	<span class = "error"><?php echo $nameErr;?></span>
				   	<br><br>
				   	<label for = "contactEmail"> Email </label>
				   		<input type = "text" name = "contactEmail" value = "<?php echo $email;?>">
				   	<span class = "error"><?php echo $emailErr;?></span>
				   	<br><br>
				   	<label for = "contactSubject"> Subject </label>
				   		<input type = "text" name = "contactSubject" value = "<?php echo $subject;?>">
				   	<span class = "error"><?php echo $subjectErr;?></span>
				   	<br><br>
				   	<label for = "contactMessage"> Message </label>
				   		<textarea name = "message" rows = "5" cols = "40"><?php echo $message;?></textarea>
				   	<br><br>
				   	<input type = "submit" name = "submit" value = "Submit"> 
				   	
				</form>

				<p>Interested in Cornell Racing? Contact us at:</p>
			</div>

		</div>
	</div>

</body>
</html>
