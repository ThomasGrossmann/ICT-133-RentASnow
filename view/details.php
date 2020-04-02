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
    <img src="view/images/big/<?= $snowtype['photo'] ?>" class="imagedetail">
    <h2><?= $snowtype['brand'] . " " . $snowtype['model'] ?></h2>
</div>
<div>
    <?php if (count($snows) > 0) { ?>
        <h4>Nous avons <?= count($snows) ?> snowboards de ce type</h4>
        <table class="table table-bordered">
            <tr>
                <th>Code</th>
                <th>Taille</th>
                <th>État</th>
                <th>Disponible</th>
            </tr>
            <?php foreach ($snows as $snow) { ?>
                <tr class="clickable" data-href="?action=detailsRealSnow&id=<?= $snow['id']?>">
                    <td><?= $snow['code'] ?></td>
                    <td><?= $snow['length'] ?></td>
                    <td><?= getTextState($snow['state']) ?></td>
                    <td><?= getTextAvailable($snow['available']) ?></td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { ?>
        <h4>Aucun snowboard de ce type</h4>
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
