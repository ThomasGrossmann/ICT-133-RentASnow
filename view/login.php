<?php
/*
 * Programme : Rent A Snow (login)
 * Auteur : Thomas Grossmann
 * Date : 21.01.2020
 */

ob_start();
$title = "RentASnow - Login";
?>

<!-- ________ LOGIN _____________-->
<form class="form-group" method="post" action="index.php?action=connect">
    <label>Username</label><br><input type="text" name="name" required><br>
    <label>Password</label><br><input type="password" name="pwd" required><br><br>
    <button class="btn-primary" type="submit" name="submit">Se connecter</button>
</form>

<script src="assets/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script src="assets/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="assets/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/homeview.js" type="text/javascript"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>