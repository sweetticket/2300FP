<?php session_start();
$title = "OUR SPONSORS";
$headersrc = "./img/headers/header_sponsors.png"; ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Delete Sponsors</title>
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
			<h1>Delete Sponsors</h1>
			<?php
			if (isset($_SESSION['logged_user_by_sql']) && $_SESSION['logged_user_by_sql']=='cornellfsae'){
				require_once 'config.php';
				$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

				// Process form
				if (isset($_POST['submit'])){
					if (isset($_POST['sponsors'])) {
						$count = 0;
						foreach ($_POST['sponsors'] as $sponsor_id){
							$count += 1;
							$mysqli->query("DELETE FROM Sponsors Where SponsorID=$sponsor_id");
						}
						print("<p>$count sponsor(s) deleted</p>");
					} else {
						print("<p style='color:#FF0000'>No sponsors selected</p>");
					}
				}

				print("<form class='form' action='delete_sponsors.php' method='post'>");
				$result = $mysqli->query("SELECT * FROM Sponsors ORDER BY tier ASC");
				while ($row = $result->fetch_row()){
					print("<div class='sponsors_container'><input type='checkbox' name='sponsors[]' value='$row[0]'>
					<img src='$row[1]' alt='Sponsor ID $row[0]'></div>
					<br>");
				}
				print("<input type='submit' name='submit' value='Delete Sponsor(s)'>
					</form>");
			} else{
				print("<p style='color:#FF0000'>You are unauthorized to view this page, please log in</p>");
			}

			require_once 'config.php';
			$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			?>
		</div>

</div>
</div>

</body>
</html>
