<?php session_start();
$title = "OUR SPONSORS";
$headersrc = "../img/headers/header_sponsors.png"; ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Our Sponsors</title>
    <!--<link rel="stylesheet" type="text/css" href="css/all.css">-->
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/sponsors.css">
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
			<h1>Our Sponsors</h1>
			<?php
			require_once 'config.php';
			$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

			// Process add sponsor form
			if (isset($_POST['submit']) &&
					isset($_SESSION['logged_user_by_sql']) &&
					$_SESSION['logged_user_by_sql']=='cornellfsae') {
				if ($_POST['submit'] == 'Add Sponsor') {
					if (!isset($_FILES['photo'])) {
						print("<p style='color:#FF0000'>No photo uploaded, please select a photo before submitting the form</p>");
					} else {
						$photo = $_FILES['photo'];
						$tier = $_POST['tier'];

						$origName = $photo['name'];
						$tempName = $photo['tmp_name'];

						if (file_exists('img/sponsors/' . $origName)) {
							print("<p style='color:#FF0000'>Error: File with that name already exists, please try again</p>");
						} else {
							$mysqli->query("INSERT INTO Sponsors (imagePath, tier) VALUES ('img/sponsors/$origName', $tier)");

							move_uploaded_file($tempName, "img/sponsors/$origName");

							print("<p>Sponsor added successfully!</p>");
						}
					}
				}
			}

			// Title Sponsors
			$result = $mysqli->query("SELECT * FROM Sponsors WHERE tier = 1");
			print("<div class='sponsors_container' id='title_sponsors'>
				<h2>Title Sponsors</h2>");
			while ($row = $result->fetch_row()){
				print("<img src='$row[1]' alt='Title Sponsor''>");
			}
			print("</div>");

			// Platinum Sponsors
			$result = $mysqli->query("SELECT * FROM Sponsors WHERE tier = 2");
			print("<div class='sponsors_container' id='platinum_sponsors'>
				<h2>Platinum Sponsors</h2>");
			while ($row = $result->fetch_row()){
				print("<img src='$row[1]' alt='Platinum Sponsor''>");
			}
			print("</div>");

			//Gold Sponsors
			$result = $mysqli->query("SELECT * FROM Sponsors WHERE tier = 3");
			print("<div class='sponsors_container' id='gold_sponsors'>
				<h2>Gold Sponsors</h2>");
			while ($row = $result->fetch_row()){
				print("<img src='$row[1]' alt='Gold Sponsor''>");
			}
			print("</div>");

			// Silver Sponsors
			$result = $mysqli->query("SELECT * FROM Sponsors WHERE tier = 4");
			print("<div class='sponsors_container' id='silver_sponsors'>
				<h2>Silver Sponsors</h2>");
			while ($row = $result->fetch_row()){
				print("<img src='$row[1]' alt='Silver Sponsor''>");
			}
			print("</div>");

			// Bronze Sponsors
			$result = $mysqli->query("SELECT * FROM Sponsors WHERE tier = 5");
			print("<div class='sponsors_container' id='bronze_sponsors'>
				<h2>Bronze Sponsors</h2>");
			while ($row = $result->fetch_row()){
				print("<img src='$row[1]' alt='Bronze Sponsor''>");
			}
			print("</div>");

			if (isset($_SESSION['logged_user_by_sql']) && $_SESSION['logged_user_by_sql']=='cornellfsae'){
				?>
				<div>
					<h1>Add a Sponsor</h1>
					<form class='form' action='sponsors.php' enctype='multipart/form-data' method='post'>
						<p>Select photo:  <input type='file' accept='image/*' name='photo'></p>
						<p>Tier:
							<select name='tier'>
								<option value='1'>Title</option>
								<option value='2'>Plainum</option>
								<option value='3'>Gold</option>
								<option value='4'>Silver</option>
								<option value='5'>Bronze</option>
							</select>
						</p>
						<input type='submit' name='submit' value='Add Sponsor'>
					</form>
				</div>
				<?php
			}
			?>
		</div>

</div>
</div>

</body>
</html>
