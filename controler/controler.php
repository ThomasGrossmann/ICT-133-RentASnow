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

function  details()
{
    $details = getSnows();
    $displaySnow = $_GET['detail'];
    require_once 'view/details.php';
}

function connect()
{
    if (isset($_POST['submit'])) {
        $username = $_POST['name'];
        $password = $_POST['pwd'];
    }
    if ($username == 'Thomas' && $password == '1234567') {
        $_SESSION['username'] = $username;
    } else {
        require_once 'view/login.php';
    }
    home();
}

function login()
{
    require_once 'view/login.php';
}

function deconnexion()
{
    unset($_SESSION['username']);
    unset($_SESSION['pwd']);
    home();
}
?>
