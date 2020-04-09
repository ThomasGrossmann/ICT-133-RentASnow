<?php
/*
 * Programme : Rent A Snow (panier)
 * Auteur : Thomas Grossmann
 * Date : 09.04.2020
 */

ob_start();
$title = "RentASnow - Panier";
require_once 'helpers/helpers.php';
?>

<div class="row">
    <h1>Votre panier :</h1>
    <table class="table table-bordered">
        <tr>
            <th>Snowboard</th>
            <th>Code</th>
            <th>Taille</th>
        </tr>
        <?php foreach ($cartContent as $snow) { ?>
            <tr>
                <td><?= $snow['brand'] ?> <?= $snow['model'] ?></td>
                <td><?= $snow['code'] ?></td>
                <td><?= $snow['length'] ?></td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
