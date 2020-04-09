<?php

function getFlashMessage()
{
    if (isset($_SESSION['flashmessage'])) {
        $message = $_SESSION['flashmessage'];
        unset($_SESSION['flashmessage']);
        return '<div class="alert alert-info">' . $message . '</div>';
    } else {
        return null;
    }
}

function getTextState($state)
{
    switch ($state) {
        case 1:
            return 'Neuf';
            break;
        case 2:
            return 'Usagé';
            break;
        case 3:
            return 'Vieux';
            break;
        case 4:
            return 'Mort';
            break;
        default:
            return '???';
    }
}

function getTextAvailable($available)
{
    switch ($available) {
        case 0:
            return 'Non';
            break;
        case 1:
            return 'Oui';
            break;
        default:
            return '???';
    }
}

function cartButton()
{
    if (!isset($_SESSION['panier'])) {
        return "<a disabled>Panier</a>";
    } else {
        return "<a href='?action=viewCart'>Panier</a>";
    }
}
?>
