<?php
/*
 * Programme : Rent A Snow (index)
 * Auteur : Thomas Grossmann
 * Date : 21.01.2020
 */

session_start();
require "controler/controler.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

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
        connect($username, $password);
        break;
    case 'details' :
        details();
        break;
    case 'login' :
        login();
        break;
    default :
        home();
        break;
}
?>