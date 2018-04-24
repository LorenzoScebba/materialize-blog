<?php
include_once 'actions/loggedInChecker.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Administration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php include '_components/_css.php' ?>
</head>

<body>

<?php include '_components/_header.php' ?>

<main id="main">
    <div class="container">
        <!-- CONTENT GOES HERE  -->
        <h4 class="center-align" style="-webkit-margin-after: 1em;margin-bottom: 1em;">
            Welcome <?php echo $username ?></h4>

        <h5 class="center-align">Articles</h5>

        <div class="row">
            <div class="col s6">
                <a class="btn waves-effect green" style="width: 100%;" href="createArticle.php"><b>CREATE</b>
                    article</a>
            </div>
            <div class="col s6">
                <a class="btn waves-effect orange" style="width: 100%;" href="selectModifyArticle.php"><b>MODIFY</b>
                    article</a>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a class="btn waves-effect red" style="width: 100%;" href="deleteArticle.php"><b>DELETE</b> article</a>
            </div>
        </div>
        <hr>

        <!-- User stuff -->
        <h5 class="center-align">Users</h5>


        <div class="row">
            <div class="col s6">
                <a class="btn waves-effect green" style="width: 100%;" href="createUser.php"><b>CREATE</b> user</a>
            </div>
            <div class="col s6">
                <a class="btn waves-effect orange disabled" style="width: 100%;" href=""><b>MODIFY</b> user</a>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a class="btn waves-effect red disabled" style="width: 100%;" href=""><b>DELETE</b> user</a>
            </div>
        </div>

    </div>
</main>

<?php include '_components/_footer.php' ?>

<?php include '_components/_javascript.php' ?>

</body>
</html>
        