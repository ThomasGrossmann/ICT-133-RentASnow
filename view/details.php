<?php
/*
 * Programme : Rent A Snow (details)
 * Auteur : Thomas Grossmann
 * Date : 21.01.2020
 */

ob_start();
$title = "RentASnow - Détail";
?>
<!-- ________ DETAILS _____________-->
<div class="span12">
    <h1>Voici quelques détails en plus.</h1>
    <table class='table table-bordered'>
        <thead>
        <tr>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?= $detail['brand'] ?></td>
            <td><?= $detail['model'] ?></td>
            <td><?= $detail['description'] ?></td>
        </tr>
        </tbody>
    </table>
    <div>
        <div>
            <img src="view/images/<?= $detail['photo'] ?>" class="imagedetail">
        </div>
        <div>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Snow différent</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="assets/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script src="assets/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="assets/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/homeview.js" type="text/javascript"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
