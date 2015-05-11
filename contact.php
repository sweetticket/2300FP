<?php session_start();
$title = "CONTACT US";
$headersrc = "./img/headers/header_contact.png"; ?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Contact Us</title>
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	
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
				<form name = "contactForm" method = "post" action = "contact.php">
					<?php include("verify.php"); ?>
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
				   	<span class = "error"><?php echo $messageErr;?></span>
				   	<br><br>
				   	<input type = "submit" name = "submit" value = "Submit">
				   	<span class = "error"><?php echo $success;?></span>
				   	<?php
				   	if ($_SERVER["REQUEST_METHOD"] == "POST") {
				   		if ($nameErr == '' && $emailErr == '' && $subjectErr == '') {
				   			$to = "rl393@cornell.edu";
				   			$message .= "\r\n" . "From: " . $name . "\r\n" . "Email: " . $email;
							if (mail ($to, $subject, $message)) {
								$success = "We will get back to you shortly!";
							}
						}
					}
				   	?>
				</form>

				<p>Interested in Cornell Racing? Contact us at:</p>
			</div>

		</div>
		<?php include("template/footer.php"); ?>
	</div>

</body>
</html>
