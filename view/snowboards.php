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
            <h3>Nous proposons actuellement <?= count($snows) ?> snowboards</h3>
            <thead>
            <tr>
                <th width="20%" >Marque</th>
                <th width="20%" >Modèle</th>
                <th width="60%" >(Cliquer sur l'image pour plus de détails)</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($snows as $snow)       //Boucle qui affiche la liste de snowboards
            {
                ?>
                <tr>
                    <td><?= $snow['brand'] ?></td>
                    <td><?= $snow['model'] ?></td>
                    <td>
                        <form method="post" action="index.php?action=details">
                            <input type="hidden" name="id" value="<?= $snow['id'] ?>">
                            <input type="image" src="view/images/<?= $snow['photo'] ?>" alt="Submit" width="30%" height="40%">
                        </form>
                    </td>
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