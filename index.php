<?php



function cmp($a, $b)
{
    if ($a["post_date"] == $b["post_date"]) {
        return 0;
    }
    return (strtotime($a["post_date"]) < strtotime($b["post_date"])) ? -1 : 1;
}
include 'data_base.php';
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

    <div class="log-in"><a href="autorisation.php"><img src="imag/user.png"></a></div>
</header>
<main>
    <?php
    foreach ($articles as $key => $article) {
        $id = $key;
        $img = $article['img'];
        $title = $article['title'];
        $post_date = $article['post_date']->format('Y-m-d H:i');
        echo "<a href=\"article_page.php?id=$id\">";
        echo "<div class='article-previve-container'>";
        if ($img != 0) {
            echo "<div class='article-previve'>";
            echo "<img src=\"imag/$img.png\">";
        }else{
            echo "<div class='article-previve previve-without-image'>";
        }
        echo "<div class=\"previev-text-container\">";
        echo "<h2>$title</h2>";
        echo "<p class=\"article-post-date\">$post_date</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</a>";

    }
    ?>
</main>
</body>
