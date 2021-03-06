<?php
/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 17/04/18
 * Time: 8.13
 */

if (session_status() == PHP_SESSION_NONE) {     session_start(); }
include '../class/database.php';
$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/../cgi-bin/config.ini");

if (is_null($_POST["username"]) || is_null($_POST["password"])) {
    echo "Error, username or password empty";
    exit;
}

$username = $_POST["username"];
$password = $_POST["password"];
$options = [
    'salt' => $config["salt"]
];

$password = password_hash($password, PASSWORD_BCRYPT, $options);

$db = new database();
if (!$db->isConnectionOpen()) {
    echo "error connecting to db";
    exit;
}

if ($db->userExist($username, $password)) {
    //echo "user exist";
    $_SESSION["isLoggedIn"] = true;
    $_SESSION["username"] = $username;
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://".$config["URL"]."/index.php\">";
    exit();
} else {
    //echo "user does not exist";
    if ($db->nickameExist($username)) {
        echo "Wrong password, redirecting...";
        header("Location: http://".$config['URL']);
        exit();
    } else {
        echo "User not present in db, redirecting...";
        header("Location: http://".$config['URL']);
        exit();
    }
}