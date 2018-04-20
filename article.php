<?php
//ini_set('display_errors', 1);
include 'class/database.php';
$db = new database();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome!</title>
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

            if(isset($_GET["id"])) {
                $article = $db->getArticle($_GET["id"]);
                if (!$article instanceof article) {
                    $article = new article("ERROR","ERROR","ERROR","ERROR","ERROR","ERROR");
                }
            }else{
                $article = new article("ERROR","ERROR","ERROR","ERROR","ERROR","ERROR");
            }
        ?>

        <h4 class="center-align" style="margin-bottom: 1em"><?php echo $article->titolo ?></h4>

        <div class="row center-align">
            <div class="col s3"></div>
            <div class="col s6">
                <img class="center-align" width="300px" style="-webkit-margin-after: 0.5em; margin-bottom: 0.5em;" src=<?php if($article->thumbnail != "ERROR") echo "\"$article->thumbnail\"" ?>>
            </div>
            <div class="col s3"></div>
        </div>

        <div class="row flow-text" style="font-size: 1em">
            <?php echo $article->contenuto ?>
        </div>

        <div class="row flow-text center-align">
            <small class="right">Written by <?php echo $db->getAuthorInfos($article->autore) ?></small>
        </div>

    </div>
</main>

<?php include '_components/_footer.php' ?>

<?php include '_components/_javascript.php' ?>

</body>
</html>
        