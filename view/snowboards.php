<?php
ob_start();
$title = "RentASnow - Snowboards";
?>

<!-- ________ SNOWBOARDS_____________-->
<div class="span12">
    <h1>Nos snowboards</h1>
    <?php foreach ($snows as $snow) { ?>
        <div class="row mt-4">
            <div class="col-4"><b>Marque :</b><?= $snow['Marque']?></div>
        </div>
        <div class="row ml-5"><b>Modèle :</b><?= $snow['Modèle']?></div>
        <div class="row ml-5"><b>Prix :</b><?= $snow['Prix']?></div>
        <a href="index.php?action=achat&<?= $snow['Modèle']?>" class="btn btn-primary">Acheter</a>
        <a href="index.php?action=details&<?= $snow['Modèle']?>" class="btn btn-primary">Plus de détails ?</a>
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
