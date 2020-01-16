<?php
/*
 * Programme : Rent A Snow (details)
 * Auteur : Thomas Grossmann
 * Date : 16.01.2020
 */

ob_start();
$title = "RentASnow - Détail";
?>

<!-- ________ DETAILS _____________-->
<div class="span12">
    <h1>Voici quelques détails en plus.</h1>
    <?php foreach ($snows as $snow) { ?>
        <div class="row ml-5"><b>Marque :</b><?= $snow['marque']?></div>
        <div class="row ml-5"><b>Modèle :</b><?= $snow['modele']?></div>
        <div class="row ml-5"><b>Disponibilité :</b><?= $snow['disponible']?></div>
        <div class="row ml-5"><?= $snow['smallimage']?></div>
    <?php } ?>
    <a href="index.php?action=achat&<?= $snow['id']?>" class="btn btn-primary">Acheter</a>
</div>


<script src="assets/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script src="assets/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="assets/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/homeview.js" type="text/javascript"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
