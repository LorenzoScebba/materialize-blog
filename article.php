<?php
//ini_set('display_errors', 1);
include 'class/database.php';
$db = new database();
?>
<?php

if (isset($_GET["id"])) {
    $article = $db->getArticle($_GET["id"]);
    if (!$article instanceof article) {
        $article = new article("ERROR", "ERROR", "ERROR, no article found", "ERROR", "ERROR", "ERROR", "ERROR");
    }
} else {
    $article = new article("ERROR", "ERROR", "ERROR, no article found", "ERROR", "ERROR", "ERROR", "ERROR");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $article->titolo ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php include '_components/_css.php' ?>
</head>

<body>

<?php include '_components/_header.php' ?>

<main id="main">
    <div class="container">
        <!-- CONTENT GOES HERE  -->
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/../cgi-bin/config.ini");

        if (isset($_SESSION["username"]) && isset($_SESSION["isLoggedIn"])) {
            echo "<div class='row'><form action='modifyArticle.php' method='post'><button class='btn red waves-effect waves-light right' name='id' type='submit' value='$article->id'>Edit</button></form></div>";
        }
        ?>
        <div class="row">
            <h4 class="center-align" style="margin-bottom: 1em"><?php echo $article->titolo ?></h4>
        </div>
        <div class="row center-align">
            <div class="col s3"></div>
            <div class="col s6">
                <img class="center-align" width="300px" style="-webkit-margin-after: 0.5em; margin-bottom: 0.5em;"
                     src=<?php if ($article->thumbnail != "ERROR") echo "\"$article->thumbnail\"" ?>>
            </div>
            <div class="col s3"></div>
        </div>

        <div class="row flow-text" style="font-size: 1em">
            <?php echo $article->contenuto ?>
        </div>

        <div class="row flow-text center-align">
            <small class="right">Written
                by <?php if ($article->autore != "ERROR") echo $db->getAuthorInfos($article->autore) ?></small>
        </div>

    </div>
</main>

<?php include '_components/_footer.php' ?>

<?php include '_components/_javascript.php' ?>

</body>
</html>
        