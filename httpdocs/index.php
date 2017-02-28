<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];
if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
header('Location: http://m.villa-visby.com');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Villa Visby</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="Style/app.css">
    <meta name="google-site-verification" content="X_ESojvQwu2cq5wYPn_tTceiaLWqIE12Bh_5Nt-bFe4" />
</head>

<body>
    <div id="ajaxBox"></div>
    <div id="content-1">
       
        <header>
            <!-- topBar -->
            <nav class="navbar">
                <a href="#" class="logo-nav"><img class="logo__nav" src="img/crown.png" alt=""></a>
                <button class="hamburger hamburger--slider header__icon" type="button">
                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                    </span>
                </button>
            </nav>
            <!-- topBar -->
        </header>
        
        <!-- menuHamburger -->
        <div class="menu">
            <nav>
                <ul class="menu__nav">
                    <li><a href="#villa">Accueil</a></li>
                    <li><a href="#expert">Notre expertise</a></li>
                    <li><a href="#product">Nos produits</a></li>
                    <li><a href="#delivery">Service de livraison</a></li>
                    <li><a href="#gal1">Galerie Photos</a></li>
                    <li><a href="#situa">Nous situer</a></li>
                    <li><a href="#contact">Contactez-nous</a></li>
                </ul>
            </nav>
        </div>
        <!-- menuHamburger -->

        <!-- bannièreAccueil+scroller -->
        <main class="full-screen" role="main">
            <div id="villa">
                <div class="row no-padding">
                    <div class="container-fluid">
                        <div id="banner__villa1">
                            <img class="banner__logo" src="img/logovisby.png" alt="" class="logo__banner">
                            <div class="col-md-12 intro">
                                <h3>500m2 D'EXPOSITION DE MEUBLES DESIGN</h3>
                            </div>
                        </div>
                        <p class="scroll__text">
                            SCROLLER POUR DÉCOUVRIR LE SITE</p>
                        <div class="flecheScroll2 col-md-12">

                            <p class="flecheScroll">❬</p>

                        </div>
                    </div>
                </div>
            </div>
            <div id="blurred-image-container">
                <div class="img-src"></div>
                <div class="img-src blurred-img"></div>
            </div>
        </main>
        <!-- bannièreAccueil+scroller -->

        <div id="pinContainer">
            <div id="slideContainer">

                <!-- Notre Expertise -->
                <div class="panel one" id="expert">
                    <h1 class="design__3">NOTRE EXPERTISE</h1>
                    <div class="row">
                        <div class="container">
                            <div class="col-md-4">
                                <span class="round__">
                                      <img  class="round__img" id="qualidad" src="img/qualidad.jpg" alt="qualidad">
                                  </span>
                                <p class="expert">
                                    <span class="title_expert">
                                          QUALITÉ<br>
                                      </span> Des produits de qualité sélectionnés pour nos clients pour une réelle durée dans le temps.
                                </p>

                            </div>
                            <div class="col-md-4">
                                <span class="round__">
                                      <img  class="round__img" id="jabba" src="img/jabba.png" alt="jabba">
                                  </span>
                                <p class="expert">
                                    <span class="title_expert">
                                          PERSONNALISATION<br>
                                      </span> Conseil en design intérieur pour accorder au mieux nos meubles et votre habitat.
                                </p>
                            </div>
                            <div class="col-md-4 last_">
                                <span class="round__">
                                      <img  class="round__img" id="fiabilite" src="img/fiabilite.png" alt="fiabilite">
                                  </span>
                                <p class="expert">
                                    <span class="title_expert">
                                          FIABILITÉ<br>
                                      </span> Depuis 15 ans, Villa Visby fait tout pour satisfaire au maximum sa clientèle.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="last_"></div>
                </div>
                <!-- Notre Expertise -->

                <!-- Nos Produits -->
                <div class="panel two">
                    <div class="container-fluid">

                        <h1 class="design__2 pull-left">NOS PRODUITS</h1>
                        <div id="container_1" class="productContainer container__first">
                            <p class="title_product">
                                Canapés
                            </p>
                            <p class="description_product">
                                DES CANAPÉS DE HAUTE QUALITÉ À LA FOIS DESIGN ET TRÈS CONFORTABLES.
                            </p>
                            <a id="canapes_btn_1" href="#" class="btn__click hvr-ripple-out">
                                  en savoir plus   <br><i class="fa fa-plus" aria-hidden="true"></i><br>sur nos canapés  et sofas
                              </a>
                        </div>
                        <div id="container_2" class="productContainer2">
                            <p class="title_product">
                                Fauteuils
                            </p>
                            <p class="description_product">
                                UNE COLLECTION FAUTEUILS ULTRA MODERNE QUE CE SOIT POUR VOS SALONS OU VOS SALLES À MANGER
                            </p>
                            <a id="fauteuils_btn_1" href="#" class="btn__click hvr-ripple-out">
                                  en savoir plus   <br><i class="fa fa-plus" aria-hidden="true"></i><br>sur nos fauteuils
                              </a>
                        </div>
                        <div id="container_3" class="productContainer3">
                            <p class="title_product">
                                Tables
                            </p>
                            <p class="description_product">
                                DES TABLES ADAPTÉES À VOS GOÛTS ET À VOTRE HABITAT PEU IMPORTE LA SAISON.
                            </p>
                            <a id="tables_btn_1 tables__1" href="#" class="btn__click hvr-ripple-out">
                                  en savoir plus   <br><i class="fa fa-plus" aria-hidden="true"></i><br>sur nos tables
                              </a>
                        </div>
                        <div id="container_4" class="productContainer4">
                            <p class="title_product">
                                Meubles de Jardin
                            </p>
                            <p class="description_product">
                                UNE SÉLECTION DE PRODUITS D'ÉXTÉRIEUR TOTALEMENT MODERNES ET SOLIDES.
                            </p>
                            <a id="mob_ext_btn_1" href="#" class="btn__click hvr-ripple-out">
                                  en savoir plus   <br><i class="fa fa-plus" aria-hidden="true"></i><br>sur nos meubles de jardin
                              </a>
                        </div>
                        <div id="container_5" class="productContainer5">
                            <p class="title_product">
                                Buffets
                            </p>
                            <p class="description_product">
                                DU RANGEMENT DE GRANDE TAILLE ET UNE PRÉSENCE QUI MET EN VALEUR VOS ESPACES.
                            </p>
                            <a id="buffet_btn_1" href="#" class="btn__click hvr-ripple-out">
                                  en savoir plus   <br><i class="fa fa-plus" aria-hidden="true"></i><br>sur nos buffets
                              </a>
                        </div>
                        <div id="container_6" class="productContainer6">
                            <p class="title_product">
                                Décorations
                            </p>
                            <p class="description_product">
                                ACCORDEZ VOS MEUBLES AVEC NOS CHOIX EN TERME DE DÉCORATIONS.
                            </p>
                            <a id="deco_btn_1" href="#" class="btn__click hvr-ripple-out">
                                  en savoir plus   <br><i class="fa fa-plus" aria-hidden="true"></i><br>sur nos décorations
                              </a>
                        </div>
                    </div>
                    <div id="product"></div>
                </div>
                <!-- Nos Produits -->

                <!-- Notre service de livraison -->
                <div class="panel four" id="delivery">
                    <h1 class="design__3">NOTRE SERVICE DE LIVRAISON</h1>
                    <div class="container">
                        <div class="square_bd">
                            <p class="livraiz">
                                <span class="title_livraiz">
                                                  COMMANDEZ<br>
                                              </span> Faites votre sélection parmi notre large gamme de produits
                            </p>

                        </div>
                        <div class="square_bd">
                            <p class="livraiz">
                                <span class="title_livraiz">
                                                  RÉGLEZ<br>
                                              </span> Payez en magasin
                            </p>
                        </div>
                        <div class="square_bd">
                            <p class="livraiz">
                                <span class="title_livraiz">
                                                  RECEVEZ<br>
                                              </span> Votre mobilier livré directement chez vous.
                            </p>
                        </div>
                        <div class="clearBoth"></div>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class=" round__nb">
                                    <p class="nb_del">1</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class=" round__nb">
                                    <p class="nb_del">2</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class=" round__nb">
                                    <p class="nb_del">3</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="cam_container">
                                    <img src="img/camion.png" alt="camion" id="camion">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Notre service de livraison -->

            </div>
        </div>
        <div class="clearBoth">

        </div>
        <!-- Panorama -->
        <section class="full-screen green" id="green">
            <div id="gal1">
                <div class="col-md-12">
                    <h1 class="design__7">GALERIE PHOTOS</h1></div>
                <img src="img/galery1.jpg" data-fullsrc="" alt="Cuisine">
                <img src="img/galery2.jpg" data-fullsrc="img/galery2.jpg" alt="Tabouret">
                <img src="img/galery3.jpg" data-fullsrc="img/galery3.jpg" alt="Chaises design">
                <img src="img/galery4.jpg" data-fullsrc="img/galery4.jpg" alt="Bureau">
                <img src="img/galery5.jpg" data-fullsrc="img/galery5.jpg" alt="Tables extérieur">
                <img src="img/galery6.jpg" data-fullsrc="img/galery6.jpg" alt="Tables intérieur">
                <img src="img/galery7.jpg" data-fullsrc="img/galery7.jpg" alt="Salon">
                <img src="img/galery8.jpg" data-fullsrc="img/galery8.jpg" alt="Buffet">
                <img src="img/galery9.jpg" data-fullsrc="img/galery9.jpg" alt="Salon">
                <img src="img/galery10.jpg" data-fullsrc="img/galery10.jpg" alt="Cuisine">
                <img src="img/galery11.jpg" data-fullsrc="img/galery11.jpg" alt="Table intérieur">
                <img src="img/galery12.jpg" data-fullsrc="img/galery12.jpg" alt="Salon de jardin">
            </div>
        </section>
        <!-- Panorama -->

        <!-- Nous situer -->
        <div class="clearBoth"></div>
        <section class="full-screen red" id="situa">
            <div class="container-fluid no-padding">
                <h1 class="design__8"> NOUS SITUER</h1>
                <div class="store">
                    <img src="img/fa%C3%A7ade.JPG" alt="facade">
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10489.195634656093!2d2.1598797!3d48.9096971!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa247e46a8d007685!2sVilla+Visby!5e0!3m2!1sfr!2sfr!4v1465749843212" width="100%" height="100%" frameborder="0"
                    style="border:0" allowfullscreen></iframe>
            </div>
        </section>
        <!-- Nous situer -->

        <!-- Nous contacter -->
        <section class="full-screen last_rel">
            <div class="contact">
                <div class="under-form">
                    <h1 id="contact" class="design__9">NOUS CONTACTER</h1>
                    <div id="form_contact">
                        <form action="process.php" id="contact" method="POST">
                            <p>
                                <br />
                                <input id="nom" name="nom" type="text" placeholder="NOM"><br>
                                <span id="msg_nom"></span>
                            </p>
                            <p>
                                <br />
                                <input id="email" name="email" type="email" placeholder="E-MAIL"><br>
                                <span id="msg_email"></span>
                            </p>
                            <p>
                                <br />
                                <textarea id="message" name="message" rows="10" cols="80" placeholder="MESSAGE"></textarea><br>
                                <span id="msg_message"></span>
                            </p>
                            <p>
                                <input type="submit" class="button" value="Envoyer" />
                            </p>
                        </form>
                        <span id="msg_all"></span>
                    </div>
                    <!-- end of #form_contact -->
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 logofooter">
                        <img src="img/logofooter.png" alt="Villa Visby">
                    </div>
                    <ul class="col-md-3 menuFooter">
                          <li><a href="#villa">Accueil</a></li>
                    <li><a href="#expert">Notre design</a></li>
                    <li><a href="#product">Nos produits</a></li>
                    <li><a href="#delivery">Service de livraison</a></li>
                    <li><a href="#gal1">Galerie Photos</a></li>
                    <li><a href="#situa">Nous situer</a></li>
                    <li><a href="#contact">Contactez-nous</a></li>
                        <li><a href="mentions.html" style="color:white;" target="_blank">MENTIONS LÉGALES</a></li>
                    </ul>
                    <ul class="col-md-3 menuFooter">
                        <li>Villa Visby</li>
                        <li>26 rue du Château d'eau</li>
                        <li>Montesson</li>
                        <li>-</li>
                        <li>Tél : 01 39 52 59 95</li>
                        <li>-</li>
                        <li>Ouvert du mardi au dimanche</li>
                        <li>10:00 - 13:00</li>
                        <li>14:30 - 19:00</li>
                        <li></li>
                    </ul>
                    <ul class="col-md-3 menuFooter" style="border-right:none">
                        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fvillavisby%2F%3Ffref%3Dts&width=450&layout=standard&action=like&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden"
                            scrolling="no" frameborder="0" allowTransparency="true" style="margin-left:20px;"></iframe>
                    </ul>
                    <div class="col-md-12 row copyright">
                        © copyright 2016 Villa Visby - Tous droits réservéss
                    </div>
                </div>
            </div>
        </footer>
        <!-- Nous contacter -->

    </div>

    <!-- Descriptif Nos Produits -->
    <div id="content-2">
        <header>
            <nav class="navbar">
                <a href="#" class="logo-nav"><img class="logo__nav" src="img/crown.png" alt=""></a>
                <button class="hamburger hamburger--slider header__icon" type="button">
                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                    </span>
                </button>
            </nav>
        </header>
        <div class="menu">
            <nav>
                <ul class="menu__nav">
                    <li><a href="#villa">Accueil</a></li>
                    <li><a href="#expert">Notre design</a></li>
                    <li><a href="#product">Nos produits</a></li>
                    <li><a href="#delivery">Service de livraison</a></li>
                    <li><a href="#gal1">Galerie Photos</a></li>
                    <li><a href="#situa">Nous situer</a></li>
                    <li><a href="#contact">Contactez-nous</a></li>
                </ul>
            </nav>
        </div>
        <section class="catalogue">
            <!-- CANAPÉS -->
            <div class="row">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="design__4">NOS CANAPES</h1>
                        <a href="#" style="float:right;position: relative;top: 100px;font-size: 30px;" class="btn__click_cross">X</a>
                        <p class="rappel">Nous tenons à rappeler à nos visiteurs que les articles présents sur ce site, ne sont qu'une infime sélection parmi tous nos produits. Afin de pouvoir tout voir, nous vous invitions à venir nous rencontrer au plus vite !</p>
                    </div>
                    <div class="col-md-2">
                        <nav class="nav_filter">
                            <ul>
                                <img id="canapes_btn" src="img/sofa_icon.png" alt="canape">
                                <p>Canapés</p>
                                <img id="fauteuils_btn" src="img/armchair.png" alt="fauteuils">
                                <p>Fauteuils</p>
                                <img id="tables_btn" src="img/table_icon.png" alt="table">
                                <p>Tables</p>
                                <img id="mob_ext_btn" src="img/outdoor-table.png" alt="exterior">
                                <p>Mobilier d'éxtérieur</p>
                                <img id="buffet_btn" src="img/sideboard.png" alt="buffet">
                                <p>Buffets</p>
                                <img id="deco_btn" src="img/deco_icon.png" alt="deco">
                                <p>Décorations</p>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-10" id="canapes">
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION NOTTA
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Raffiné, élégant, ce canapé très moderne aux finitions soignées, vous offrira un confort irréprochable.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/canap_notta.jpg" alt="notta"></div>
                            </div>
                        </section>
                        <div class="border" class="col-md-2"></div>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION DETROIT
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Canapé haut de gamme avec ses pieds chromés, les collections Detroit sont des canapés en lévitation.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/canap_detroit.jpg" alt="detroit"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION ALBURY
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">
Recouvert d'un cuir très souple il s'intégrera parfaitement et offre une assise à la fois ferme et moelleuse.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/canap_albury.jpg" alt="albury"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION PHOENIX
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Le canapé Phoenix est aux lignes sobres contemporaines, qui s'intégrera facilement dans tous les intérieurs.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/canap_sydney.jpg" alt="sydney"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION AMALFI
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Canapé d'angle au design aux lignes souples pour l'ample coque en polyuréthane intégral.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/canap_amlfi.png" alt="amalfi"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION ADÈLE
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Il donne une touche glamour grâce aux couleurs des tissus et des cuirs en ligne avec les tendances les plus récentes.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/canap_adele.png" alt="adele"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION AVIGNON
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase"> Il en naît un intéressant contraste de formes et de matériaux en ligne avec les tendances les plus actuelles.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/canap_avignon.png" alt="avignon"></div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-10" id="fauteuil">
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION DAIMON
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Un joli fauteuil aux allures contemporaines, Son assise en imitation cuir est très confortable et facile d'entretien.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/fauteuil_daimon.jpg" alt="daimon"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION SOFT-L
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">L'ample coque en polyuréthane intégral reprend son souffle grâce à l'orifice présent sur le dossier. Le design aux lignes souples rend l'assise confortable</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/sofa_softl.jpg" alt="softL"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION BART-S
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Les dimensions du dossier se font remarquer surtout en hauteur, en conférant à Cliff une forte personnalité.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/sofa_barts.jpg" alt="bart-s"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION HASSVIK
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Charmant fauteuil aux accents vintages qui est décliné dans une palette de 4 couleurs pour chacune de vos pièces !</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/fauteuil_hassvik.jpg" alt="clark"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION MYNTA VERA
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Le bouchon est le fil conducteur des assises appropriées au milieu cuisine ou au cellier à vin aux réserves spéciales.
</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/sofa_bouchon.jpg" alt="myntavera"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION COQUILLE-L
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Raffiné, élégant, aux courbes bien proportionnées, il vous offrira un confort irréprochable..</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/sofa_coquilleL.jpg" alt="coquilleL"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION BELFORT
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Dans votre salon pour un thé entre amis ou dans votre chambre à coucher il sera LA note raffinée et élégante de votre intérieur.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/feuteuil_belfort.jpg" alt="belfort"></div>
                            </div>
                        </section>
                    </div>
                    <!-- FAUTEUILS -->
                    <div class="col-md-10" id="tables">
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION PANAMA
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Au design contemporain et fonctionnel, vous succomberez à ses lignes épurées et à sa facilité d'entretien.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/table_panama.jpeg" alt="panama"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION PANAY
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Somptueuse avec ses lignes contemporaines, elle réunira tous vos convives autour de son vaste plateau.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/table_panay.jpg" alt="panay"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION MAJORCA
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Table avec plateau en acacia massif et pieds en MDF laqués blancs, couleur du plateau wagon gris vernis.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/table_majorca.jpg" alt="majorca"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION WEB
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Table rectangulaire aux dimensions importantes qui grâce à ses allonges en dotation, lui permet d'accueillir jusqu'à 8/10 personnes.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/table_web.jpg" alt="majorca"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION REPORT
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">report actualise la traditionnelle table pour la cuisine ou le salon à la lumière des nouvelles habitudes quotidiennes.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/table_report.jpg" alt="majorca"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION CASSANDRO
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Ce meuble unique aux finitions soignées et traditionnelles conserve son caractère unique de travail artisanal.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/table_cassandro.jpg" alt="cassandro"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION CRUISE
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Ce meuble unique aux finitions soignées et traditionnelles conserve son caractère unique de travail artisanal.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/table_cruise.jpg" alt="cassandro"></div>
                            </div>
                        </section>
                    </div>
                    <!-- TABLES -->
                    <div class="col-md-10" id="mob_ext">
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        SALLE À MANGER DE JARDIN
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Profitez à la fois d'un superbe design et d'un confort optimal pour vos déjeuner d'étés avec une table à rallonge</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/table_exterior.jpg" alt="exterior_table"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        SALLE À MANGER EN ALUMINIUM
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Rendez vos étés plus ensoléillés grâce aux meubles Villa Visby, vos amis vous envieront votre mobilier en aluminium.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/table_ext_2.jpg" alt="table_ext_2"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        SALLE À MANGER EN ALUMINIUM
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Profitez de votre jardin comme jamais, la qualité de nos meubles saura vous convaincre. </span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/ext_2.jpg" alt="table_ext_2"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        SALLE À MANGER EN ALUMINIUM
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Cet été vous pourrez vous asseoir tranquillement autour de votre piscine tout en étant totalement design.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/ext_3.jpg" alt="table_ext_2"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        LE JARDIN AU HUMEURS MODERNES
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Bronzer pour obtenir un teint magnifique ne sera jamais ausi facile qu'avec l'aide de nos chaises longues.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/ext_4.jpg" alt="table_ext_4"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        CHAISES LONGUES
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">N'ayez pas peur de vous endormir sous les couchers de soleil sur nos chaises longues, un design élégant et un superbe confort.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/chaise_longue.jpg" alt="chaise_longue"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        Salons d'éxtérieur
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Profitez des salons d'extérieur pour inviter tous vos amis dans le confort optimal cet été.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/salon_out.jpg" alt="salon_ext"></div>
                            </div>
                        </section>
                    </div>
                    <!-- TABLES -->
                    <div class="col-md-10" id="buffet">
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION QUITO
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Ce meuble trouvera facilement sa place dans votre intérieur et vous offrira un espace de rangement optimal.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/buffet_quito.jpg" alt="quito"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION S-CALL
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Bahut, MDF laqué. Trois portes MDF laqué, trois tiroirs. Etagère interne en melamine blanc pour chaque porte.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/buffet_scall.jpg" alt="quito"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION BASS
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Bahut, MDF laqué. Deux portes en verre trempé, une porte MDF laqué, trois tiroirs. Ce meuble saura vous plaire.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/buffet_bass.jpg" alt="quito"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION CARACAS
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Buffet qui trouvera facilement sa place dans votre salon. Son tiroir mettra à l'abri tous vos biens tout en étant design.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/buffet_caracas.jpg" alt="caracas"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION MONTERO
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Son style contemporain avec sa forme rectangulaire ainsi que la disposition symétrique de ses tiroirs et portes.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/buffet_montero.jpg" alt="montero"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION PIURA
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Cette très jolie enfilade design vous offrira un espace de rangement optimal grâce à sa tablette centrale sans aucune séparation.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/buffet_piura.jpg" alt="piura"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        COLLECTION CONTOUR
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Buffet de plus petite taille mais qui reste néanmoins au top du design contemporain et qui permet également un bon stockage.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/buffet_contour.jpg" alt="quito"></div>
                            </div>
                        </section>
                    </div>
                    <!-- BUFFETS -->
                    <div class="col-md-10" id="deco">
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        VASES & FLEURS
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Colorez votre salon grâce aux vases et fleurs adaptés à vos envies, aux formes les moins ordinaires vous saurez vous sortir du lot.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/vase.jpg" alt="vases"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        BOUGIES D'INTÉRIEURS
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Nos bougies apaisantes et solaires parfumeront votre intérieur tout en créant une atmosphère relaxante et réconfortante.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/bougies.jpg" alt="bougies"></div>
                            </div>
                        </section>
                        <section class="result">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        DÉCORATIONS
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Harmonisez votre salon grâce à de simples décorations smart, des objets qui sauront bien s'intégrer chez vous.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/d%C3%A9co.jpg" alt="déco"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        LUMINAIRES
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Éclairez votre intérieur avec goût, différents styles sont disponibles sur lesquels nous saurons vous conseiller.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/lights.jpg" alt="lights"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        NOS TAPIS
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Éclairez votre intérieur avec goût, différents styles sont disponibles sur lesquels nous saurons vous conseiller.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/tapis.jpg" alt="tapis"></div>
                            </div>
                        </section>
                        <section class="result__2">
                            <div class="col-md-6">
                                <div class="boxy-box">
                                    <p class="title_product__c">
                                        NOS TAPIS
                                    </p>
                                    <p class="description_product__c">
                                        Description: <span style="text-transform:lowercase">Éclairez votre intérieur avec goût, différents styles sont disponibles sur lesquels nous saurons vous conseiller.</span>
                                    </p>
                                    <p class="coloris_product__c">
                                        Coloris:
                                    </p>
                                    <div class="grey_block"></div>
                                    <div class="black_block"></div>
                                    <div class="brown_block"></div>
                                    <div class="brown__block"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product_hov"><img class="img__result" src="img/tapis2.jpg" alt="tapis"></div>
                            </div>
                        </section>
                    </div>
                    <!-- DÉCORATIONS  -->
                </div>
            </div>
    </div>
    <!-- Descriptif Nos Produits -->

    </div>
    </section>
    <!-- ALL -->
    </div>
</body>

<script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="scripts/app.js"></script>


</html>
