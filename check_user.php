<?php
function check_user()
{
    include "post.php";
    $post = Post::getInstance();
    $login = $post->login;
    $password = $post->password;

    if (!(isset($login) and isset($password)))
    {
        exit ("Not all field filed");
    }

    include("data_base.php");
    if (!check($login, $password)){
        exit ("Wrong login or password");
    }
    echo "<a href=\"index.php\">Main</a>";
}

function check($login, $password): bool
{
    return false;
}

check_user();