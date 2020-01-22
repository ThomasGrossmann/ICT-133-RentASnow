<?php
/*
 * Programme : Rent A Snow (controler)
 * Auteur : Thomas Grossmann
 * Date : 21.01.2020
 */

require_once 'model/model.php';

// This file contains nothing but functions

//Fonction permettant de récupérer les news et d'afficher la page home
function home()
{
    $news = getNews();
    require_once 'view/home.php';
}

//Fonction permettant de récupérer la liste de snowboards et d'afficher la page snowboards
function snows()
{
    $snows = getSnows();
    require_once 'view/snowboards.php';
}

//Fonction permettant de récupérer la liste de snowboards et d'afficher la page achat
function achat()
{
    $achat = getSnows();
    require_once 'view/achat.php';
}

//Fonction permettant de récupérer la liste de snowboards et d'afficher la page details
function details()
{
    $details = getSnows();
    require_once 'view/details.php';
}

//Fonction permettant de se connecter au site (pour le moment avec un seul utilisateur) de l'enregistrer dans la session et de revenir à la page home
function connect($username, $password)
{
    if ($username == 'Thomas' && $password == '1234567') {
        $_SESSION['username'] = $username;
    } else {
        require_once 'view/login.php';
    }
    home();
}

//Fonction permettant d'afficher la page login
function login()
{
    require_once 'view/login.php';
}

//Fonction permettant de supprimer la session actuelle et d'afficher la page home
function deconnexion()
{
    unset($_SESSION['username']);
    unset($_SESSION['pwd']);
    home();
}
?>
