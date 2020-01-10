<?php
session_start();
$_SESSION['username'] = 'TGN';
require "controler/controler.php";
$action = $_GET['action'];

switch ($action)
{
    case 'home' :
        home();
        break;
    case 'snows' :
        snows();
        break;
    case 'achat' :
        achat();
        break;
    case 'details' :
        details();
        break;
    default :
        home();
        break;
}

?>
