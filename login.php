<?php
if (session_status() == PHP_SESSION_NONE) {     session_start(); }
$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/../cgi-bin/config.ini");

if (isset($_SESSION["username"]) || isset($_SESSION["isLoggedIn"])) {
    echo "You're already logged in, redirecting...";
    echo "<meta http-equiv=\"refresh\" content=\"1;URL=http://".$config["URL"]."\">";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php include '_components/_css.php' ?>
</head>

<body>

<?php include '_components/_header.php' ?>

<main id="main">
    <div class="container" style="margin-bottom: 2em;">
        <!-- CONTENT GOES HERE  -->
        <h4 class="center-align">Login</h4>
        <div class="row">
            <form action="actions/doLogin.php" method="post" class="col s12">
                <div class="input-field row">
                    <div class="col s6">
                        <input type="text" placeholder="Username" id="username" name="username">
                    </div>
                    <div class="col s6">
                        <input type="password" placeholder="Password" id="password" name="password">
                    </div>
                </div>

                <div class="input-field row center-align">
                    <button class="btn waves-effect red" type="submit" name="action">Send</button>
                </div>

            </form>
        </div>
    </div>
</main>

<?php include '_components/_footer.php' ?>

<?php include '_components/_javascript.php' ?>

</body>
</html>
        