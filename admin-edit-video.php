<?php include 'inc/header.php' ?>
    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container-fluid">
            <div class="col-lg-2 col-md-3">
                <?php include_once 'inc/admin-sidebar.php';?>
            </div>
            <div class="col-lg-10 col-md-9">
                <?php include_once 'inc/admin-header.php';?>
                <div class="detail-asso">
                    <h3><b>Modifier la vidéo</b></h3>

                    <div class="formulaire">
                        <div style="margin-bottom: 10px"><a href="admin-multimedia.php" class="btn"><i class="fa fa-caret-left"></i> &nbsp; Retour vers les bibliothèque</a></div>
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-7">
                                    <input type="text" placeholder="Titre" class="form-input" name="titre" id="titre" required="required">

                                    <input type="text" placeholder="Lien vidéo (Youtube, DailyMotion, Vimeo , ...)" class="form-input" name="titre" id="titre" required="required">
                                    <h5><b>Description</b></h5>
                                    <textarea name="contenu" class="rich-text" id="ZRSDvcfdRFDFUU09I" rows="6" placeholder="Contenu ..." aria-hidden="true"></textarea>
                                </div>
                                <div class="col-sm-5">
                                    <h5><b>Aperçu</b></h5>
                                    <img src="assets/images/association/1.jpg" class="img-responsive" alt="Asso-Gabon">
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