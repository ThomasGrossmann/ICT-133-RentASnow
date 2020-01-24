<?php
/*
 * Programme : Rent A Snow (achat)
 * Auteur : Thomas Grossmann
 * Date : 21.01.2020
 */

ob_start();
$title = "RentASnow - Inscription";
?>
<!-- ________ INSCRIPTION _____________-->
<div class="span12">
    <h1>Création du compte</h1>
    <form class="form-group" method="post" action="index.php?action=inscription">
        <label>Nom d'utilisateur</label>
        <input type="text" class="form-group form-control" name="newusername" required>
        <label>Mot de passe</label>
        <input type="password" class="form-group form-control" name="newpassword" required>
        <label>Employé dans l'entreprise ?</label>
        <input type="checkbox" name="employe"><br>
        <button type="submit" class="btn btn-primary">Créer son compte</button>
    </form>
</div>

<script src="assets/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script>
<script src="assets/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="assets/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/homeview.js" type="text/javascript"></script>

<?php
$content = ob_get_clean();
require "gabarit.php";
?><?php
/*
 * Programme : Exo Php
 * Auteur : Thomas Grossmann
 * Date : 23.01.2020
 */
?>