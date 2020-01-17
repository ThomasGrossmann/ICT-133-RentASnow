<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-grid.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-reboot.css" rel="stylesheet">

    <!-- Icons -->
    <link href="assets/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="assets/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">

    <link href="assets/carousel/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/camera/css/camera.css" rel="stylesheet" type="text/css"/>

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="css/subtlepatterns/custom.css" rel="stylesheet" type="text/css"/>

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
        <div class="row-fluid">
            <div class="row">
                <div id="divLogo" class="pull-left">
                    <a href="index.php?action=home" id="divSiteTitle">Rent A Snow</a><br/>
                    <a href="index.php?action=snows" id="divTagLine">La glisse à moindre coût</a><br>
                </div>
            </div>
            <div class="row">
                <div class="navbar">
                    <ul class="nav nav-pills">
                        <!-- On commence par afficher les boutons qui s'afficheront, peu importe les événements-->
                        <li><a href="index.php?action=home">Home</a></li>
                        <li><a href="index.php?action=snows">Snows</a></li>
                        <?php
                        if (isset($_SESSION['username']))
                        {
                            echo "Connecté en tant que ".$_SESSION['username'];
                            echo "<br><li><a href='index.php?action=home'>Se déconnecter</a></li>";
                        } else
                        {
                            echo "<li><a href='index.php?action=login'>Se connecter</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <!-- ________ SLIDER_____________-->
        <div class="row-fluid">
            <div class="camera_full_width">
                <div id="camera_wrap">
                    <div data-src="view/images/slider/5.jpg">
                        <div class="camera_caption fadeFromBottom cap1">Les derniers modèles toujours à disposition.</div>
                    </div>
                    <div data-src="view/images/slider/1.jpg">
                        <div class="camera_caption fadeFromBottom cap2">Découvrez des paysages fabuleux avec des sensations.</div>
                    </div>
                    <div data-src="view/images/slider/2.jpg"></div>
                </div>
                <br style="clear:both"/>
            </div>
        </div>

        <div class="contentArea">
            <div class="divPanel notop page-content">
                <div class="row-fluid">
                    <div class="span12" id="divMain">
                        <?= $content; ?>
                    </div>
                </div>
                <div id="footerInnerSeparator"></div>
            </div>
        </div>

        <div id="footerOuterSeparator"></div>

        <div id="divFooter" class="footerArea">
            <div class="divPanel">
                <div class="row">
                    <div class="col-4" id="footerArea1">
                        <h3>Notre magasin</h3>
                        <p>Nous sommes une équipe de jeunes snowboardeurs qui souhaitons faire découvrir cette discipline à tous les publics.</p>
                        <p>
                            <a href="#" title="Terms of Use">Terms of Use</a><br/>
                            <a href="#" title="Privacy Policy">Privacy Policy</a><br/>
                            <a href="#" title="FAQ">FAQ</a><br/>
                            <a href="#" title="Sitemap">Sitemap</a>
                        </p>
                    </div>

                    <div class="col-4" id="footerArea3">
                        <h3>Horaires de location</h3>
                        <p>Les locations peuvent s'effectuer tous les jours de la semaine en haute saison de 07h à 19h et en basse saison, les jours ouvrables de 8h à 18h.<br>
                            Vous pouvez aussi passer par le site. Pour le retrait et le dépot, vous devrez passer au guichet automatique à l'arrière du magasin</p>
                    </div>

                    <div class="col-4" id="footerArea4">
                        <h3>Contacts</h3>

                        <ul id="contact-info">
                            <li>
                                <i class="general foundicon-phone icon"></i>
                                <span class="field">Téléphone :</span>
                                <br/>
                                +41 27 890 12 34
                            </li>
                            <li>
                                <i class="general foundicon-mail icon"></i>
                                <span class="field">Email :</span>
                                <br/>
                                <a href="mailto:info@rentasnow.com" title="Email">info@rentasnow.com</a>
                            </li>
                            <li>
                                <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                                <span class="field">Addresse :</span>
                                <br/>
                                12 Rue de la Glisse<br/>
                                2704 Sautons, Valais<br/>
                                Suisse
                            </li>
                        </ul>
                    </div>

                </div>
                <br/><br/>

                <div class="row text-center">
                    <div class="copyright">Copyright © 2019 Rent A Snow. All Rights Reserved.</div>
                </div>
                <div class="row text-center">
                    <div class="social_bookmarks">
                        <a href="#"><i class="social foundicon-facebook"></i> Facebook</a>
                        <a href=""><i class="social foundicon-twitter"></i> Twitter</a>
                        <a href="#"><i class="social foundicon-pinterest"></i> Pinterest</a>
                        <a href="#"><i class="social foundicon-rss"></i> Rss</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/><br/><br/>

</body>
</html>