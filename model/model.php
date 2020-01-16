<?php
/*
 * Programme : Rent A Snow (model)
 * Auteur : Thomas Grossmann
 * Date : 16.01.2020
 */


function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}

function getSnows()
{
    return json_decode(file_get_contents("model/dataStorage/Snows.json"), true);
}

function getAchat()
{
    return json_decode(file_get_contents("model/dataStorage/Snows.json"), true);
}

function getDetails()
{
    return json_decode(file_get_contents("model/dataStorage/Snows.json"), true);
}

function getUsers()
{
    return json_decode(file_get_contents("model/dataStorage/Users.json"), true);
}
?>
