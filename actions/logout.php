<?php
/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 17/04/18
 * Time: 10.48
 */
$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/../cgi-bin/config.ini");
if (session_status() == PHP_SESSION_NONE) {     session_start(); }
session_reset();
session_destroy();
echo "<meta http-equiv=\"refresh\" content=\"0;URL=http://".$config["URL"]."\">";
