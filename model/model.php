<?php
/*
 * Programme : Rent A Snow (model)
 * Auteur : Thomas Grossmann
 * Date : 21.01.2020
 */

//Fonction permettant de récupérer les données des news depuis le fichier news.json
function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}

//Fonction permettant de récupérer les données des snowboards depuis le fichier snows.json
function getSnows()
{
    return json_decode(file_get_contents("model/dataStorage/snows.json"), true);
}

//Fonction permetttant de récupérer les données des users depuis le fichier Users.json
function getUsers()
{
    return json_decode(file_get_contents("model/dataStorage/Users.json"), true);
}

function getUser($username, $password)
{
    $listUsers = getUsers();
    foreach ($listUsers as $user) {
        if ($user['username'] == $username) {
            return $user;
        }
    }
}
?>
