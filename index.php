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

//Switch pour afficher la page en fonction de l'action donnée dans la Query String
switch ($action)
{
    case 'snows' :
        snows();
        break;
    case 'achat' :
        //MajLocation($id);     //Temtative de mise à jour de l'état de location
        achat();
        break;
    case 'deconnexion':
        deconnexion();
        break;
    case'connect' :
        $email = $_POST['email'];
        $password = $_POST['password'];
        connect($email, $password);      //Donne l'email et le password en tant que paramètres de la fonction pour se connecter
        break;
    case 'details' :
        $snowid = $_GET['id'];
        details($snowid);
        break;
    case 'login' :
        login();
        break;
    case 'newAccount' :
        newAccount();
        break;
    case 'inscription':
        $newemail = $_POST['newemail'];
        $newpassword = $_POST['newpassword'];
        $newfirstname = $_POST['newfirstname'];
        $newlastname = $_POST['newlastname'];
        $newphone = $_POST['newphone'];
        $employe = $_POST['employe'];
        inscription($newemail, $newpassword, $newfirstname, $newlastname, $newphone, $employe);
        break;
    default :
        home();
        break;
}
?>