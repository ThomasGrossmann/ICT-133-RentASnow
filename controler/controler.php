<?php
/*
 * Programme : Rent A Snow (controler)
 * Auteur : Thomas Grossmann
 * Date : 16.01.2020
 */

require_once 'model/model.php';

// This file contains nothing but functions

function home()
{
    $news = getNews();
    require_once 'view/home.php';
}

function snows()
{
    $snows = getSnows();
    require_once 'view/snowboards.php';
}

function achat()
{
    $achat = getSnows();
    require_once 'view/achat.php';
}

function details()
{
    $details = getSnows();
    require_once 'view/details.php';
}

function login()
{
    $users = getUsers();
    require_once 'view/login.php';
}

function trylogin($username, $password)
{
    $listUsers = getUsers();
    foreach ($listUsers as $userinrun) {    //scanner toutes les personnes inscrites.
        if ($username == $userinrun['username'] && $password == $userinrun['password']) {
            $_SESSION['username'] = $username;
        }
    }

    require_once "view/home.php";
}
?>
