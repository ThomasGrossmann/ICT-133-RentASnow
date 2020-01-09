<?php
require "controler/controler.php";

switch ($action)
{
    case 'home':
        home();
        break;
    case 'snows':
        snows();
        break;
}


?>
