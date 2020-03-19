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
    $news = getAuthorNews();
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
function details($snowid)
{
    $detail = getSnow($snowid);
    require_once 'view/details.php';
}

//Fonction permettant de se connecter au site, de l'enregistrer dans la session et de revenir à la page home
function connect($username, $password)
{
    $User = getUser($username, $password);
    if ($User['password'] == $password && $User['username'] == $username) {     //if (password_verify($password, $User['password']))
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        home();
    } else {
        login();
    }
}

//Fonction permettant d'afficher la page login
function login()
{
    require_once 'view/login.php';
}

function newAccount()
{
    require_once 'view/inscription.php';
}

function inscription($newusername, $newpassword, $employe)
{
    //$hash = password_hash($newpassword, PASSWORD_DEFAULT);        //Tentative de hash du password
    if ($employe == "on") {
        $employe = true;
    } else {
        $employe = false;
    }
    NewUser($newusername, $newpassword, $employe);
    login();
}

//Fonction permettant de supprimer la session actuelle et d'afficher la page home
function deconnexion()
{
    unset($_SESSION['username']);
    unset($_SESSION['password']);
    unset($_SESSION['employe']);
    home();
}

?>
