<?php include 'inc/header.php'?>
    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container">
            <section class="header-container assoc" style="background-image:url('assets/images/bg/1.jpg'); background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2><b class="text-white">Nom de l'association</b></h2>
                            <span class="type assoc"><i class="fa fa-group"></i> Association</span>
                            <div>
                                <ol class="header-text">
                                    <li class="texte-couverture">Bonjour, JA GABON vous accueille à bras ouverts si vous avez un projet de création d'entreprise</li>
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
                    <div class="slogan">Slogan de l'association</div>
                    <div class="detail-asso">
                            <ul class="tab-menu assoc">
                                <li <?php echo kz_set_active('general');?>><a href="?s=general"><i class="fa fa-home"></i> Accueil</a></li>
                                <li <?php echo kz_set_active('histoire');?>><a href="?s=histoire"><i class="fa fa-clock-o"></i> Histoire</a></li>
                                <li <?php echo kz_set_active('membres');?>><a href="?s=membres"><i class="fa fa-users"></i> Membres de l'association</a></li>
                            </ul>

                        <?php include_once kz_afficher_contenu();?>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="widget">
                        <div class="widget-heading">
                            <h4>Partager <b class="text-green">cette page</b></h4>
                        </div>
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>

                    <div class="widget nopadding" style="background-image: url('assets/images/experts/1.jpg')">
                        <div class="over-lay">
                            <h2>Déjà 137 Associations inscrites</h2>
                            <p>
                                Etiam vel faucibus consectetura dolor at vestibulum magna mauris faucibus consectetura
                            </p>

                            <div class="foot" align="center">
                                <a href="connexion.php" class="tt-btn btn-default">Inscrivez-vous</a>
                            </div>

                        </div>
                    </div>


                    <div class="widget">
                        <div class="space-30"></div>

                        <div class="widget-heading">
                            <h4><b class="text-green">Regard sur</b>...</h4>
                        </div>
                        <div class="row">
                            <?php for ($i = 0; $i < 2; $i++):?>
                                <div class="col-md-12 col-sm-6">
                                    <div class="blog-post">
                                        <div class="post-img">
                                            <a href="association.php">
                                                <img src="assets/images/blog/1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>

                                        <h3 class="post-title">
                                            <a href="association.php">Nom de l'association</a>
                                        </h3>

                                        <p class="post-details ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odi atque repellat est molestiae perferendis.</p>
                                    </div>
                                </div>
                            <?php endfor;?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php include 'inc/footer.php'?>