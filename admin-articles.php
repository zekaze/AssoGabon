<?php include 'inc/header.php' ?>
    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container-fluid">
            <div class="col-lg-2 col-md-3">
                <?php include_once 'inc/admin-sidebar.php';?>
            </div>
            <div class="col-lg-10 col-md-9">
                <?php include_once 'inc/admin-header.php';?>

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