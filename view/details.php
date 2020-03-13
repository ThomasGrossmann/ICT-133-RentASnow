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
            <th>Disponible ?</th>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($details as $detail)     //Boucle qui affiche les détails du snowboard voulu depuis la liste
        {
            if ($detail['id'] == $_POST['id'])//Si l'id du snowboard est égal à l'id envoyé à la Query String alors on crée le tableau et affiche les détails
        {?>
        <tr>
            <td><?= $detail['available'] ?></td>
            <td><?= $detail['brand'] ?></td>
            <td><?= $detail['model'] ?></td>
            <td><?= $detail['description'] ?></td>
            <img src="view/images/<?= $detail['photo'] ?>">
        </tr>
        </tbody>
    </table>
    <?php
    }
    }
    ?>
    <a href="index.php?action=achat&majlocation=<?= $_POST['id']?>" class="btn btn-primary">Louer</a>
</div>

<script src="assets/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script src="assets/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="assets/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/homeview.js" type="text/javascript"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
