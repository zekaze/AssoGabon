<?php include 'inc/header.php'?>

    <section class="header-container" style="background-image:url('assets/images/bg/1.jpg'); background-size: cover ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-7 co-xs-12 text-center">
                    <h2><b class="text-white">Foire aux questions</b></h2>
                    <div >
                        <ol class="header-text">
                            <li><a href="index.php">Accueil</a> </li>
                            <li><a href="#">Communication</a> </li>
                            <li class="active">FAQ</li>
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
                            <h3><b class="text-blue">Questions</b> les plus fréquentes</h3>
                        </div>
                        <p>Veuillez cliquer sur une question pour affiche la réponse</p>

                        <div class="faq">
                            <div data-accordion-group>
                                <?php for ($i = 0; $i < 10; $i++): ?>
                                    <div class="accordion" data-accordion>
                                        <div data-control>
                                            <div class="question">Question <?php echo $i+1;?> ?</div>
                                        </div>
                                        <div data-content>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam at consequuntur cum dolore doloremque, dolores ducimus eius esse eum laboriosam, libero minima neque quam quasi quod sunt temporibus ut.<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea est ipsum nesciunt perferendis velit! Dolorem exercitationem ipsum nihil nulla officiis quod ratione ullam. Doloremque ipsa nisi, quasi reiciendis temporibus voluptatem.</p>
                                                <p>eius esse eum laboriosam, libero minima neque quam quasi quod sunt temporibus ut.<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea est ipsum nesciunt perferendis velit! Dolorem exercitationem ipsum nihil nulla officiis quod ratione ullam. Doloremque ipsa nisi, quasi reiciendis temporibus voluptatem.</p>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
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
                            <h4><b class="text-green">Suggestion</b></h4>
                        </div>

                        <div class="nopadding">
                            <div class="blog-post">
                                <div class="post-img">
                                    <a href="association.php">
                                        <img src="assets/images/blog/1.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>

                                <h3 class="post-title">
                                    <a href="association.php">Nom de l'association</a>
                                </h3>
                                <p class="post-details ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora oditatque repellat est molestiae perferendis.</p>
                            </div>
                        </div>
                        <div class="nopadding">
                            <div class="blog-post">
                                <div class="post-img">
                                    <a href="association.php">
                                        <img src="assets/images/blog/1.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>

                                <h3 class="post-title">
                                    <a href="association.php">
                                        Nom de l'association
                                    </a>
                                </h3>

                                <p class="post-details ">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit
                                    atque repellat est molestiae perferendis.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include 'inc/footer.php'?>