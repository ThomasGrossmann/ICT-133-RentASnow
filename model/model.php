<?php

function getNews()
{
    return json_decode(file_get_contents("model/dataStorage/news.json"),true);
}

function getSnows()
{
    return json_decode(file_get_contents("model/dataStorage/snows.json"), true);
}

function getAchat()
{
    return json_decode(file_get_contents("model/dataStorage/snows.json"), true);
}

function getDetails()
{
    return json_decode(file_get_contents("model/dataStorage/snows.json"), true);
}
?>
