<?php if (session_status() == PHP_SESSION_NONE) {     session_start(); } ?>

<!--<div class="preloader-background">-->
<!--    <div class="progress grey" style="width: 50%">-->
<!--        <div class="indeterminate red"></div>-->
<!--    </div>-->
<!--</div>-->

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <!--<li><a href="../example.php">Example Page</a></li>-->
    <li><a href="../contatti.php"><span style="color:red">Contatti</span></a></li>
    <?php
    if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] == true) {
     echo "<li><a href=\"../admin.php\"><span style=\"color:red\">Admin</span></a></li>";
    }
    ?>
</ul>


<nav style="-webkit-margin-after: 1.5em; margin-bottom: 1.5em">
    <div class="nav-wrapper lighten-3 container">
        <a href="../index.php" class="brand-logo">Materialize CSS blog</a>
        <ul class="right">
            <li><a class="hide-on-med-and-down" href="../contatti.php">Contatti</a></li>
            <?php
            if (isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"] == true) {
                echo "<li><a class=\"hide-on-med-and-down\" href=\"../admin.php\">Admin</a></li>";
            }
            ?>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><i
                            class="material-icons right hide-on-large-only">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>