<?php
/*
 * Programme : Rent A Snow (snowboards)
 * Auteur : Thomas Grossmann
 * Date : 16.01.2020
 */

ob_start();
$title = "RentASnow - Snowboards";
?>

<!-- ________ SNOWBOARDS_____________-->
<div class="span12">
    <h1>Nos snowboards</h1>
    <table class="table table-bordered">
    <?php
        echo "<h3>Nous proposons actuellement ".count($snows) . " snowboards</h3>";
        echo "<thead><tr><th>Marque</th><th>Modèle</th><th>Disponible ?</th><th>(Cliquer sur l'image pour plus de détails)</th></tr></thead><tbody>";
        foreach ($snows as $snow)
        {
            echo "<tr><td>". $snow['marque'] . "</td><td>" . $snow['modele'] . "</td><td>" . $snow['disponible'] ."</td><td><a href='index.php?action=details&detail=".$snow['id']."'><img src='view/Images/".$snow['smallimage']."'</a></td>";
        }
    ?>
        </tbody>
    </table>
</div>


<script src="assets/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script src="assets/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="assets/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/homeview.js" type="text/javascript"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>