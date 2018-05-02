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
$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/../cgi-bin/config.ini");

$id = $_POST["id"];

$db = new database();

if($db->getAuthorIdFromNickname($username) == $id){
    echo "You're currently logged in with the account you're trying to delete, deletion impossible.";
    exit();
}

if($db->deleteUser($id) === true){
    echo "user deleted";
    header("Location: http://".$config['URL']);
}else{
    echo "error";
}
