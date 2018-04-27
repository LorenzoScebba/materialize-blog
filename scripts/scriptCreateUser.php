<?php
/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 27/04/18
 * Time: 9.01
 */

ini_set('display_errors', 1);
include '../class/database.php';
$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/../cgi-bin/config.ini");

function generateRandomString($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    //Thanks https://stackoverflow.com/users/967955/pr07o7yp3
}

if(!is_null($config["token"]) && isset($config["token"])){
    $token = $config["token"];
}else{
    echo "Error, token not set or empty in config.ini, exiting...";
    exit();
}

if(!isset($_GET["token"])){
    echo "Error, no token passed, exiting...";
    exit();
}

if($_GET["token"] != $token){
    echo "Invalid token, exiting...";
    exit();
}

$username = "DefaultUser";
$password = generateRandomString();
$options = [
    'salt' => $config["salt"]
];

$db = new database();

if($db->nickameExist($username)) {
    echo "Error creating user nickname";
    exit();
}

if($db->createUser("DefaultName","DefaultSurname","DefaultBio",$username,password_hash($password, PASSWORD_BCRYPT, $options)) === true){
    echo "User Created<br>";
}else{
    echo "Error while creating user";
}

echo "Username : " . $username . "<br>";
echo "Password : " . $password;