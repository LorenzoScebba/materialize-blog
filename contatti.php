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
        <h4 class="center-align">Form invio email</h4>
        <div class="input-field">
            <form action="actions/sendMail.php" method="post">
                <input type="text" name="name" placeholder="Nome Completo" required>
                <input type="email" name="from" placeholder="Email" required>
                <input type="text" name="subject" placeholder="Oggetto" required>
                <textarea id="text" name="text" placeholder="Contenuto" class="materialize-textarea" required></textarea>
                <button type="submit" class="btn waves-effect waves-light red" style="width: 100%; margin-top: 1em; -webkit-margin-before: 1em;">Invia</button>
            </form>
        </div>

    </div>
</main>

<?php include '_components/_footer.php' ?>

<?php include '_components/_javascript.php' ?>

</body>
</html>
        