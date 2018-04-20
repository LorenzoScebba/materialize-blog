<?php
ini_set('display_errors',1);

    include_once 'class/database.php';

    $db = new database();
    if(!$db->isConnectionOpen()){
        echo "error connecting to db";
    }
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
        $articles = $db->getArticles(5,"DESC");
        foreach($articles as $article){
            if($article instanceof article){
               $db->printArticlePreview($article);
            }
        }
        ?>

    </div>
</main>

<?php include '_components/_footer.php' ?>

<?php include '_components/_javascript.php' ?>

</body>
</html>
        