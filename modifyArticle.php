<?php
include_once 'actions/loggedInChecker.php';
include_once 'class/database.php';
$db = new database();
$article = $db->getArticle($_POST["id"]);
$_SESSION["articleID"] = $_POST["id"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Modifica Articolo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php include '_components/_css.php' ?>
</head>

<body>

<?php include '_components/_header.php' ?>

<main id="main">
    <div class="container">
        <!-- CONTENT GOES HERE  -->
        <form action="actions/articleModify.php" method="post">
            
            <h4 class="center-align" style="margin-bottom: 1em; -webkit-margin-after: 1em">Article Modification</h4>

            <div class="row input-field">
                <input type="text" placeholder="Article name" name="title" value="<?php echo $article->titolo?>">
            </div>

            <div class="row input-field">
                <input type="text" placeholder="Article author" name="autore" value="<?php echo $db->getAuthorInfos($article->autore)?>">
            </div>

            <div class="row input-field">
                <input type="text" placeholder="Article summary" name="summary" value="<?php echo $article->summary?>">
            </div>

            <div class="row input-field">
                <select name="img">
                    <?php
                    $dir = $_SERVER['DOCUMENT_ROOT'] . "/img";
                    $items = array_diff(scandir($dir), array('..', '.'));

                    foreach ($items as $item) {
                        echo $item;
                        echo "<option value=\"$item\">$item</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="row input-field">
                <div class="col s6">
                    <textarea id="textarea" name="content" placeholder="Article content" class="materialize-textarea"><?php echo $article->contenuto?></textarea>
                </div>
                <div class="col s6">
                    Article Preview
                    <hr>
                    <div id="text-area-output">

                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 5em; -webkit-margin-before: 5em;">
                <div class="col s3">
                    <a class="btn waves-effect red" style="width: 100%;" onclick="addTag('b')"><b>BOLD</b></a>
                </div>
                <div class="col s3">
                    <a class="btn waves-effect red" style="width: 100%;" onclick="addTag('i')"><i>ITALIC</i></a>
                </div>
                <div class="col s3">
                    <a class="btn waves-effect red" style="width: 100%;" onclick="addTag('u')"><u>UNDERLINE</u></a>
                </div>
                <div class="col s3">
                    <a class="btn waves-effect red" style="width: 100%;" onclick="addTag('code')"><code>CODE</code></a>
                </div>
            </div>

            <div class="row input-field">
                <button class="btn waves-effect green" style="width: 100%" type="submit">Submit</button>
            </div>
        </form>
    </div>
</main>

<?php include '_components/_footer.php' ?>

<?php include '_components/_javascript.php' ?>

<script>
    var textareaO = document.getElementById("text-area-output");
    var textareaI = document.getElementById("textarea");

    textareaI.addEventListener("keydown", function (event) {
        if (event.keyCode == 13) {
            event.preventDefault();
            textareaI.value += "<br>\n";
        }
        if (event.ctrlKey && (event.altKey || event.shiftKey) && event.code === "KeyB") {
            event.preventDefault();
            addTag('b');
        }
        if (event.ctrlKey && (event.altKey || event.shiftKey) && event.code === "KeyI") {
            event.preventDefault();
            addTag('i');
        }
        if (event.ctrlKey && (event.altKey || event.shiftKey) && event.code === "KeyU") {
            event.preventDefault();
            addTag('u');
        }
    });

    function changeTextboxOutput() {
        textareaO.innerHTML = textareaI.value;
    }

    function addTag(tag) {
        var lenght = "</" + tag + ">";
        textareaI.value += "<" + tag + ">" + "</" + tag + ">";
        textareaI.focus();
        textareaI.selectionEnd = textareaI.value.length - lenght.length;
    }

    var timer = window.setInterval(changeTextboxOutput, 500);

</script>

</body>
</html>
        