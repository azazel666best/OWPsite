<?php

function add_user()
{
    include "post.php";
    $post = Post::getInstance();
    $login = $post->login;
    $password = $post->password;
    $confirm = $post->confirm;


    if (!(isset($login) and isset($password) and isset($confirm)))
    {
        exit ("Not all field filed");
    }
    if ($confirm != $password) {
        exit ("Passwords doesn't equal");
    }

    include("data_base.php");
    if (is_in_database($login)){
        exit("User already regestrated");
    }
    $users[] = array(
        'login' => $login,
        'password' => $password
    );
    echo "<a href=\"autorisation.php\">Autorisation</a>";
}
function is_in_database($login): bool
{
    return false;
}

add_user();