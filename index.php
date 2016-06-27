<?php
    include'mail.php';
?>


<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Boussard Quentin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,900,300' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/89f2f44ba07ea3fff7e561c2142813b278c2d6c6/devicon.min.css">
        <link rel="stylesheet" href="stylesheets/main.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

        <script src="script/main.js"></script>
        <script src="script/folio.js"></script>
        <script src="script/anim.js"></script>

        <script src="https://maps.googleapis.com/maps/api/js"></script>

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

    </head>
    <body>

        <div class="container">
            <div class="headIn">
                <i class="fa fa-bars"></i>
            </div>
            <nav>
                <i class="fa fa-times"></i>
                <ul>
                    <li><a class="GoHOme">Accueil</a></li>
                    <li><a class="GoAbout">À-propos</a></li>
                    <li><a class="GoContact">Contact</a></li>
                    <li><a class="GoWork">Réalisation</a></li>
                </ul>
            </nav>
            <section id="contact" class='page1 padding-left'>
                <div class="orangeright"></div>
                <div class="content_page">

                    <div class="content_page">
                        <div class="ico"><img src="img/icones/icone-contact.jpg" alt="icone contact" /></div>
                        <div class="midsize borderRight">
                            <span class='font900 name '>Mes </span><span class='years font300'>coordonnées</span>
                            <div class="underCord"></div>

                            <table>
                                <tr>
                                    <td><img src="img/icones/icone-telephone.jpg" alt="" /></td><td>06 43 37 96 80</td>
                                </tr>
                                <tr>
                                    <td><img src="img/icones/icone-geolocalisation.jpg" alt="" /></td><td>Ivry sur seine</td>
                                </tr>
                                <tr>
                                    <td><img src="img/icones/icone-mail.jpg" alt="" /></td><td>quentin.bouss@gmail.com</td>
                                </tr>
                            </table>

                            <div class="dashed"></div>
                            <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21019.23499143044!2d2.369227543666437!3d48.81234551758737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e673b5023235ad%3A0x5dc8118d7cbf704f!2sIvry-sur-Seine%2C+France!5e0!3m2!1sfr!2sfr!4v1446646413576" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <div class="midsize midright">
                            <span class='font300 Forcont'>Pour me </span><span class='contac font900'>contacter ?</span>
                            <div class="underConta"></div>
                            <p class="txtform">
                                Remplissez le formulaire ci-dessous, rien de plus simple !
                            </p>
                            <div id="formulaire_mail">
            					<form method="POST" action="index.php#contact">
            						<?php
            						if (!empty($message_mail) ) {
            							echo "<p class='infomail'>".$message_mail."</p>";
            						}
            						?>
                                    <p>Votre adresse mail :</p>
        							<input type="text" value="<?php if (isset($erreur) && $erreur['mail'] == TRUE && !isset($_COOKIE['mail'])) {echo $_POST['mail'];} ?>" name="mail">
                                    <p>Votre nom :</p>
                                    <input type="text" value="<?php if (isset($erreur) && $erreur['nom'] == TRUE && !isset($_COOKIE['mail'])) {echo $_POST['nom'];} ?>" name="nom">
                                    <p>Votre sujet :</p>
                                    <input type="text" value="<?php if (isset($erreur) && $erreur['sujet'] == TRUE && !isset($_COOKIE['mail'])) {echo $_POST['sujet'];} ?>" name="sujet">
                                    <p>Votre message :</p>
            						<textarea name="message"><?php if (isset($erreur) && $erreur['message'] == TRUE && !isset($_COOKIE['mail'])) {echo $_POST['message'];} ?></textarea>
            						<input class="val_form font900" type="submit" value="Envoyer" name="go">

            					</form>
            				</div>

                        </div>
                        <div class="clear"></div>
                    </div>

                </div>
            </section>
            <section class='home'>
                <div class="social">
                    <a target="_blank" href="https://github.com/Gaviil"><i class="fa fa-github"></i></a>
                    <a target="_blank" href="http://codepen.io/Gaviil/"><i class="fa fa-codepen"></i></i></a>
                    <a target="_blank" href="http://stackoverflow.com/users/6289771/quentin-boussard"><i class="fa fa-stack-overflow"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/profile/view?id=AAIAAA220CUBmFj2zbHQj4BhhqNqPQBL05VkFFA&trk=nav_responsive_tab_profile"><i class="fa fa-linkedin"></i></a>
                    <a target="_blank" href="https://twitter.com/Gaviil_"><i class="fa fa-twitter"></i></a>
                </div>

                <div class="name" id='r2'>
                    <h1>Quentin </h1> <h1>Boussard</h1>
                    <div class="under"></div>
                    <p>&#60; Front-End développeur/ &#62;</p><br/>
                </div>
                <div class="contentKey">
                    <div class="keybordSign">
                        <img src="img/icones/icone-touche-clavier.jpg" alt="" />
                    </div>
                </div>
                <div id="r2d2" style="display:none"></div>
                <audio src="img/r2d2_scream.mp3" style="" id="Sound"></audio>
            </section>
            <section class='page2'>
                <div class="orangeleft"></div>
                <div class="content_page">
                    <div class="ico"><img src="img/icones/icone-a-propos.jpg" alt="icone a propos" /></div>
                    <div class="midsize borderRight">
                        <span class='font900 name'> Quentin Boussard </span><span class='years font300'>24 ans</span>
                        <div class="underName"></div>
                        <p class='descri font300'>
                            Expériences professionnelles:
                        </p><br/>
                        <a target="_blank" href="https://www.adnow.io/"><img class="pro" src="img/adnow.png" alt=""/></a>
                        <a target="_blank" href="https://www.sharepay.fr/"><img class="pro" src="img/sharepay.png" alt=""/></a>
                        <div class="informations">
                            <div class="inf">INFORMATIONS</div>
                            <table>
                                <tr>
                                    <td>Date de naissance</td><td class='repInfo'>08/08/1991</td>
                                </tr>
                                <tr>
                                    <td>Langues</td><td class='repInfo'>Francais / Anglais</td>
                                </tr>
                                <tr>
                                    <td>Activités</td><td class='repInfo'>Freelance</td>
                                </tr>
                                <tr>
                                    <td>Passions</td><td class='repInfo'>Hockey</td>
                                </tr>
                            </table>

                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="midsize midright">
                        <span class='font300 ceque'> Ce que je peux faire, </span><span class='forYou font900'>pour vous.</span>
                        <div class="underForYou"></div>
                        <div>
                            <p class="infoUse"></p>
                        </div>
                        <div class="use">
                            <i data-info="Html5" class="devicon-html5-plain"></i>
                            <i data-info="Sass" class="devicon-sass-original"></i>
                            <i data-info="Bootstrap" class="devicon-bootstrap-plain"></i>
                            <i data-info="Javascript" class="devicon-javascript-plain"></i>
                            <i data-info="Jquery" class="devicon-jquery-plain"></i>
                            <i data-info="Angular js" class="devicon-angularjs-plain"></i>
                            <i data-info="Git" class="devicon-git-plain"></i>
                            <i data-info="Grunt" class="devicon-grunt-plain"></i>
                            <i data-info="Ruby on Rails" class="devicon-rails-plain"></i>
                            <i data-info="Photoshop" class="devicon-photoshop-plain"></i>
                            <i data-info="Illustrator" class="devicon-illustrator-plain"></i>

                        </div>

                    </div>
                    <div class="clear"></div>
                    <div class="btn">
                        <a target="_blank" href="img/CV.pdf">Télécharger mon CV</a><a class="aboutToContact">Me contacter</a>
                    </div>
                </div>
            </section>
            <section></section>
            <section class='page3'>
                <div class="orangeTop"></div>
                <div class="content_page_folio">
                    <div class="ico"><img src="img/icones/icone-portfolio.jpg" alt="icone portfolio" /></div>

                    <div class="folio"><img id="coyotes" src="img/folio/coyotes.png" alt="" /></div>
                    <div class="folio"><img id="filer" src="img/folio/filer.png" alt="" /></div>
                    <div class="folio"><img id="tribu" src="img/folio/tribu.png" alt="" /></div>
                    <div class="folio"><img id="sharepay" src="img/folio/sharepay.png" alt="" /></div>
                    <div class="folio"><img id="Obvious" src="img/folio/Obvious.png" alt="" /></div>
                    <div class="folio"><img id="materialFolio" src="img/folio/material.png" alt="" /></div>
                    <div class="folio"><img id="meteor" src="img/folio/meteor.png" alt="" /></div>
                    <div class="folio"><img id="codepenFace" src="img/folio/codepen.png" alt="" /></div>

                    <div id="coyotes_full" class="full" style="display:none;">
                        <p class="title">
                            Les Coyotes
                        </p>
                        <span class="returnGallerie"><i class="fa fa-arrow-left"></i>retour a la galerie</span>

                        <a target="_blank" href="http://www.coyotes-gray.fr">
                        <img src="img/folio/full/coyotes.png" alt="" />
                        </a>
                        <p class="description">
                            Projet personnel pour un club sportif de roller Hockey.<br/>
                            Développement d'un blog et d'un gestionnaire de fichier en ligne pour des photos d'événement.

                        </p><a class="visiter" target="_blank" href="http://www.coyotes-gray.fr">Visiter</a>
                    </div>
                    <div id="filer_full" class="full" style="display:none;">
                        <p class="title">
                            Suricate File
                        </p>
                        <span class="returnGallerie"><i class="fa fa-arrow-left"></i>retour a la galerie</span>

                        <a target="_blank" href="http://www.coyotes-gray.fr/filer">
                        <img src="img/folio/full/filer.png" alt="" />
                        </a>
                        <p class="description">
                            Projet d'école sur la création d'un gestinnaire de fichier en ligne en PHP.<br/>
                            Upload, Download etc ...

                        </p><a class="visiter" target="_blank" href="http://www.coyotes-gray.fr/filer">Visiter</a>
                    </div>
                    <div id="tribu_full" class="full" style="display:none;">
                        <p class="title">
                            Tribugourmande
                        </p>
                        <span class="returnGallerie"><i class="fa fa-arrow-left"></i>retour a la galerie</span>

                        <a target="_blank" href="http://www.tribugourmande.com/demotg/">
                        <img src="img/folio/full/tribu.png" alt="" />
                        </a>
                        <p class="description">
                            Stage chez webedia sur l'intégration du site tribugourmande.com pour adapter le design au site de 750g.com

                        </p><a class="visiter" target="_blank" href="http://www.tribugourmande.com/demotg/">Visiter</a>
                    </div>
                    <div id="sharepay_full" class="full" style="display:none;">
                        <p class="title">
                            SharePay
                        </p>
                        <span class="returnGallerie"><i class="fa fa-arrow-left"></i>retour a la galerie</span>

                        <a target="_blank" href="https://www.sharepay.fr/">
                        <img src="img/folio/full/sharepay.png" alt="" />
                        </a>
                        <p class="description">
                            Stage chez Sharepay sur l'intégration de la landing page du produit et développement front-End de l'application web pour permettre aux utilisateurs de gérer leurs informations bancaire
                        </p><a class="visiter" target="_blank" href="https://www.sharepay.fr/">Visiter</a>
                    </div>
                    <div id="Obvious_full" class="full" style="display:none;">
                        <p class="title">
                            Obvious Gaming
                        </p>
                        <span class="returnGallerie"><i class="fa fa-arrow-left"></i>retour a la galerie</span>
                        <a target="_blank" href="http://obv1ous.fr/">
                        <img src="img/folio/full/Obv-3.jpg" alt="" />
                        </a>
                        <p class="description">
                            Projet personnel sur le développement et le design d'un blog en Ruby on rails, la gestion des membres et leurs stats, pour une communauté de jeux en ligne<br/>
                            (Développement en cours)
                        </p><a class="visiter" target="_blank" href="http://obv1ous.fr/">Visiter</a>
                    </div>
                    <div id="materialFolio_full" class="full" style="display:none;">
                        <p class="title">
                            Portfolio Material
                        </p>
                        <span class="returnGallerie"><i class="fa fa-arrow-left"></i>retour a la galerie</span>
                        <video class="materialVid" src="img/folio/full/folio-material.mp4" loop></video>
                        <p class="description">
                            Développement d'animation du type Material design pour un portfolio<br/>
                        </p><a class="visiter" target="_blank" href="http://christophe-kerebel.com/">Visiter</a>
                    </div>
                    <div id="meteor_full" class="full" style="display:none;">
                        <p class="title">
                            Meteor
                        </p>
                        <span class="returnGallerie"><i class="fa fa-arrow-left"></i>retour a la galerie</span>
                        <a>
                            <img src="img/folio/full/meteor.png" alt="" />
                        </a>
                        <p class="description">
                            Développement d'une application mobile avec le framework Ionic (Cordova et AngularJs) dans le but de lister ses séries favorites et sa liste d'épisodes à regarder<br/>
                        </p>

                    </div>
                    <div id="codepenFace_full" class="full" style="display:none;">
                        <p class="title">
                            Cursor position
                        </p>
                        <span class="returnGallerie"><i class="fa fa-arrow-left"></i>retour a la galerie</span>
                        <a>
                            <iframe height='480' scrolling='no' src='//codepen.io/Gaviil/embed/preview/LNEJbP/?height=480&theme-id=22236&default-tab=css,result&embed-version=2' frameborder='no' allowtransparency='true' allowfullscreen='true' style='width: 100%;'>See the Pen <a href='http://codepen.io/Gaviil/pen/LNEJbP/'>mouse position</a> by Quentin (<a href='http://codepen.io/Gaviil'>@Gaviil</a>) on <a href='http://codepen.io'>CodePen</a>.
                        </a>
                        <p class="description">
                            Codepen project
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <div class="small_screen">
            <img src="img/beBack.jpg" alt="beback" />
        </div>
    </body>
</html>
