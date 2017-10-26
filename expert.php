<?php include 'inc/header.php'?>
    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container">
            <section class="header-container assoc" style="background-image:url('assets/images/bg/1.jpg'); background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2><b class="text-white">Nom de l'expert</b></h2>
                            <span class="type expert"><i class="fa fa-suitcase"></i> Expert</span>
                            <div>
                                <ol class="header-text">
                                    <li class="texte-couverture">Texte de couverture</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="detail-asso">
                        <ul class="tab-menu exp">
                            <li <?php echo kz_set_active('general');?>><a href="?s=general&u=expert"><i class="fa fa-home"></i> Accueil</a></li>
                            <li <?php echo kz_set_active('documents');?>><a href="?s=documents&u=expert"><i class="fa fa-file"></i> Documents</a></li>
                            <li <?php echo kz_set_active('contact');?>><a href="?s=contact&u=expert"><i class="fa fa-envelope-o"></i> Contacter</a></li>
                        </ul>

                        <?php include kz_afficher_contenu('expert');?>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="widget">
                        <div class="widget-heading">
                            <h4>Partager <b class="text-blue">cette page</b></h4>
                        </div>
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>

                    <div class="widget nopadding" style="background-image: url('assets/images/experts/1.jpg')">
                        <div class="over-lay blue">
                            <h2>Proposez votre expertise</h2>
                            <p>Etiam vel faucibus consectetura dolor at vestibulum magna mauris faucibus consectetura</p>

                            <div class="foot" align="center">
                                <a href="connexion.php" class="tt-btn btn-default">Rejoignez-nous</a>
                            </div>

                        </div>
                    </div>


                    <div class="widget">
                        <div class="space-30"></div>

                        <div class="widget-heading">
                            <h4><b class="text-blue">L'expert</b> du moment</h4>
                        </div>
                                    <div class="blog-post">
                                        <div class="post-img">
                                            <a href="expert.php">
                                                <img src="assets/images/experts/1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>

                                        <h3 class="post-title">
                                            <a href="expert.php">Nom de l'expert</a>
                                        </h3>
                                        <div class="post-info">Fonction et entreprise</div>

                                        <p class="post-details ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odi atque repellat est molestiae perferendis.</p>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'inc/footer.php'?>