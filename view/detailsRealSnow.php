<?php
/*
 * Programme : Rent A Snow (details)
 * Auteur : Thomas Grossmann
 * Date : 21.01.2020
 */

ob_start();
$title = "RentASnow - Détail";
require_once 'helpers/helpers.php';
?>
<!-- ________ DETAILS _____________-->
<h1>Voici quelques détails en plus.</h1>
<div class="text-center">
    <img src="view/images/big/<?= $snow['photo'] ?>" class="imagedetail">
    <h2><?= $snow['brand'] . " " . $snow['model'] ?></h2>
</div>
<div>
    <table class="table table-bordered">
            <tr><th>Code</th><td><?= $snow['code'] ?></td></tr>
            <tr><th>Taille</th><td><?= $snow['length'] ?></td></tr>
            <tr><th>État</th><td><?= getTextState($snow['state']) ?></td></tr>
            <tr><th>Disponible</th><td><?= getTextAvailable($snow['available']) ?></td></tr>
    </table>
    <a href="?action=editDetailsSnow&snowid=<?= $snowid ?>" class="btn btn-primary">Modifier</a>
    <?php if ($snow['available'] == 1) { ?>
        <a href="?action=putInCart&snowid=<?= $snowid ?>" class="btn btn-success">Mettre dans le panier</a>
    <?php } ?>
</div>

<script src="assets/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script src="assets/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="assets/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/homeview.js" type="text/javascript"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
