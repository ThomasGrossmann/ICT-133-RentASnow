<?php
/*
 * Programme : Rent A Snow (details)
 * Auteur : Thomas Grossmann
 * Date : 09.04.2020
 */

ob_start();
$title = "RentASnow - Edit Détail";
require_once 'helpers/helpers.php';
?>
<!-- ________ DETAILS _____________-->
<h1>Voici quelques détails en plus</h1>
<div class="text-center">
    <img src="view/images/big/<?= $snow['photo'] ?>" class="imagedetail">
    <h2><?= $snow['brand'] . " " . $snow['model'] ?></h2>
</div>
<form method="post" class="form form-group" action="?action=saveSnowDetails">
    <table class="table table-bordered">
        <tr>
            <th>Code</th>
            <td><input type="text" name="code" value="<?= $snow['code'] ?>"></td>
        </tr>
        <tr>
            <th>Taille</th>
            <td><input type="number" name="length" value="<?= $snow['length'] ?>"></td>
        </tr>
        <tr>
            <th>État</th>
            <td>
                <select name="state">
                    <?php for ($i = 1; $i <= 4; $i++) { ?>
                        <option value="<?= $i ?>" <?= ($snow['state'] == $i) ? "selected" : ""?>><?= getTextState($i) ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <th>Disponible</th>
            <td><input type="checkbox" name="available" <?= ($snow['available'] == 1) ? 'checked' : ''?>></td>
        </tr>
    </table>
    <input type="hidden" name="snowid" value="<?= $snowid ?>">
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>


<script src="assets/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script src="assets/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="assets/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/homeview.js" type="text/javascript"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
