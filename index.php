<?php
/*
 * Programme : Rent A Snow (index)
 * Auteur : Thomas Grossmann
 * Date : 16.01.2020
 */

session_start();
require "controler/controler.php";
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$action = $_GET['action'];

switch ($action)
{
    case 'snows' :
        snows();
        break;
    case 'achat' :
        achat();
        break;
    case 'details' :
        details();
        break;
    case 'login' :
        login();
        break;
    case "trylogin":
        trylogin($username, $password);
        break;
    default :
        home();
        break;
}

?>
