<?php
/*
 * Programme : Rent A Snow (achat)
 * Auteur : Thomas Grossmann
 * Date : 21.01.2020
 */

ob_start();
$title = "RentASnow - Location";
?>

<!-- ________ LOCATION _____________-->
<div class="span12">
    <h1>Excellent choix !</h1>
    <a href="index.php?action=home" class="btn btn-primary">Retourner à l'accueil</a>
</div>

<script src="assets/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script src="assets/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="assets/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/homeview.js" type="text/javascript"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
