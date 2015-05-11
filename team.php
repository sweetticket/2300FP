<?php session_start();
$title = "THE TEAM";
$headersrc = "./img/headers/header_team.png"; ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>The Team</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/team.css">
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
			<h1>The Team</h1>
			<div class="team_container">
				<div class="member_div">
					<h2 class="member_name">Nina Buchakjian</h2>
					<img src="img/team/Buchakjian.jpg" alt="Buchakjian">
					<p>Details about member's bio and team.</p>
				</div>
				<div class="member_div">
					<h2 class="member_name">Kern Sharma</h2>
					<img src="img/team/Sharma.jpg" alt="Sharma">
					<p>Details about member's bio and team.</p>
				</div>
				<div class="member_div">
					<h2 class="member_name">Luke Moll</h2>
					<img src="img/team/Moll.jpg" alt="Moll">
					<p>Details about member's bio and team.</p>
				</div>
				<div class="member_div">
					<h2 class="member_name">Connor Archard</h2>
					<img src="img/team/Archard.jpg" alt="Archard">
					<p>Details about member's bio and team.</p>
				</div>
				<div class="member_div">
					<h2 class="member_name">TeAnn Nguyen</h2>
					<img src="img/team/Nguyen.jpg" alt="Nguyen">
					<p>Details about member's bio and team.</p>
				</div>
				<div class="member_div">
					<h2 class="member_name">Sarah Behringer</h2>
					<img src="img/team/Behringer.jpg" alt="Behringer">
					<p>Details about member's bio and team.</p>
				</div>
			</div>
		</div>

</div>
<?php include("template/footer.php"); ?>
</div>

</body>
</html>
