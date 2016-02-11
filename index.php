<html lang="fr">
<head xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Presentation du restaurant dirigé par Gilles LE BOT">

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <!--Import materialize.css-->
    <link type="text/css"
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css"
          media="screen,projection"/>
    <!--Import style.css-->
    <link type="text/css"
          rel="stylesheet"
          href="./css/styles.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="./assets/img/logo.png" alt="logo">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Le Bot">
    <link rel="apple-touch-icon-precomposed" href="./assets/img/logo.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="./assets/img/logo.png" alt="logo">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="./assets/img/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
    <title>Restaurant Le Bot</title>
</head>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<header id="cover">
    <div class="parallax-container valign-wrapper">
        <div class="parallax">
            <img src="./assets/img/cover.jpg"
                 alt="Logo">

        </div>
        <div class="center-align" style="width:100%;">
            <img id="logo"
                 class="circle responsive-img"
                 src="./assets/img/logo.png"
                 alt="Logo">
        </div>
    </div>
</header>
<main>
    <div id="nav-container" class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a href="#esprit" class="active black-text">L'Esprit</a></li>
            <li class="tab col s3"><a href="#produits" class="black-text">Le Menu</a></li>
            <li class="tab col s3"><a href="#paris" class="black-text">Le Restaurant</a></li>
            <li class="tab col s3"><a href="#livraison" class="black-text">La Livraison</a></li>
        </ul>
    </div>
    <div id="esprit" class="col s12">
        <br>
        <div class="container">
            <h5>L'Esprit</h5>
            <hr>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card brown lighten-4">
                        <div class="card-content black-text">
                            <p class="black-text" style="font-size: large;">
                                Le Bot est un espace de restauration, une bulle oxygénée dans laquelle nous mangeons
                                simplement
                                frais. Les produits y sont frais et sélectionnés, de bonne qualité, prêts à consommer,
                                sur
                                place
                                ou à emporter. On peut y trouver des salades, des sandwiches, des plats cuisinés, des
                                fruits
                                frais et des cafés.
                                La plupart de nos produits sont maison et sont préparés dans nos cuisines.
                                Les restaurants sont modernes avec une décoration simple et relaxante et des couleurs
                                apaisantes.
                                Ils sont situés en centre ville, et sont de vrais commerces de quartier.
                                Allons à la cueillette d'herbes aromatiques le temps d'une pause déjeuner !
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="produits" class="col s12">
        <br>
        <div class="container">
            <h5>Le Menu</h5>
            <h6>Trouvez notre PDF ci-dessous</h6>
            <hr>
            <div class="row">
                <div class="col s12 m12 l12">

                    <object data="./assets/pdf/menu.pdf#zoom=100" type="application/pdf" width="100%" height="1100"
                            internalinstanceid="19" title="">
                        Il semblerai que votre navigateur n'arrive pas à lire le menu en pdf.<br>
                        Pas de soucis, il suffit de le télécharger ici :
                        <a href="./assets/pdf/menu.pdf">menu.pdf</a>
                    </object>
                </div>
            </div>
        </div>
        <div class="container gallerie">
            <h5>portfolio</h5>
            <h6>Des images de nos produits</h6>
            <hr>
            <div class="row">
                <?php
                $directory = "./assets/img/photos/produits/";
                foreach (new DirectoryIterator($directory) as $file) {
                    if ($file->isFile()) {
                        echo "<div class=\"col s4\"><img class=\"materialboxed  responsive-img\" src=$directory$file></div>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div id="paris" class="col s12">
        <br>
        <div class="container">
            <h5>Paris</h5>
            <h6>Restaurant Paris
                Montparnasse</h6>
            <hr>
            <div class="row">
                <div class="col s12 m6 l6">
                    <div class="card brown lighten-4">
                        <div class="card-content black-text">
                            <span class="card-title">Comment venir ?</span>
                            <p>
                                A 2 minutes du métro Montparnasse-Bienvenue
                                <img src="./assets/img/metro-4.png"/>
                                <img src="./assets/img/metro-6.png"/>
                                <img src="./assets/img/metro-12.png"/>
                                <img src="./assets/img/metro-13.png"/> Sortie 2, continuez tout droit.
                            </p>
                        </div>
                    </div>
                    <div class="card brown lighten-4">
                        <div class="card-content black-text">
                            <span class="card-title">Information</span>
                            <p>Le Bot vous offre la possibilité de commander vos petit-déjeuners d'affaires ou vos
                                plateaux
                                repas.
                                N'hésitez pas à nous contacter pour plus d'informations.</p>
                        </div>
                        <div class="card-action">

                            <button id="btnCommander" class=" waves-effect waves-light btn brown lighten-3"
                                    href="#livraison"><i
                                    class="mdi-action-shopping-basket left"></i>Commander
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card white ">
                        <div class="card-content">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.7510289800134!2d2.317839315846674!3d48.84388750968156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67033265db2f5%3A0xe31d24aad2079635!2sLe+Bot+Simplement+frais!5e0!3m2!1sfr!2sfr!4v1450753114164"
                                width="100%" height="380px" frameborder="0" style="border:0"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container gallerie">
            <h5>portfolio</h5>
            <h6>Des images du restaurant</h6>
            <hr>
            <div class="row">
                <?php
                $directory = "./assets/img/photos/batiments/";
                foreach (new DirectoryIterator($directory) as $file) {
                    if ($file->isFile()) {
                        echo "<div class=\"col s4\"><img class=\"materialboxed  responsive-img\" src=$directory$file></div>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div id="livraison" class="col s12">
        <br>
        <div class="container livraison">
            <h5>livraison</h5>
            <h6>Le Bot vous offre la possibilité de commander vos petit-déjeuners d'affaires ou vos plateaux
                repas.</h6>
            <hr>
            <div class="row">
                <div class="col s12 m6 l6">
                    <div class="row">
                        <form class="col s12">
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="first-last_name" type="text" class="validate" required="">
                                    <label for="first-last_name">Nom et Prénom</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">location_on</i>
                                    <textarea class="materialize-textarea" id="adresse" required=""></textarea>
                                    <label for="adresse">Adresse</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">phone</i>
                                    <input id="tel" type="tel" class="validate" required="">
                                    <label for="tel">Téléphone</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email" type="email" class="validate" required="">
                                    <label for="email">E-Mail</label>
                                </div>
                            </div>
                            <div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">mode_edit</i>
                                    <textarea class="materialize-textarea" id="commentaire" required=""></textarea>
                                    <label for="commentaire">Un Commentaire ?</label>
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light brown lighten-3" type="submit" name="action">
                                Submit
                                <i class="mdi-content-send right"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col s12 m6 l6 contact-holder">
                    <h6 class="mdi-action-home">Adresse</h6>
                    <p>14 Avenue du Maine, 75015 Paris</p>
                    <h6 class="mdi-content-inbox">Mail</h6>
                    <p>gilles.lebot@hotmail.fr</p>
                    <h6 class="mdi-hardware-phone-android">Numéro de téléphone</h6>
                    <p>+33 1 45 49 48 35</p>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-action-btn horizontal click-to-toggle" style=" height: 56px;top: 10px; right: 24px;">
        <a class="btn-floating btn-large grey">
            <i class="large material-icons">comment</i>
        </a>
        <ul>
            <li><a class="btn red" href="http://www.yelp.fr/biz/le-bot-paris" target="_blank"><i><img
                            src="http://yelp.govoluntr.com/yelp.png" width="55px"></i></a></li>
            <li><a class="btn green"
                   href="https://www.tripadvisor.fr/Restaurant_Review-g187147-d3681635-Reviews-Le_Bot-Paris_Ile_de_France.html"
                   target="_blank"><i><img
                            src="http://www.bluebirdbb.com/wp-content/uploads/2014/02/tripadvisor.png" width="40px"></i></a>
            </li>
        </ul>
    </div>
</main>
<footer class="page-footer grey darken-3">
    <div class="container" style="text-align: center;">
        <div class="row">

            <div class="col l12 s12">
                <h5 class="white-text">Connectez</h5>
                <div class="fb-like"
                     data-href="https://www.facebook.com/simplementfrais/"
                     data-layout="button"
                     data-action="like" data-show-faces="false" data-share="true">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright ">
        <div class="container">
            © 2015-2016 Axel LE BOT, All rights reserved.
        </div>
    </div>
</footer>
<!--Import jQuery before materialize.js-->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<script type="text/javascript" src="./js/script.js"></script>
</body>
</html>
