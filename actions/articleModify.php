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

if(isset($_POST["title"]) && isset($_POST["summary"]) && isset($_POST["content"])){
    $title = $_POST["title"];
    $summary = $_POST["summary"];
    $content = $_POST["content"];
    if(isset($_POST["img"])){
        $img = $_POST["img"];
    }else{
        $img = "";
    }
}else{
    echo "Parameters not found";
    header("Location: http://".$config['URL']);
    exit;
}

if (isset($_POST["autore"])) {
    $autore = $_POST["autore"];
    if(!strpos($autore," ")){
        $autore = "Lorenzo Scebba";
    }
}else{
    $autore = "Lorenzo Scebba";
}

$autore = explode(" ", $autore);
$idAutore = $db->getAuthorId($autore[0],$autore[1]);

if($idAutore == false){
    $idAutore = 1;
}



if($db->modifyArticle($_SESSION["articleID"], $title, $content, $summary, $img)){
    echo "article modified";
}else{
    echo "error";
}
$_SESSION["articleID"] = null;
header("Location: http://".$config['URL']);