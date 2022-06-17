<?php
include "data_base.php";
$article = $articles[$_GET['id']];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LOGOTIP</title>
    <link rel="stylesheet" href="style/main.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <div class="logo"><a href="index.php"><strong>LOGOTIP</strong></a></div>
    <div class="search-field">
        <form class="search-form">
            <input type="text" name="search" placeholder="">
            <button type="submit"><img src="imag/search.png"></button>
        </form>
    </div>

    <div class="log-in"><a href="autorisation.html"><img src="imag/user.png"></a></div>
</header>
<main>
    <div class="content">
        <h1><?php echo $article['title'] ?></h1>
        <div class='img-container'>
            <div class='img'>
                <img src="imag/<?php echo $article['img'] ?>.png">
            </div>
        </div>
        <p><?php echo $article['text'] ?>
        </p>
    </div>
    <div class="comments">
        <div>
            <h1>Comments</h1>
            <hr>
        </div>
        <div class="comment add-comment">
            <form>
                <textarea name="add-commentent-text"></textarea>
                <button type="submit">Add</button>
            </form>
        </div>
        <?php
        include "data_base.php";
        foreach ($comments as $comment) {

            $nickname = $comment['nickname'];
            $text = $comment['text'];
            echo "
                <div class=\"comment\">
                    <div class=\"coment-text\">
                        <h2>$nickname</h2>
                        <p>$text</p>
                    </div>
                </div>
                ";
        }
        ?>
    </div>

</main>

</body>
</html>