<?php
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
    $achat = getAchat();
    require_once 'view/achat.php';
}

function details()
{
    $details = getDetails();
    require_once 'view/details.php';
}
?>
