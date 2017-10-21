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
                    <h3><b>Modifier la photo</b></h3>

                    <div class="formulaire">
                        <div style="margin-bottom: 10px"><a href="admin-multimedia.php" class="btn"><i class="fa fa-caret-left"></i> &nbsp; Retour vers les bibliothèque</a></div>
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-7">
                                    <input type="text" placeholder="Titre" class="form-input" name="titre" id="titre" required="required">
                                    <h5><b>Description</b></h5>
                                    <textarea name="contenu" class="rich-text" id="ZRSDvcfdRFDFUU09I" rows="6" placeholder="Contenu ..." aria-hidden="true"></textarea>
                                </div>
                                <div class="col-sm-5">
                                    <img src="assets/images/association/1.jpg" class="img-responsive" alt="Asso-Gabon">
                                    <label class="btn btn-success" style="color: #fff">
                                        <i class="fa fa-camera"></i> &nbsp; Choisir un fichier
                                        <input type="file" class="hidden">
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Mettre à jour</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php include 'inc/footer.php'?>