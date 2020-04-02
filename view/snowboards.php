<?php
/*
 * Programme : Rent A Snow (snowboards)
 * Auteur : Thomas Grossmann
 * Date : 21.01.2020
 */

ob_start();
$title = "RentASnow - Snowboards";
?>

    <!-- ________ SNOWBOARDS_____________-->
    <div class="span12">
        <h1>Nos snowboards</h1>
        <table class="table table-bordered">
            <thead>
            <th>Cliquer sur l'image pour plus de détails</th>
            </thead>
            <tbody>
            <?php
            foreach ($snows as $snow)       //Boucle qui affiche la liste de snowboards
            {
                ?>
                <tr>
                    <td><a href="index.php?action=details&id=<?= $snow['id'] ?>"><img src="view/images/small/<?= $snow['photo'] ?>"></a><br><h2><?= $snow['brand']." ".$snow['model']?></h2></td>
                </tr>
                <?php
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