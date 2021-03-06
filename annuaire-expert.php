<?php include 'inc/header.php'?>

    <section class="header-container" style="background-image:url('assets/images/bg/1.jpg'); background-size: cover ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2><b class="text-white">Annuaire</b> des Experts</h2>
                        <ol class="header-text">
                            <li><a href="index.php">Accueil</a> </li>
                            <li><a href="#">Associations & Expert</a> </li>
                            <li class="active">Annuaire des Experts</li>
                        </ol>
                </div>
            </div>
        </div>
    </section>


    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-section"  style="background-color: white">
                        <div class="head2">
                            <h3><b class="text-blue">Rechercher</b> un expert</h3>
                        </div>

                        <div class="search-form-contaner">
                            <form action="" class="barre-recherche">
                                <input type="text" class="form-input" name="keyword"
                                       placeholder="Rechercher un nom / une ville / une province / un secteur d'activité / etc..." value="">
                                <button type="button" class="btn btn-default btn-search-submit">Rechercher</button>
                            </form>

                            <form action=""  id="recherche-alphabetique">
                                <ul class="liste liste-horizontale">
                                    <?php
                                    $letters = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
                                    foreach ($letters as $letter):
                                        $set_active = isset($_GET['lettre']) && $letter == $_GET['lettre'] ? 'class="active"' : null;
                                        ?>

                                        <li><label <?php echo $set_active;?>><?php echo $letter;?><input type="radio" name="lettre" class="hidden" value="<?php echo $letter;?>"></label></li>
                                    <?php endforeach; ?>
                                </ul>
                            </form>

                            <div class="list-asso">
                                <?php for ($i = 0; $i < 10; $i++): ?>
                                    <div class="blog-post">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="expert.php">
                                                    <img src="assets/images/experts/1.jpg" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="col-sm-8">
                                                <h3 class="post-title">
                                                    <a href="expert.php">Nom de l'expert</a>
                                                </h3>

                                                <div class="post-info">Fonction et entreprise</div>

                                                <p class="post-details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit atque repellat est molestiae perferendis.</p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="widget">
                        <div class="widget-heading">
                            <h4>Rechercher par <b class="text-blue">thèmes</b></h4>
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
                                <a href="expert.php">
                                    Nom de l'expert
                                </a>
                            </h3>
                            <div class="post-info">
                                <a href="">Fonction et entreprise</a>
                            </div>

                            <p class="post-details ">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit
                                atque repellat est molestiae perferendis.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'inc/footer.php'?>