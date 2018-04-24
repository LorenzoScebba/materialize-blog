<?php
/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 18/04/18
 * Time: 7.58
 */


if (session_status() == PHP_SESSION_NONE) {     session_start(); }
$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/../cgi-bin/config.ini");

if (!isset($_SESSION["username"]) || !isset($_SESSION["isLoggedIn"])) {
    echo "You're currently not logged in, redirecting...";
    header("Location: http://".$config['URL']);
    exit();
} else {
    $username = $_SESSION["username"];
}
?>