<?php session_start(); ?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <!--<link rel="stylesheet" type="text/css" href="css/all.css">-->
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
<?php include("template/nav.php"); ?>
<div class="wrapper">
<div class="main_content_wrapper">
        <div class="landing_img_container">
            <img src="" alt="" class="landing_img"> <!-- landing img will go here-->
        </div>
        <div class="main_content">
            <?php
            print("<h1>$label</h1>");

            $post_username = filter_input( INPUT_POST, 'username', FILTER_SANITIZE_STRING );
            $post_password = filter_input( INPUT_POST, 'password', FILTER_SANITIZE_STRING );
            if ( empty( $post_username ) || empty( $post_password ) ) {
                if (isset($_SESSION['logged_user_by_sql'])) {
                    $username = $_SESSION['logged_user_by_sql'];
                    if (isset($_POST['submit']) && $_POST['submit']=='Log out'){
                        unset($_SESSION['logged_user_by_sql']);
                        print("<p>You have successfully logged out, $username!</p>");
                    } else {
                        print("<p>You are already logged in, $username!</p>");
                        print("<p>If you wish to log out, click below.</p>");
                        print("
						<br>
						<form action='login.php' method='post'>
							<input type='submit' name='submit' value='Log out'>
						</form>
						");
                    }
                }else {
                    ?>
                    <form id = "loginform" action="login.php" method="post">
                        Username: <input type="text" name="username">
                        <br>
                        <br>
                        Password: <input type="password" name="password">
                        <br>
                        <br>
                        <input id="submit" type="submit" value="Log in">
                    </form>

                <?php
                }
            } else {

                require_once 'config.php';
                $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

                //hash the entered password for comparison with the db
                $hashed_password = hash("sha256",$post_password);


                //Check for a record that matches the POSTed credentials
                $query = "SELECT *
							FROM Users
							WHERE
								username = '$post_username'
								AND hashedPassword = '$hashed_password'";

                $result = $mysqli->query($query);


                if ( $result && $result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    $db_username = $row['username'];
                    print("<p>Congratulations, $db_username! You have successfully logged in!</p>");
                    $_SESSION['logged_user_by_sql'] = $db_username;

                } else {
                    echo '<p>' . $mysqli->error . '</p>';
                    ?>
                    <p>You did not login successfully.</p>
                    <p>Please <a href="login.php">login</a> again.</p>
                <?php
                }

                $mysqli->close();
            } //end if isset username and password
            ?>
        </div>
</div>
<?php include("template/footer.php"); ?>
</div>


</body>
</html>
