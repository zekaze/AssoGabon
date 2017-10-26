<?php include 'inc/header.php'?>

    <section class="header-container" style="background-image:url('assets/images/bg/1.jpg'); background-size: cover ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-7 co-xs-12 text-center">
                    <h2><b class="text-white">Actualités & Evénements</b></h2>
                    <div >
                        <ol class="header-text">
                            <li><a href="#">Accueil</a> </li>
                            <li><a href="#">Ressources</a> </li>
                            <li class="active">Actualités & Evénements</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="page-section "  style="background-color: white">
                        <div class="head2">
                            <h3><b class="text-blue">Rechercher</b> une actualité ou un événement</h3>
                        </div>

                        <div class="search-form-contaner">
                            <form class="form-inline">
                                <div class="col-md-9 col-sm-9 col-xs-9 nopadding">
                                    <input type="text" class="form-control" name="keyword" placeholder="Que recherchez vous?" value="">
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-2 nopadding">
                                    <div class="form-group form-action">
                                        <button type="button" class="btn btn-default btn-search-submit">Rechercher </button>
                                    </div>
                                </div>
                            </form>


                            <div class="col-md-12 col-sm-12 col-xs-12  nopadding list-document">

                                <div class="col-md-6 col-sm-6 col-xs-12" >
                                    <div class="blog-post">
                                        <div class="post-img hidden-250" >
                                            <a href="detail-articles.php">
                                                <img src="assets/images/opportunites/1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <?php echo  afficher_date('2017-09-22 07:00')?>
                                        </div>
                                        <div class="post-info ">
                                            <b class="text-blue"><?php echo  afficher_date_event('2017-09-31 07:00')?></b> / Lieu : JA Gabon
                                        </div>
                                        <h3 class="post-title">
                                            <a href="#">
                                                <b class="text-green">Evénement</b> : Titre de l'événement
                                            </a>
                                        </h3>
                                        <p class="post-excerpt">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis.
                                            Quisquam tempora odit atque repellat est molestiae perferendis <a href="detail-articles.php">[...]</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" >
                                    <div class="blog-post">
                                        <div class="post-img hidden-250" >
                                            <a href="detail-articles.php">
                                                <img src="assets/images/experts/1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <?php echo  afficher_date('2017-09-22 07:00')?>
                                        </div>

                                        <div class="post-info">
                                            &nbsp;
                                        </div>

                                        <h3 class="post-title">
                                            <a href="#">
                                                <b class="text-green">Actualité</b> : Titre de l'actualité
                                            </a>
                                        </h3>
                                        <p class="post-excerpt">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis.
                                            Quisquam tempora odit atque repellat est molestiae perferendis <a href="detail-articles.php">[...]</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" >
                                    <div class="blog-post">
                                        <div class="post-img hidden-250" >
                                            <a href="detail-articles.php">
                                                <img src="assets/images/opportunites/1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <?php echo  afficher_date('2017-09-22 07:00')?>
                                        </div>
                                        <div class="post-info ">
                                            <b class="text-blue"><?php echo  afficher_date_event('2017-09-31 07:00')?></b> / Lieu : JA Gabon
                                        </div>
                                        <h3 class="post-title">
                                            <a href="#">
                                                <b class="text-green">Evénement</b> : Titre de l'événement
                                            </a>
                                        </h3>
                                        <p class="post-excerpt">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis.
                                            Quisquam tempora odit atque repellat est molestiae perferendis <a href="detail-articles.php">[...]</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" >
                                    <div class="blog-post">
                                        <div class="post-img hidden-250" >
                                            <a href="detail-articles.php">
                                                <img src="assets/images/experts/1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <?php echo  afficher_date('2017-09-22 07:00')?>
                                        </div>

                                        <div class="post-info">
                                            &nbsp;
                                        </div>

                                        <h3 class="post-title">
                                            <a href="#">
                                                <b class="text-green">Actualité</b> : Titre de l'actualité
                                            </a>
                                        </h3>
                                        <p class="post-excerpt">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis.
                                            Quisquam tempora odit atque repellat est molestiae perferendis <a href="detail-articles.php">[...]</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" >
                                    <div class="blog-post">
                                        <div class="post-img hidden-250" >
                                            <a href="detail-articles.php">
                                                <img src="assets/images/opportunites/1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <?php echo  afficher_date('2017-09-22 07:00')?>
                                        </div>
                                        <div class="post-info ">
                                            <b class="text-blue"><?php echo  afficher_date_event('2017-09-31 07:00')?></b> / Lieu : JA Gabon
                                        </div>
                                        <h3 class="post-title">
                                            <a href="#">
                                                <b class="text-green">Evénement</b> : Titre de l'événement
                                            </a>
                                        </h3>
                                        <p class="post-excerpt">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis.
                                            Quisquam tempora odit atque repellat est molestiae perferendis <a href="detail-articles.php">[...]</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" >
                                    <div class="blog-post">
                                        <div class="post-img hidden-250" >
                                            <a href="detail-articles.php">
                                                <img src="assets/images/experts/1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <?php echo  afficher_date('2017-09-22 07:00')?>
                                        </div>

                                        <div class="post-info">
                                            &nbsp;
                                        </div>

                                        <h3 class="post-title">
                                            <a href="#">
                                                <b class="text-green">Actualité</b> : Titre de l'actualité
                                            </a>
                                        </h3>
                                        <p class="post-excerpt">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis.
                                            Quisquam tempora odit atque repellat est molestiae perferendis <a href="detail-articles.php">[...]</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" >
                                    <div class="blog-post">
                                        <div class="post-img hidden-250" >
                                            <a href="detail-articles.php">
                                                <img src="assets/images/opportunites/1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <?php echo  afficher_date('2017-09-22 07:00')?>
                                        </div>
                                        <div class="post-info ">
                                            <b class="text-blue"><?php echo  afficher_date_event('2017-09-31 07:00')?></b> / Lieu : JA Gabon
                                        </div>
                                        <h3 class="post-title">
                                            <a href="#">
                                                <b class="text-green">Evénement</b> : Titre de l'événement
                                            </a>
                                        </h3>
                                        <p class="post-excerpt">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis.
                                            Quisquam tempora odit atque repellat est molestiae perferendis <a href="detail-articles.php">[...]</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" >
                                    <div class="blog-post">
                                        <div class="post-img hidden-250" >
                                            <a href="detail-articles.php">
                                                <img src="assets/images/experts/1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <?php echo  afficher_date('2017-09-22 07:00')?>
                                        </div>

                                        <div class="post-info">
                                            &nbsp;
                                        </div>

                                        <h3 class="post-title">
                                            <a href="#">
                                                <b class="text-green">Actualité</b> : Titre de l'actualité
                                            </a>
                                        </h3>
                                        <p class="post-excerpt">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis.
                                            Quisquam tempora odit atque repellat est molestiae perferendis <a href="detail-articles.php">[...]</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" >
                                    <div class="blog-post">
                                        <div class="post-img hidden-250" >
                                            <a href="detail-articles.php">
                                                <img src="assets/images/opportunites/1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <?php echo  afficher_date('2017-09-22 07:00')?>
                                        </div>
                                        <div class="post-info ">
                                            <b class="text-blue"><?php echo  afficher_date_event('2017-09-31 07:00')?></b> / Lieu : JA Gabon
                                        </div>
                                        <h3 class="post-title">
                                            <a href="#">
                                                <b class="text-green">Evénement</b> : Titre de l'événement
                                            </a>
                                        </h3>
                                        <p class="post-excerpt">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis.
                                            Quisquam tempora odit atque repellat est molestiae perferendis <a href="detail-articles.php">[...]</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12" >
                                    <div class="blog-post">
                                        <div class="post-img hidden-250" >
                                            <a href="detail-articles.php">
                                                <img src="assets/images/experts/1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <?php echo  afficher_date('2017-09-22 07:00')?>
                                        </div>

                                        <div class="post-info">
                                            &nbsp;
                                        </div>

                                        <h3 class="post-title">
                                            <a href="#">
                                                <b class="text-green">Actualité</b> : Titre de l'actualité
                                            </a>
                                        </h3>
                                        <p class="post-excerpt">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis.
                                            Quisquam tempora odit atque repellat est molestiae perferendis <a href="detail-articles.php">[...]</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <div class="widget-heading">
                            <h4><b class="text-blue">Catégories</b></h4>
                        </div>
                        <ul class="themes">
                            <li> <a href=""><i class="fa fa-caret-right"></i> Education  </a> </li>
                            <li> <a href=""><i class="fa fa-caret-right"></i> Santé </a> </li>
                            <li> <a href=""><i class="fa fa-caret-right"></i> Droits de l'homme </a> </li>
                            <li> <a href=""><i class="fa fa-caret-right"></i> Economie social et solidaire / AGR </a> </li>
                            <li> <a href=""><i class="fa fa-caret-right"></i> Environement </a> </li>
                            <li> <a href=""><i class="fa fa-caret-right"></i> Education  </a> </li>
                            <li> <a href=""><i class="fa fa-caret-right"></i> Santé </a> </li>
                            <li> <a href=""><i class="fa fa-caret-right"></i> Droits de l'homme </a> </li>
                            <li> <a href=""><i class="fa fa-caret-right"></i> Economie social et solidaire / AGR </a> </li>
                            <li> <a href=""><i class="fa fa-caret-right"></i> Environement </a> </li>
                        </ul>
                    </div>

                    <div class="widget nopadding" style="background-image: url('assets/images/experts/1.jpg')">
                        <div class="over-lay blue">
                            <h2>Proposez votre expertise</h2>
                            <p>
                                Etiam vel faucibus consectetura dolor at vestibulum magna mauris faucibus consectetura
                            </p>

                            <div class="foot" align="center">
                                <a href="#" class="tt-btn btn-default">Rejoignez-nous</a>
                            </div>

                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-heading">
                            <h4><b class="text-blue">Newsletter</b></h4>
                        </div>
                        <div class="search-blog newsletter">
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control" placeholder="Votre adresse mail">
                            </div>
                            <div>
                                <button  class="tt-btn btn-default">S'inscrire</button>
                            </div>
                        </div>
                    </div>

                    <div class="widget nopadding" style="background-image: url('assets/images/experts/1.jpg')">
                        <div class="over-lay">
                            <h2>Déjà 137 Associations inscrites</h2>
                            <p>
                                Etiam vel faucibus consectetura dolor at vestibulum magna mauris faucibus consectetura
                            </p>

                            <div class="foot" align="center">
                                <a href="#" class="tt-btn btn-default">Inscrivez-vous</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'inc/footer.php'?>