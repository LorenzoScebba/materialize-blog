<?php
/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 18/04/18
 * Time: 10.06
 */

ini_set('display_errors', 1);
include '../class/database.php';
include 'loggedInChecker.php';
$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/../private/config.ini");

$db = new database();

if (isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["bio"]) && isset($_POST["nickname"]) && isset($_POST["password"])) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $bio = $_POST["bio"];
    $nickname = $_POST["name"];
    $options = [
        'salt' => $config["salt"]
    ];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT, $options);
} else {
    echo "Parameters not found";
    echo "<meta http-equiv=\"refresh\" content=\"1;URL=http://" . $config["URL"] . "\">";
    exit;
}

if($db->nickameExist($nickname)){
    echo "username already exist";
    exit();
}

if($db->createUser($name,$surname,$bio,$nickname,$password) === true){
    echo "user created";
}else{
    echo "error";
}
echo "<meta http-equiv=\"refresh\" content=\"1;URL=http://" . $config["URL"] . "\">";