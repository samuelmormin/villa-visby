<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Villa Visby</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="Style/app.css">

</head>

<body>
    <div id="blurred-image-container">
        <div class="img-src"></div>
        <div class="img-src blurred-img"></div>
    </div>
    <div id="content-1">
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
                    <li><a href="#homepage">Accueil</a></li>
                    <li><a href="#expert">Notre design</a></li>
                    <li><a href="#product">Nos produits</a></li>
                    <li><a href="#delivery">Service de livraison</a></li>
                    <li><a href="#gallery">Galerie Photos</a></li>
                    <li><a href="#situa">Nous situer</a></li>
                    <li><a href="#contact">Contactez-nous</a></li>
                </ul>
            </nav>
        </div>
        <div class="container-fluid no-padding homepage" id="homepage">
            <div id="villa">
                <div id="banner__villa1">
                    <img class="banner__logo" src="img/logovisby.png" alt="" class="logo__banner">
                </div>
            </div>
            <div class="scroll_box">
                <p class="scroll__text">
                    SCROLLER POUR DÉCOUVRIR LE SITE</p>
                <p class="flecheScroll">❬</p>
            </div>
        </div>
        <section id="expert">
            <h1 class="design__3">NOTRE EXPERTISE</h1>
            <div class="row">
                <div class="container">
                    <div class="row">
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
                              </span> Conseil en design intèrieur pour accorder au mieux nos meubles et votre habitat.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <span class="round__">
                              <img  class="round__img" id="fiabilite" src="img/fiabilite.png" alt="fiabilite">
                          </span>
                            <p class="expert">
                                <span class="title_expert">
                                  FIABILITÉ<br>
                              </span> Depuis 15 ans, Villa Visby fait tout pour satisfaire un maximum sa clientèle.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="clearBoth"></div>
        </section>
        <section id="product">
            <h1 class="design__3" style="margin-bottom:25px;">NOS PRODUITS</h1>
            <div class="container">
                <div class="row">
                    <div class="productContainer product_block">
                        <p class="title_product">
                            Canapés
                        </p>
                        <p class="description_product">
                            DES CANAPÉS DE HAUTES QUALITÉS À LA FOIS DESIGN ET TRÈS CONFORTABLE.
                        </p>
                        <a id="canapes_btn_1" href="#" class="btn__click hvr-ripple-out">
                          en savoir plus   <br><i class="fa fa-plus" aria-hidden="true"></i><br>sur nos canapés  et sofas
                      </a>
                    </div>
                    <div class="productContainer2 product_block_2">
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
                    <div class="productContainer3 product_block">
                        <p class="title_product">
                            Tables
                        </p>
                        <p class="description_product">
                            DES TABLES ADAPTÉS À VOS GOÛTS ET A VOTRE HABITAT PEU IMPORTE LA SAISON.
                        </p>
                        <a id="tables_btn_1" href="#" class="btn__click hvr-ripple-out">
                          en savoir plus   <br><i class="fa fa-plus" aria-hidden="true"></i><br>sur nos tables
                      </a>
                    </div>
                    <div class="productContainer4 product_block_2">
                        <p class="title_product">
                            Meubles de Jardin
                        </p>
                        <p class="description_product">
                            UNE SÉLÉCTION DE PRODUITS D'ÉXTÉRIEURS TOTALEMENT MODERNE ET SOLIDES.
                        </p>
                        <a id="mob_ext_btn_1" href="#" class="btn__click hvr-ripple-out">
                          en savoir plus   <br><i class="fa fa-plus" aria-hidden="true"></i><br>sur nos meubles de jardin
                      </a>
                    </div>
                    <div class="productContainer5 product_block">
                        <p class="title_product">
                            Buffets
                        </p>
                        <p class="description_product">
                            DU RANGEMENT DE GRANDE TAILLE ET UNE PRÉSENCE QUI MET EN VALEURS VOS SALLES.
                        </p>
                        <a id="buffet_btn_1" href="#" class="btn__click hvr-ripple-out">
                          en savoir plus   <br><i class="fa fa-plus" aria-hidden="true"></i><br>sur nos buffets
                      </a>
                    </div>
                    <div class="productContainer6 product_block_2">
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
            </div>
        </section>
        <section id="delivery">
            <h1 class="design__3">NOTRE SERVICE DE LIVRAISON</h1>
            <div class="container">
                <div class="row no-padding">
                    <div class="box_center">
                        <div class="square_bd">
                            <p class="livraiz">
                                <span class="title_livraiz">
                                            COMMANDEZ<br>
                                        </span> Faites votre séléctions parmis notre large gamme de produits
                            </p>

                        </div>
                        <p class="nb_del">1</p>
                    </div>
                    <div class="box_center">
                        <div class="square_bd">
                            <p class="livraiz">
                                <span class="title_livraiz">
                                            RÉGLEZ<br>
                                        </span> Payez en magasin
                            </p>
                        </div>
                        <p class="nb_del">2</p>
                    </div>
                    <div class="box_center">
                        <div class="square_bd">
                            <p class="livraiz">
                                <span class="title_livraiz">
                                            RECEVEZ<br>
                                        </span> Votre mobilier livrée directement chez vous.
                            </p>
                        </div>
                        <p class="nb_del">3</p>
                    </div>
                    <div class="clearBoth"></div>
                </div>
            </div>
        </section>
        <section class="gallery" id="gallery">
            <div id="gal1">
                <div class="col-md-12">
                    <h1 class="design__3">GALERIE PHOTOS</h1></div>
                <img src="img/galery1.jpg" data-fullsrc="" alt="Cuisine">
                <img src="img/galery2.jpg" data-fullsrc="img/galery2.jpg" alt="Tabouret">
                <img src="img/galery3.jpg" data-fullsrc="img/galery3.jpg" alt="Chaîses design">
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
        <section id="situa">
            <div class="container-fluid no-padding">
                <h1 class="design__3" style="margin-bottom:25px;"> NOUS SITUER</h1>
                <img class="store" src="img/store.png" alt="façade">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10489.195634656093!2d2.1598797!3d48.9096971!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa247e46a8d007685!2sVilla+Visby!5e0!3m2!1sfr!2sfr!4v1465749843212" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </section>
        <section id="contact" style="margin:0;">
          <div class="contact">
              <div class="under-form">
                  <h1 id="contact" class="design__3">CONTACT</h1>
                  <a href="mailto:contact@villavisby.fr">contact@villavisby.fr</a>
                  <p>Téléphone:</br> 01 39 52 59 95</p>
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
                        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fvillavisby%2F%3Ffref%3Dts&width=450&layout=standard&action=like&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" style="margin-left:20px;"></iframe>
                    </ul>
                    <div class="col-md-12 row copyright">
                        © copyright 2016 Villa Visby - Tous droits réservéss
                    </div>
                </div>
            </div>
        </footer>
        </div>
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
                <div class="row">
                    <div class="container">
                        <div class="col-md-12">
                            <h1 class="design__4">NOS CANAPES</h1>
                            <a href="#" style="right:10px;position: absolute;top: 0px;font-size: 30px;" class="btn__click_cross">X</a>
                            <p class="rappel">Nous tenons à rappeler à nos visiteurs que les articles présents sur ce site, ne sont qu'une mince séléction parmis tous nos produits. Afin de pouvoir tout voir, nous vous invitions à venir nous rencontrer au plus vite !</p>
                        </div>
                        <div class="col-md-12 nav_1">
                            <nav class="nav_filter">
                                <ul>
                                    <li><img id="canapes_btn" src="img/sofa_icon.png" alt="canape">
                                        <p>Canapés</p>
                                    </li>
                                    <li><img id="fauteuils_btn" src="img/armchair.png" alt="fauteuils">
                                        <p>Fauteuils</p>
                                    </li>
                                    <li><img id="tables_btn" src="img/table_icon.png" alt="table">
                                        <p>Tables</p>
                                    </li>
                                    <br>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-md-12 nav_2">
                            <nav class="nav_filter">
                                <ul>
                                    <li><img id="mob_ext_btn" src="img/outdoor-table.png" alt="exterior">
                                        <p>Extérieur</p>
                                    </li>
                                    <li><img id="buffet_btn" src="img/sideboard.png" alt="buffet">
                                        <p>Buffets</p>
                                    </li>
                                    <li><img id="deco_btn" src="img/deco_icon.png" alt="deco">
                                        <p>Décorations</p>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="clearBoth"></div>
                        <div class="col-md-10" id="canapes">
                            <section class="result">
                                <div class="col-md-6">
                                    <div class="boxy-box">
                                        <p class="title_product__c">
                                            COLLECTION NOTTA
                                        </p>
                                        <p class="description_product__c">
                                            Description: <span style="text-transform:lowercase">Rafiné, élégant, ce canapé très moderne aux finitions soignées, vous offrira un confort irréprochable.</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Description: <span style="text-transform:lowercase">Les canapés Phoenix est aux lignes sobres contemporaines, qui s'intégrera facilement dans tous les intérieurs.</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Description: <span style="text-transform:lowercase">Rafiné, élégant, aux courbes bien proportionnées vous offrira un confort irréprochable..</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Description: <span style="text-transform:lowercase">Dans votres salon pour un thé entre amis ou dans votre chambre à coucher il sera LA note raffinée et élégante de votre intérieur.</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Description: <span style="text-transform:lowercase">Au design contemporain et fonctionnel, vous succombrez à ses lignes épurées et de sa facilité d'entretien.</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Description: <span style="text-transform:lowercase">Report actualise la traditionnelle table pour la cuisine ou le salon à la lumière des nouvelles habitudes quotidiennes.</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Description: <span style="text-transform:lowercase">Rendez vos étés plus ensoléillé grâce aux meubles Villa Visby, vos amis vous envieront pour votre mobilier en aluminiu.</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Description: <span style="text-transform:lowercase">Profitez de votre jardin comme jamais, la qualité de nos meubles saura vous convaincre les intempéris météoroligques </span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Description: <span style="text-transform:lowercase">N'ayez pas peur de vous endormir sous les couchés de soleil sur nos chaises longues, un désign élégant et un superbe confort.</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Description: <span style="text-transform:lowercase">Profitez des salons éxtérieurs pour invités tous vos amis dans le confort optimal cet été.</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Description: <span style="text-transform:lowercase">Bahut, MDF laqué. Trois portes MDF laqué, trois tiroirs. Etagère interne en melamine blanc pour chaque porte stockant vos affaires.</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Description: <span style="text-transform:lowercase">Colorisez votre salon grâce aux vases et fleurs adapté à vos envies, aux formes les moins ordinaires vous saurez vous sortir du lot.</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            BOUGIES D'INTÈRIEURS
                                        </p>
                                        <p class="description_product__c">
                                            Description: <span style="text-transform:lowercase">Nos bougies apaisantes et solaires parfumera votre intérieur tout en créant une atmosphère relaxante et réconfortante.</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Description: <span style="text-transform:lowercase">Harmonisez votre salon grâce à de simples décorations smart, des objets qui sauront terriblement bien s'intégrer chez vous.</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Description: <span style="text-transform:lowercase">Éclairez votre intérieur avec goût, diffèrents styles sont disponibles sur lesquels nous sauront vous coseiller.</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Description: <span style="text-transform:lowercase">Éclairez votre intérieur avec goût, diffèrents styles sont disponibles sur lesquels nous sauront vous coseiller.</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
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
                                            Description: <span style="text-transform:lowercase">Éclairez votre intérieur avec goût, diffèrents styles sont disponibles sur lesquels nous sauront vous coseiller.</span>
                                        </p>
                                        <p class="coloris_product__c">
                                            Coloris: Nombreuses colories disponibles
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product_hov"><img class="img__result" src="img/tapis2.jpg" alt="tapis"></div>
                                </div>
                            </section>
            </section>
            </div>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="Scripts/app.js"></script>

</html>
