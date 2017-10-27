<?php include 'inc/header.php' ?>
    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container-fluid">
            <div class="col-lg-2 col-md-3">
                <?php include_once 'inc/admin-sidebar.php';?>
            </div>
            <div class="col-lg-10 col-md-9">
                <?php include_once 'inc/admin-header.php';?>
                <div class="detail-asso">
                    <h3><b>Modifier le document</b></h3>

                    <div class="formulaire">
                        <div style="margin-bottom: 10px"><a href="admin-multimedia.php" class="btn"><i class="fa fa-caret-left"></i> &nbsp; Retour vers les bibliothèque</a></div>
                        <form action="#" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-7">
                                    <input type="text" placeholder="Titre" class="form-input" name="titre" id="titre" required="required">
                                </div>
                                <div class="col-sm-5">
                                    <label class="btn btn-success" style="color: #fff">
                                        <i class="fa fa-file-pdf-o"></i> &nbsp; Choisir un document
                                        <input type="file" class="hidden">
                                    </label>
                                </div>
                            </div>
                            <h5><b>Description</b></h5>
                            <textarea name="contenu" class="rich-text" id="ZRSDvcfdRFDFUU09I" rows="6" placeholder="Contenu ..." aria-hidden="true"></textarea>
                            <button type="submit" class="btn btn-success">Mettre à jour</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php include 'inc/footer.php'?>