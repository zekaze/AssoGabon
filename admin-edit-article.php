<?php include 'inc/header.php' ?>
    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container-fluid">
            <div class="col-lg-2 col-md-3">
                <?php include_once 'inc/admin-sidebar.php';?>
            </div>
            <div class="col-lg-10 col-md-9">
                <?php include_once 'inc/admin-header.php';?>

                <div class="detail-asso">
                    <h3><b>Modifier un article</b></h3>

                    <div class="formulaire">
                        <div class="alert alert-warning"><i class="fa fa-warning"></i> &nbsp; Attention! Toute modification ou tout ajout de document entrainera la soumission dudit projet à une nouvelle validation.</div>
                        <div style="margin-bottom: 10px"><a href="admin-articles.php" class="btn"><i class="fa fa-caret-left"></i> &nbsp; Retour vers les articles</a></div>
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-7">
                                    <input type="text" placeholder="Titre" class="form-input" name="titre" id="titre" required="required">

                                    <select class="form-input" name="id_cat">
                                        <option value="1">Actualités</option>
                                        <option value="2">Événement</option>
                                        <option value="4">Appel à projet</option>

                                    </select>

                                    <textarea name="contenu" class="rich-text" id="ZRSDvcfdRFDFUU09I" rows="6" placeholder="Contenu ..." aria-hidden="true"></textarea>
                                </div>
                                <div class="col-sm-5">
                                    <img src="assets/images/association/1.jpg" class="img-responsive" alt="Asso-Gabon">
                                    <label class="btn btn-success" style="color: #fff">
                                        <i class="fa fa-camera"></i> &nbsp; Photo illustrative
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