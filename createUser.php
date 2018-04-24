<?php
include_once 'actions/loggedInChecker.php';
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
        <form action="actions/userCreation.php" method="post" class="input-field">
            <h4 class="center-align" style="margin-bottom: 1em; -webkit-margin-after: 1em">User Creation</h4>

            <div class="row">
                <input type="text" name="name" placeholder="Nome">
            </div>

            <div class="row">
                <input type="text" name="surname" placeholder="Cognome">
            </div>

            <div class="row">
                <textarea name="bio" placeholder="Biografia" class="materialize-textarea"></textarea>
            </div>

            <div class="row">
                <input type="text" name="nickname" placeholder="Nickname">
            </div>

            <div class="row">
                <input type="password" name="password" placeholder="Password">
            </div>

            <div class="row">
                <button class="btn waves-effect green" style="width: 100%" type="submit">Submit</button>
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
        