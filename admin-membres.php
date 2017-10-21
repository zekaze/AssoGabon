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
                        <h3><b>Ajouter un membre</b></h3>

                    <div class="formulaire">

                    </div>
                    <h3><b>Membres enregistrés</b></h3>
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
                            <th width="25%">Nom</th>
                            <th width="25%">Fonction</th>
                            <th>Tél.</th>
                            <th>Email</th>
                            <th width=""></th>
                        </tr>
                        <?php for ($i = 0; $i < 10; $i++): ?>
                            <tr class="article">
                                <td>Nom du membre</td>
                                <td>Fonction au sein de l'association</td>
                                <td>+241 01 22 33 44</td>
                                <td>email@adresse.com</td>
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