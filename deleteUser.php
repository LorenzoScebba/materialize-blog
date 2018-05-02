<?php
include_once 'actions/loggedInChecker.php';
include_once 'class/database.php';
$db = new database();

$ids = $db->getAuthors();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Crea Articolo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php include '_components/_css.php' ?>
</head>

<body>

<?php include '_components/_header.php' ?>

<main id="main">
    <div class="container">
        <!-- CONTENT GOES HERE  -->
        <form action="actions/userDeletion.php" method="post" class="input-field">
            <h4 class="center-align" style="margin-bottom: 1em; -webkit-margin-after: 1em">User Delete</h4>

            <select name="id">
                <?php
                foreach ($ids as $id) {
                    $info = $db->getAuthorInfos($id);
                    echo "<option value=\"$id\">$info</option>";
                }
                ?>

            </select>
            <div class="row">
                <button class="btn waves-effect waves-light green" style="width: 100%">Submit</button>
            </div>
        </form>
        <hr>
        <div class="row input-field">
            <a class="btn waves-effect darken-4 yellow" style="width: 100%" href="admin.php">Back</a>
        </div>
    </div>
</main>

<?php include '_components/_footer.php' ?>

<?php include '_components/_javascript.php' ?>

</body>
</html>
        