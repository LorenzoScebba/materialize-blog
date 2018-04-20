<?php
include_once 'actions/loggedInChecker.php';
include_once 'class/database.php';
$db = new database();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Selezione Articolo da Modificare!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php include '_components/_css.php' ?>
</head>

<body>

<?php include '_components/_header.php' ?>

<main id="main">
    <div class="container">
        <!-- CONTENT GOES HERE  -->
        <form action="modifyArticle.php" method="post">
            <h4 class="center-align" style="margin-bottom: 1em; -webkit-margin-after: 1em">Article Creation</h4>

            <div class="row input-field">
                <select name="id">
                    <?php
                    $articles = $db->getAllArticles();
                    foreach ($articles as $article) {
                        echo "<option value=\"$article->id\">$article->titolo</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="row input-field">
                <button class="btn waves-effect green" style="width: 100%" type="submit">Submit</button>
            </div>
        </form>
    </div>
</main>

<?php include '_components/_footer.php' ?>

<?php include '_components/_javascript.php' ?>

</body>
</html>
        