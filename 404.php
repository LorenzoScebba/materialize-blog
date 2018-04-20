<!DOCTYPE html>
<?php
$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/../private/config.ini");
echo "<base href=http://" . $config["URL"] . ">";
?>

<link rel="stylesheet" type="text/css" href="css/404.css">

<div class="page-wrapper">
    <div class="circles-layer">
        <div class="circle -white"></div>
        <div class="circle -red"></div>
        <div class="circle -white"></div>
        <div class="circle -red"></div>
    </div>
    <div class="numbers-layer">
        <div class="number">4</div>
        <div class="number">4</div>
        <div class="number">4</div>
        <div class="number">4</div>
        <div class="number">4</div>
        <div class="number">4</div>
        <div class="number">4</div>
        <div class="number">4</div>
        <div class="number -with-shadow">0</div>
        <div class="number -with-shadow">0</div>
        <div class="number -with-shadow">0</div>
        <div class="number -with-shadow">0</div>
    </div>
    <div class="oops-message">
        <div class="test">Opps... looks like You got lost</div>
        <a class="button" href="index.php">Try again</a>
    </div>
</div>