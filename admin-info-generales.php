<?php include 'inc/header.php' ?>
    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container-fluid">
            <div class="col-lg-2 col-md-3">
                <?php include_once 'inc/admin-sidebar.php';?>
            </div>
            <div class="col-lg-10 col-md-9">
                <section class="header-container assoc" style="background-image:url('assets/images/bg/1.jpg'); background-size: cover;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h2><b class="text-white">Nom de l'association</b></h2>
                                <div>
                                    <ol class="header-text">
                                        <li class="texte-couverture">Bonjour, JA GABON vous accueille à bras ouverts si vous avez un projet de création d'entreprise</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion btn" data-accordion>
                            <div data-control><i class="fa fa-camera"></i> &nbsp; Photo de couverture</div>
                            <div data-content>
                                <a href="#"><i class="fa fa-crop"></i> &nbsp; Ajuster cette photo</a>
                                <a href="#"><i class="fa fa-photo"></i> &nbsp; Choisir une photo de couverture</a>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="detail-asso">
                    <h3><b>Informations générales</b></h3>

                    <div class="alert alert-success"><i class="fa fa-info-circle"></i> &nbsp; Cette page vous permet de visualiser et de modifier les informations concernant votre association. Toute modification sera automatiquement prise en compte.</div>
                    <div class="formulaire">
                        <form action="" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-input" name="nom" value="JA GABON" required="required">

                                    <label>Slogan (Max. 250 caractères)</label>
                                    <input type="text" class="form-input" name="slogan" maxlength="250" value="Entreprenez!">

                                    <label>N° Tél. 1</label>
                                    <input type="text" class="form-input" name="tel1" value="+24104361671" required="required">

                                    <label>N° Tél. 2</label>
                                    <input type="text" class="form-input" name="tel2" value="+24102357705">

                                    <label>Email 1</label>
                                    <input type="email" class="form-input" name="email1" value="jagabon@yahoo.fr">

                                    <label>Email 2</label>
                                    <input type="email" class="form-input" name="email2" value="jagabon@gmail.com">

                                    <label>Province</label>
                                    <select class="form-input" name="sc_id_province">
                                        <option value="1" selected="">G1 - Estuaire</option>
                                        <option value="2">G2 - Haut-Ogooué</option>
                                        <option value="3">G3 - Moyen-Ogooué</option>
                                        <option value="4">G4 - Ngounié</option>
                                        <option value="5">G5 - Nyanga</option>
                                        <option value="6">G6 - Ogooué-Ivindo</option>
                                        <option value="7">G7 - Ogooué-Lolo</option>
                                        <option value="8">G8 - Ogooué-Maritime</option>
                                        <option value="9">G9 - Woleu-Ntem</option>
                                    </select>

                                    <label>Commune / Département</label>
                                    <input type="text" class="form-input" name="ville" value="Libreville" required="required">

                                    <label>Adresse du siège</label>
                                    <textarea class="form-input" id="adr" name="adr" rows="2" placeholder="Où se trouve le siège de votre association?">IAI; Libreville</textarea>

                                    <label>Site web (Exemple: http://www.asso-gabon.org)</label>
                                    <input type="url" class="form-input" name="site_web" value="http://www.jagabon.org">
                                </div>
                                <div class="col-md-6">
                                    <label>Texte de couverture (Max. 100 mots)</label>
                                    <textarea class="form-input" id="couverture" name="textcou" rows="9" placeholder="Ce texte s'affiche sur bannière de toutes les pages de votre association">Bonjour, JA GABON vous accueille à bras ouverts si vous avez un projet de création d'entreprise.</textarea>
                                    <div style="overflow: hidden;">
                                        <p id="compteurc" class="pull-left">16 mot(s) / 100</p>
                                    </div>

                                    <label>Brève présentation de votre (Max. 250 mots)</label>
                                    <textarea class="form-input" name="descr" id="description" rows="10" placeholder="Ceci permettra aux potentiels partenaires de mieux connaître votre association">JA Gabon est une association de droit gabonais. Elle a été financée pour son lancement par l'entreprise américaine de BTP BECHTEL dans le cadre de sa stratégie de responsabilité sociétale des entreprises (RSE). Depuis 2013, JA Gabon a formé près de 4000 jeunes à l'éducation financière, l'entreprenariat et à l'employabilité. JA Gabon est organisatrice du Grand Prix de l'Excellence depuis 2014 à la demande du Chef de l'Etat, S.E Ali Bongo Ondimba et gère l'incubateur national depuis octobre 2014.</textarea>

                                    <div style="width: 70%; margin: 10px auto">
                                        <img src="assets/images/association/1.jpg" class="img-responsive" alt="Asso-Gabon">
                                        <label class="btn btn-success" style="color: #fff">
                                            <i class="fa fa-camera"></i> &nbsp; Choisir un logo
                                            <input type="file" class="hidden">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Mettre à jour</button>
                        </form>
                    </div>

                    <div class="accordion" data-accordion>
                        <div data-control><h4><b>Thématiques abordées <small>(cliquez pour ouvrir)</small></b></h4></div>
                        <div data-content>
                            <form action="" class="formulaire">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="nom">Thématique principale</label>
                                        <select class="form-input" name="sc_id_thematique_1" id="sc_id_thematique_1" onchange="fetch_select(this.value,2)">
                                            <option value="1" selected="">Education</option>
                                            <option value="2">Santé</option>
                                            <option value="3">Droits de l'homme</option>
                                            <option value="4">Economie sociale et solidaire / AGR</option>
                                            <option value="5">Environnement</option>
                                            <option value="6">Protection des personnes vulnerables</option>
                                            <option value="7">Insertion de la jeunesse</option>
                                            <option value="8">Energie</option>
                                            <option value="9">Numérique</option>
                                            <option value="10">Agriculture / élevage</option>
                                            <option value="11">Genre</option>
                                            <option value="12">Protection de l'enfance</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="nom">Thématique secondaire</label>
                                        <select class="form-input" name="sc_id_thematique_2" id="sc_id_thematique_2" onchange="">
                                            <option value="0"></option>
                                            <option value="1">Education</option>
                                            <option value="2">Santé</option>
                                            <option value="3">Droits de l'homme</option>
                                            <option value="4">Economie sociale et solidaire / AGR</option>
                                            <option value="5">Environnement</option>
                                            <option value="6">Protection des personnes vulnerables</option>
                                            <option value="7" selected="">Insertion de la jeunesse</option>
                                            <option value="8">Energie</option>
                                            <option value="9">Numérique</option>
                                            <option value="10">Agriculture / élevage</option>
                                            <option value="11">Genre</option>
                                            <option value="12">Protection de l'enfance</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Mettre à jour</button>
                            </form>
                        </div>
                    </div>

                    <div class="accordion" data-accordion>
                        <div data-control><h4><b>Histoire de l'association <small>(cliquez pour ouvrir)</small></b></h4></div>
                        <div data-content>
                            <form action="" class="formulaire">
                                <textarea class="form-input" name="sc_histoire" id="exampleTextarea" rows="12">L’année 2019 sera l'occasion de célébrer le centenaire de Junior Achievement Worldwide. Ayant débuté en 1919 avec seulement une poignée d’étudiants, l’organisation opère aujourd’hui dans le monde entier. Junior Achievement a été fondé aux Etats-Unis par Théodore Vail, alors directeur général de American Telephone &amp; Telegraph ; Horace Moses, président de Strathmore Paper Co. ; et le sénateur Murray Crane de l’état du Massachussetts.

Le premier programme offert aux lycéens en dehors du circuit scolaire fut JA Company Program. Au cours de ces 35 dernières années, l’organisation a développé ses activités et a étendu son champ d’action en y incluant des programmes et des activités en milieu scolaire, parascolaire, et en dehors du circuit scolaire. En 1955, Junior Achievement dépassa les frontières des États-Unis d’Amérique, et aujourd’hui, ses programmes sont offerts aux jeunes à travers le monde. Depuis ses débuts, JA a touché plus de 125 millions de jeunes à travers le monde. L’Afrique du Sud est devenue en 1979 le premier pays africain à en faire profiter sa jeunesse. JA est installé dans 123 pays dont 13 en Afrique subsaharienne et forme plus de 10 millions de jeunes à travers le monde chaque année.</textarea>
                                <button type="submit" class="btn btn-success">Mettre à jour</button>
                            </form>
                        </div>
                    </div>

                    <div class="accordion" data-accordion>
                        <div data-control><h4><b>Missions et objectifs <small>(cliquez pour ouvrir)</small></b></h4></div>
                        <div data-content>
                            <form action="" class="formulaire">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Missions</label>
                                <textarea class="form-input" name="sc_missions" id="exampleTextarea" rows="12">Croire dans le potentiel illimité des jeunes.
S’engager vers une économie fondée sur le marché et l'entrepreneuriat
Être passionné par ce que nous faisons et le faire avec honnêteté, intégrité et excellence.</textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Objectifs</label>
                                    <textarea class="form-input" name="sc_objectifs" id="exampleTextarea" rows="12">Respecter les talents, la créativité, les perspectives et les horizons de tous les individus.
Croire en la puissance du partenariat et de la collaboration. Être convaincu de l’impact réel de l’apprentissage par la pratique</textarea>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">Mettre à jour</button>
                            </form>
                        </div>
                    </div>

                    <div class="accordion" data-accordion>
                        <div data-control><h4><b>Photo de profil et vidéo de présentation <small>(cliquez pour ouvrir)</small></b></h4></div>
                        <div data-content>
                            <form action="" enctype="multipart/form-data" class="formulaire">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="alert alert-success"><i class="fa fa-info-circle"></i> &nbsp; Cette photo s'affichera sur la page d'accueil de votre association.</div>
                                        <img src="assets/images/association/1.jpg" class="img-responsive" alt="Asso-Gabon">
                                        <label class="btn btn-success" style="color: #fff">
                                            <i class="fa fa-camera"></i> &nbsp; Choisir une photo
                                            <input type="file" class="hidden">
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <div style="margin: 5px 0">
                                            <img src="assets/images/association/1.jpg" class="img-responsive" alt="Asso-Gabon">
                                        </div>
                                        <label>Lien Youtube </label>
                                        <input type="text" class="form-input" name="sc_video" value="https://www.youtube.com/embed/I--daHaaV2U">
                                    </div>
                                    </div>

                                    <button type="submit" class="btn btn-success">Mettre à jour</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php include 'inc/footer.php'?>