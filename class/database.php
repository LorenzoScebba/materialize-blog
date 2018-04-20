<?php
/**
 * Created by PhpStorm.
 * User: lorenzo
 * Date: 16/04/18
 * Time: 17.29
 */

include 'ArticleClass.php';
ini_set('display_errors', 1);

class database
{
    private $config;
    private $connection;

    /**
     * database constructor.
     */
    public function __construct()
    {
        $this->config = parse_ini_file($_SERVER['DOCUMENT_ROOT'] . "/../private/config.ini");
        $this->connection = mysqli_connect("", $this->config["username"], $this->config["password"], $this->config["dbname"]);
        $this->isConnectionOpen();
    }

    public function isConnectionOpen()
    {
        if (!$this->connection) {
            $this->connection = mysqli_connect($this->config["servername"], $this->config["username"], $this->config["password"], $this->config["dbname"]);
        }
        if (!$this->connection) {
            echo "error connecting to database";
            return false;
        } else {
            return true;
        }
    }

    public function getArticles($MAX, $ASCORDESC)
    {
        $articles = array();

        $result = $this->connection->query("SELECT * FROM articles WHERE 1 ORDER BY date $ASCORDESC LIMIT $MAX");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $article = new article($row["id"], $row["title"], $row["content"], $row["summary"], $row["author"], $row["date"], $row["thumbnail"]);
                array_push($articles, $article);
            }
        }
        return $articles;
    }

    public function printArticlePreview($article)
    {
        echo "<div class=\"card horizontal\" style=\"margin-top: 1em;\">
             
            <div class=\"card-image\">
		<img src=\"$article->thumbnail\" style='height: 162px;'>
            </div>
            <div class=\"card-stacked\">
            <div class='card-title center-align'>$article->titolo</div>
                <div class=\"card-content center-align\">
                    $article->summary
                </div>
                <div class=\"card-action\">
                    <a href=\"article.php?id=$article->id\">Vai all'articolo</a>
                </div>
            </div>
        </div>";
    }

    public function printArticleDeletePreview($article)
    {
        echo "<div class=\"card horizontal\" style=\"margin-top: 1em;\">
             
            <div class=\"card-image\">
		<img src=\"$article->thumbnail\" style='height: 162px;'>
            </div>
            <div class=\"card-stacked\">
            <div class='card-title center-align'>$article->titolo</div>
                <div class=\"card-content center-align\">
                    $article->summary
                </div>
                <div class=\"card-action\">
                    <a href=\"actions/articleDelete.php?id=$article->id\">Cancella l'articolo</a>
                </div>
            </div>
        </div>";
    }

    public function userExist($username, $password)
    {
        //echo "SELECT * FROM authors WHERE nickname = '$username' AND password = '$password'";
        $result = $this->connection->query("SELECT * FROM authors WHERE nickname = '$username' AND password = '$password'");
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function nickameExist($username)
    {
        $result = $this->connection->query("SELECT * FROM authors WHERE nickname = '$username'");
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getArticle($id)
    {
        $result = $this->connection->query("SELECT * FROM articles where id = $id");
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return new article($row["id"], $row["title"], $row["content"], $row["summary"], $row["author"], $row["date"], $row["thumbnail"]);
        } else {
            return false;
        }
    }

    public function getAuthorInfos($id)
    {
        $result = $this->connection->query("SELECT * FROM authors where id = $id");
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row["name"] . " " . $row["surname"];
        } else {
            return "Failed to get author infos";
        }
    }

    public function getAuthorId($name, $surname)
    {
        $result = $this->connection->query("SELECT * FROM authors where name = '$name' && surname = '$surname'");
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row["id"];
        } else {
            return false;
        }
    }

    public function createArticle($author, $title, $content, $summary, $img)
    {
        $sql = "INSERT INTO articles(author, title, content, summary, date, thumbnail) VALUES ('$author','$title','$content','$summary',NOW(),'$img')";

        if ($this->connection->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteArticle($id)
    {
        if ($this->connection->query("DELETE FROM articles WHERE id = $id")) {
            return true;
        } else {
            return false;
        }
    }


}