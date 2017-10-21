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
                        <h3><b>Rédiger un  nouvel article</b></h3>

                    <div class="formulaire">

                        <form action="#">
                                    <input type="text" placeholder="Titre" class="form-input" name="titre" id="titre" required="required">
                            <div class="row">
                                <div class="col-sm-5">
                                    <select class="form-input" name="id_cat">
                                        <option value="1">Actualités</option>
                                        <option value="2">Événement</option>
                                        <option value="4">Appel à projet</option>

                                    </select>
                                </div>
                                <div class="col-sm-7">
                                    <label class="btn btn-success" style="color: #fff">
                                        <i class="fa fa-camera"></i> &nbsp; Photo illustrative
                                        <input type="file" class="hidden">
                                    </label>
                                </div>
                            </div>
                            <textarea name="contenu" class="rich-text" id="ZRSDvcfdRFDFUU09I" rows="6" placeholder="Contenu ..." aria-hidden="true"></textarea>
                            <button type="submit" class="btn btn-success">Publier l'article</button>
                        </form>
                    </div>
                    <h3><b>Tous les articles</b></h3>
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
                            <th width="10%">Image</th>
                            <th width="60%">Titre</th>
                            <th width="10%">Type</th>
                            <th>Date</th>
                        </tr>
                        <?php for ($i =0; $i<10; $i++):?>
                            <tr class="article">
                                <td><img src="assets/images/association/1.jpg" class="img-responsive" alt="Asso-Gabon"></td>
                                <td><a href="admin-edit-article.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
                                <td>Actualité</td>
                                <td class="date"><?php echo afficher_date('2017-07-29 10:22:29');?></td>
                            </tr>
                        <?php endfor;?>
                    </table>
                </div>
            </div>
        </div>

    </section>

<?php include 'inc/footer.php'?>