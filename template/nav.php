<nav>
    <ul>
            <li><a class="nav_link" href="index.php">HOME</a></li>
            <li class="has_sub"><a class="nav_link" href="about.php">ABOUT</a>
                <ul class="sub_menu">
                    <li class="nav_sub"><a class="nav_sub_link" href="team.php">The Team</a></li>
                    <li class="nav_sub"><a class="nav_sub_link" href="competition.php">The Competition</a></li>
                    <li class="nav_sub"><a class="nav_sub_link" href="cars.php">The Cars</a></li>
                    <li class="nav_sub"><a class="nav_sub_link" href="history.php">Our History</a></li>
                </ul>
            </li>
            <li class="has_sub"><a class="nav_link" href="news.php">NEWS</a>
                <ul class="sub_menu">
                    <li class="nav_sub"><a class="nav_sub_link" href="announce.php">Announcements</a></li>
                    <li class="nav_sub"><a class="nav_sub_link" href="newsletters.php">Newsletters</a></li>
                </ul>
            </li>
            <li><a class="nav_link" href="gallery.php">GALLERY</a></li>
            <li><a class="nav_link" href="sponsors.php">SPONSORS</a></li>
            <li><a class="nav_link" href="donate.php">DONATE</a></li>
            <li><a class="nav_link" href="contact.php">CONTACT</a></li>
    </ul>
    <ul class="right">
        <li class-"nav_link login_nav_link"><a class="nav_link" href="login.php">
            <?php
            $label = isset($_SESSION['logged_user_by_sql']) ? 'LOG OUT' : 'LOG IN';
            print($label);
            ?>
        </a></li>
    </ul>
</nav>