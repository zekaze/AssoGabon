<?php include 'inc/header.php'?>
    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container">
            <section class="header-container assoc" style="background-image:url('assets/images/bg/1.jpg'); background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2><b class="text-white">Nom de l'association</b></h2>
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
                    <div class="detail-asso">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="title">
                                    <h3><b class="text-green">à</b> Propos</h3>
                                </div>
                                <div class="blog-post">
                                    <div class="row">
                                        <div class="col-sm-4">
                                                <img src="assets/images/blog/1.jpg" alt="" class="img-responsive">
                                        </div>

                                        <div class="col-sm-8">
                                            <p class="post-details">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit
                                                atque repellat est molestiae perferendis.<br>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit
                                                atque repellat est molestiae perferendis.
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit
                                                atque repellat est molestiae perferendis. <br> <br>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit
                                                atque repellat est molestiae perferendis.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-7 col-sm-6">
                                        <div class="title">
                                            <h3><b class="text-green">thèmes</b> d'intervention</h3>
                                        </div>

                                        <ul class="ul-list">
                                            <li> Protection des personnes vulnérables</li>
                                            <li> Protection de l'enfance</li>
                                            <li> Droits de l'homme</li>
                                        </ul>
                                    </div>

                                    <div class="col-md-5 col-sm-6">
                                        <div class="title">
                                            <h3><b class="text-green">contacts</b></h3>
                                        </div>

                                        <ul class="ul-list">
                                            <li>+241 02 22 33 44 / +241 06 55 77 99</li>
                                            <li> <a href="mailto:email@yahoo.fr">email@yahoo.fr</a></li>
                                            <li>Libreville, Gabon</li>
                                            <li><a href="http://digip-apprifque.net">http://digip-apprifque.net</a></li>
                                        </ul>
                                    </div>
                                </div>

                                    <div class="title">
                                        <button id="owl-4-next"  class="fa fa-chevron-right pull-right"></button>
                                        <button id="owl-4-prev"  class="fa fa-chevron-left pull-right"></button>
                                        <h3><b class="text-green">Actualités</b></h3>
                                    </div>

                                    <div class="owl-carousel-4">
                                        <?php for ($i = 0; $i < 8; $i++): ?>
                                            <div class="slide">
                                                <a href="detail-articles.php">
                                                    <div class="blog-post">
                                                        <div class="post-img">
                                                            <img src="assets/images/blog/1.jpg" alt="" class="img-responsive">
                                                        </div>

                                                        <h4 class="post-title">Sketch Designing Artists are beauty: A report</h4>

                                                        <div class="post-info">
                                                            13 / 09 / 2017
                                                        </div>

                                                        <p class="post-details ">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora
                                                            odit
                                                            atque repellat est molestiae perferendis.
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                        <?php endfor; ?>
                                    </div>


                                    <div class="title">
                                        <button id="owl-1-next"  class="fa fa-chevron-right pull-right"></button>
                                        <button id="owl-1-prev"  class="fa fa-chevron-left pull-right"></button>
                                        <h3><b class="text-green">multimédia</b></h3>
                                    </div>

                                    <div class="owl-carousel-1 pictures-gallery">
                                        <?php for ($i = 0; $i < 8; $i++): ?>
                                            <a href="assets/images/blog/1.jpg">
                                                <img src="assets/images/blog/1.jpg" alt="" class="img-responsive">
                                            </a>
                                        <?php endfor; ?>
                                    </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="title">
                                            <h3><b class="text-green">Projets</b></h3>
                                        </div>

                                        <ul class="ul-list">
                                            <li><a href="">Repellat est molestiae perferendis</a></li>
                                            <li><a href="">Repellat est molestiae perferendis</a></li>
                                            <li><a href="">Repellat est molestiae perferendis</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="title">
                                            <h3><b class="text-green">documents</b></h3>
                                        </div>

                                        <ul class="ul-list">
                                            <li><a href="">Repellat est molestiae perferendis<b>(2Mo)</b></a></li>
                                            <li><a href="">Repellat est molestiae perferendis<b>(2Ko)</b></a></li>
                                            <li><a href="">Repellat est molestiae perferendis<b>(2Go)</b></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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