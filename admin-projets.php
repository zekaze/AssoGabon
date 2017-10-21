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
                                        <li><a href="admin-index.php">Accueil</a> </li>
                                        <li class="active">Messages</li>
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
                    <div class="accordion" data-accordion>
                        <div data-control>
                            <h3><b>Ajouter un projet <small>(Cliquez pour ouvrir)</small></b></h3>
                        </div>
                        <div data-content>
                            <form action=""  class="formulaire">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label>Nom</label>
                                        <input type="text" class="form-input" name="titre" value="" id="titre" required="required">

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Date de début</label>
                                                <input type="text" class="form-input form_date" data-format="yyyy-mm-dd" name="datdeb" id="datdeb" value="" required="required">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Date de fin (Ne pas renseigner pour les projets encours)</label>
                                                <input type="text" class="form-input form_date" data-format="yyyy-mm-dd" name="datfin" id="datfin" value="">
                                            </div>
                                        </div>
                                        <label>Coût (En F CFA)</label>
                                        <input type="text" class="form-input" name="cout" id="cout" value="" required="required">
                                        <label>Contenu</label>
                                        <textarea name="contenu" class="rich-text" id="ZRSDvcfdRFDFUU09I" rows="6" placeholder="Contenu ..." aria-hidden="true"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="assets/images/opportunites/1.jpg" class="img-responsive" alt="Asso-gabon">
                                        <label class="btn btn-success" style="color: #fff">
                                            <i class="fa fa-camera"></i> &nbsp; Choisir une photo
                                            <input type="file" class="hidden">
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">Mettre à jour</button>
                            </form>
                        </div>
                    </div>

                    <h3><b>Tous les projets</b></h3>
                    <div class="pagination-box clearfix">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Précédant"> <span aria-hidden="true"><i class="fa fa-caret-left"></i></span> </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li> <span >...</span> </li>
                            <li><a href="#">12</a></li>
                            <li><a href="#">13</a></li>
                            <li><a href="#">14</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true"><i class="fa fa-caret-right"></i></span>
                                </a>
                            </li>
                            <li><span class="record" >10 sur 137</span></li>
                        </ul>
                    </div>
                    <table class="table table-responsive table-striped">
                        <tr>
                            <th>Intitulé</th>
                            <th>Date de début</th>
                            <th>Date de fin</th>
                            <th>Action</th>
                        </tr>
                        <?php for ($i = 0; $i < 10; $i++): ?>
                            <tr>
                                <td><a href="#">Intitulé du projet</a></td>
                                <td><?php echo afficher_date('2017-07-29 10:22:29');?></td>
                                <td><?php echo afficher_date('2017-07-29 10:22:29');?></td>
                                <td>
                                    <button class="fa fa-trash btn" data-toggle="modal"
                                            data-target="#supprimer<?php echo $i; ?>" title="Supprimer"></button>
                                    <button class="fa fa-pencil btn" data-toggle="modal"
                                            data-target="#modifier<?php echo $i; ?>" title="Modifier"></button>
                                </td>
                            </tr>
                        <?php endfor; ?>
                    </table>
                </div>
            </div>
        </div>

    </section>

<?php include 'inc/footer.php'?>