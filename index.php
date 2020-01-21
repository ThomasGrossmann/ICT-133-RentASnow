<?php
/*
 * Programme : Rent A Snow (index)
 * Auteur : Thomas Grossmann
 * Date : 16.01.2020
 */

session_start();
require "controler/controler.php";

if (isset($_GET['action'])) {
    $action = $_GET['action'];
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
        connect();
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