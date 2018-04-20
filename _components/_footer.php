<footer class="page-footer" style="-webkit-margin-before: 1.5em; margin-top: 1.5em;">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Infos</h5>
                <p class="grey-text text-lighten-4">Designed by me with <a href="http://materializecss.com"
                                                                           style="color:white">Materialize CSS
                        1.0.0-Beta</a></p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Link Utili</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="../index.php">Home Page</a></li>
                    <li><a class="grey-text text-lighten-3" href="../contatti.php">Contatti</a></li>
                    <?php
                    if (!isset($_SESSION["isLoggedIn"]) || is_null($_SESSION["isLoggedIn"])) {
                        echo "<li><a class=\"grey-text text-lighten-3\" href=\"../login.php\">Login</a></li>";
                    } else {
                        echo "<li><a class=\"grey-text text-lighten-3\" href=\"../actions/logout.php\">Logout</a></li>";
                    }
                    ?>

                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2018 Lorenzo Scebba
            <span class="right">
                Made with <a href="http://materializecss.com" style="color:white">Materialize CSS 1.0.0-Beta</a>
                <?php
                /*$timestamp = filemtime(__FILE__);
                $date = date('Y-m-d H:i:s', $timestamp);
                echo $date . " " . date_default_timezone_get();*/
                ?>
            </span>
        </div>
    </div>
</footer>