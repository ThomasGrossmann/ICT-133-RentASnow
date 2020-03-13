<?php
/*
 * Programme : Rent A Snow (home)
 * Auteur : Thomas Grossmann
 * Date : 16.01.2020
 */

ob_start();
$title = "RentASnow - Accueil";
?>

<!-- ________ NEWS _____________-->
<div class="span12">
    <h1>Les news</h1>
    <?php foreach ($news as $onepieceofnews) { ?>
        <div class="row mt-4">
            <div class="col-2"><?= date('d.M.Y', strtotime($onepieceofnews['date'])) ?></div>
            <h3 class="col-4"><?= $onepieceofnews['title'] ?></h3>
            <h4 class="col-4">Auteur : <?=$onepieceofnews['firstname']. " " .$onepieceofnews['lastname']?></h4>
        </div>
        <div class="row ml-5"><?= $onepieceofnews['text'] ?></div>
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
