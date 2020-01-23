<?php
/*
 * Programme : Rent A Snow (index)
 * Auteur : Thomas Grossmann
 * Date : 21.01.2020
 */

session_start();
require "controler/controler.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];  //Récupère l'action dans la Query string
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

//Switch pour afficher la page en fonction de l'action donnée dans la Query String
switch ($action)
{
    case 'snows' :
        snows();
        break;
    case 'achat' :
        achat();
        break;
    case 'deconnexion':
        deconnexion();
        break;
    case'connect':
        if (isset($username, $password))
        {
            connect($username, $password);      //Donne le username et le password en tant que paramètres de la fonction pour se connecter
        } else {
            home();
        }
        break;
    case 'details' :
        details();
        break;
    case 'login' :
        login();
        break;
    case 'inscription':
        inscription($username, $password);
        break;
    default :
        home();
        break;
}
?>