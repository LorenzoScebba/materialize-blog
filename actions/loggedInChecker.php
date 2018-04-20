<?php
/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 18/04/18
 * Time: 7.58
 */


session_start();
$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/config.ini");

if (!isset($_SESSION["username"]) || !isset($_SESSION["isLoggedIn"])) {
    echo "You're currently not logged in, redirecting...";
    echo "<meta http-equiv=\"refresh\" content=\"1;URL=".$config["URL"]."\">";
    exit();
} else {
    $username = $_SESSION["username"];
}
?>