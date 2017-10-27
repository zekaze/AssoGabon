<?php include 'inc/header.php' ?>
    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container-fluid">
            <div class="col-lg-2 col-md-3">
                <?php include_once 'inc/admin-sidebar.php';?>
            </div>
            <div class="col-lg-10 col-md-9">
                <?php include_once 'inc/admin-header.php';?>
                <div class="detail-asso">
                        <h3><b>Bibliothèque multimédia</b></h3>

                    <div class="formulaire">
                        <div class="alert alert-success"><i class="fa fa-info-circle"></i> &nbsp; Pour ajouter une nouveau fichier veuillez <b>sélectionner le type de fichier</b></div>
                        <div class="header-2">
                            <h5><b>Tyle de fichier à ajouter</b></h5>
                            <select class="form-input" id="multi-choice-formulaires-trigger" name="file_type">
                                <option value="#formulaire-photos">Photo</option>
                                <option value="#formulaire-videos">Vidéo</option>
                                <option value="#formulaire-documents">Document</option>
                                <option value="#formulaire-outils">Outil</option>
                            </select>
                        </div>


                        <form action="#" id="formulaire-photos" enctype="multipart/form-data" class="multi-choice-formulaires hidden">
                            <h4><b>Publier une photo</b></h4>
                            <div class="row">
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Titre" class="form-input" name="titre" id="titre" required="required">
                                </div>
                                <div class="col-sm-3">
                                    <label class="btn btn-block btn-success" style="color: #fff">
                                        <i class="fa fa-camera"></i> &nbsp; Choisir une photo
                                        <input type="file" class="hidden">
                                    </label>
                                </div>
                            </div>
                            <h5><b>Description</b></h5>
                            <textarea name="" class="rich-text" placeholder="Description..."></textarea>
                            <div>
                                <button type="submit" class="btn btn-success">Publier la photo</button>
                            </div>
                        </form>

                        <form action="#" id="formulaire-documents" enctype="multipart/form-data" class="multi-choice-formulaires hidden">
                            <h4><b>Publier un document</b></h4>
                            <div class="row">
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Titre" class="form-input" name="titre" id="titre" required="required">
                                </div>
                                <div class="col-sm-3">
                                    <label class="btn btn-block btn-success" style="color: #fff">
                                        <i class="fa fa-file-pdf-o"></i> &nbsp; Choisir un document
                                        <input type="file" class="hidden">
                                    </label>
                                </div>
                            </div>
                            <h5><b>Description</b></h5>
                            <textarea name="" class="rich-text" placeholder="Description..."></textarea>
                            <div>
                                <button type="submit" class="btn btn-success">Publier le document</button>
                            </div>
                        </form>

                        <form action="#" id="formulaire-outils" enctype="multipart/form-data" class="multi-choice-formulaires hidden">
                            <h4><b>Publier un outil</b></h4>
                            <div class="row">
                                <div class="col-sm-9">
                                    <input type="text" placeholder="Titre" class="form-input" name="titre" id="titre" required="required">
                                </div>
                                <div class="col-sm-3">
                                    <label class="btn btn-block btn-success" style="color: #fff">
                                        <i class="fa fa-file-pdf-o"></i> &nbsp; Choisir un document
                                        <input type="file" class="hidden">
                                    </label>
                                </div>
                            </div>
                            <h5><b>Description</b></h5>
                            <textarea name="" class="rich-text" placeholder="Description..."></textarea>
                            <div>
                                <button type="submit" class="btn btn-success">Publier l'outil</button>
                            </div>
                        </form>

                        <form action="#" id="formulaire-videos" class="multi-choice-formulaires hidden">
                            <h4><b>Publier une vidéo</b></h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Titre" class="form-input" name="titre" id="titre" required="required">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Lien vidéo (Youtube, DailyMotion, Vimeo , ...)" class="form-input" name="titre" id="titre" required="required">
                                </div>
                            </div>
                            <h5><b>Description</b></h5>
                            <textarea name="" class="rich-text" placeholder="Description..."></textarea>
                            <div>
                                <button type="submit" class="btn btn-success">Publier la vidéo</button>
                            </div>
                        </form>
                    </div>
                    <h3><b>Tous les fichiers</b></h3>
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
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th width="10%">Image</th>
                                <th width="60%">Titre</th>
                                <th width="10%">Type</th>
                                <th>Date</th>
                            </tr>
                            <?php
                            $demo_file_type = array(
                                array(
                                    "Photo",
                                    "admin-edit-photo.php"
                                ),
                                array(
                                    "Vidéo",
                                    "admin-edit-video.php"
                                ),
                                array(
                                    "Document",
                                    "admin-edit-document.php"
                                ),
                                array(
                                    "Outil",
                                    "admin-edit-outil.php"
                                ),
                            );
                            $demo_rand_num = null;
                            ?>
                            <?php for ($i =0; $i<10; $i++):?>
                                <?php $demo_rand_num = rand(0,3);?>
                                <tr class="article">
                                    <td><img src="assets/images/association/1.jpg" class="img-responsive" alt="Asso-Gabon"></td>
                                    <td><a href="<?php echo $demo_file_type[$demo_rand_num][1];?>">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a></td>
                                    <td><?php echo $demo_file_type[$demo_rand_num][0];?></td>
                                    <td class="date"><?php echo afficher_date('2017-07-29 10:22:29');?></td>
                                </tr>
                            <?php endfor;?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php include 'inc/footer.php'?>