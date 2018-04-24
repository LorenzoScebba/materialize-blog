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

$db = new database();

if (isset($_GET["id"]))
    $id = $_GET["id"];

if ($db->deleteArticle($id))
    echo "succesfull";
else
    echo "failed";

header("Location: http://".$config['URL']);