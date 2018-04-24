<?php
/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 18/04/18
 * Time: 11.39
 */

ini_set('display_errors', 1);
$config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/../cgi-bin/config.ini");

require '../vendor/autoload.php';

use Mailgun\Mailgun;

if (isset($_POST["from"]) && isset($_POST["subject"]) && isset($_POST["text"]) && isset($_POST["name"])) {
    $name = $_POST["name"];
    $from = $_POST["from"];
    $subject = $_POST["subject"];
    $text = $_POST["text"];
} else {
    echo "An Error occurred, form not filled correctly.";
    echo "<meta http-equiv=\"refresh\" content=\"1;URL=http://".$config["URL"]."/index.php\">";
    exit;
}


# Instantiate the client.
$mgClient = new Mailgun($config["MailGunKey"]);
$domain = $config["MailGunDomain"];

try {
# Make the call to the client.
    $result = $mgClient->sendMessage($domain, array(
        'from' => "$name <$from>",
        'to' => 'Lorenzo Scebba <lorenzo.scebba@edu.itspiemonte.it>',
        'subject' => "$subject",
        'text' => "$text"
    ));
} catch (Exception $e) {
    echo "An error occurred :  $e";
    echo "<meta http-equiv=\"refresh\" content=\"1;URL=http://".$config["URL"]."/index.php\">";
    exit;
}

echo "Mail has been sent!";
echo "<meta http-equiv=\"refresh\" content=\"1;URL=http://".$config["URL"]."/index.php\">";

