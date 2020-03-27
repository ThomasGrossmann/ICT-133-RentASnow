<?php
/*
 * Programme : Rent A Snow (controler)
 * Auteur : Thomas Grossmann
 * Date : 21.01.2020
 */

require_once 'model/model.php';

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
function connect($email, $password)
{
    $User = getUserByEmail($email);
    if (password_verify($password, $User['password'])) {
        $_SESSION['user'] = $User;
        $_SESSION['flashmessage'] = 'Bienvenue '.$User['firstname'].' !';
        home();
    } else {
        unset($_SESSION['user']);
        $_SESSION['flashmessage'] = 'Login incorrect :(';
        login();
    }
}

//Fonction permettant d'afficher la page login
function login()
{
    require_once 'view/login.php';
}

//Fonction permettant d'afficher la page d'inscription
function newAccount()
{
    require_once 'view/inscription.php';
}

//Fonction permettant d'inscrire un nouvel utilisateur
function inscription($newemail, $newpassword, $newfirstname, $newlastname, $newphone, $employe)
{

}

//Fonction permettant de supprimer la session actuelle et d'afficher la page home
function deconnexion()
{
    unset($_SESSION['user']);
    home();
}

?>
