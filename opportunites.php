<?php include 'inc/header.php'?>

    <section class="header-container" style="background-image:url('assets/images/bg/1.jpg'); background-size: cover ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2><b class="text-white">Opportunités</b></h2>
                    <ol class="header-text">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Projets</a></li>
                        <li class="active">Opportunités</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-section" style="background-color: white">
                        <div class="head2">
                            <h3><b class="text-blue">Rechercher</b> une opportunité</h3>
                        </div>

                        <div class="search-form-contaner">
                            <form action="" class="barre-recherche">
                                <input type="text" class="form-input" name="keyword"
                                       placeholder="Que recherchez vous?" value="">
                                <button type="button" class="btn btn-default btn-search-submit">Rechercher</button>
                            </form>

                            <div class="list-document">
                                <?php for ($i = 0; $i < 10; $i++): ?>
                                    <div class="blog-post">
                                        <div class="post-img hidden-300">
                                            <a href="detail-opportunite.php">
                                                <img src="assets/images/opportunites/1.jpg" alt=""
                                                     class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="post-info">
                                            <?php echo afficher_date('2017-09-22 07:00') ?>
                                        </div>
                                        <h3 class="post-title">
                                            <a href="#">
                                                Titre de l'opportunité
                                            </a>
                                        </h3>
                                        <p class="post-excerpt">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque
                                            tempora odit atque repellat est molestiae perferendis.
                                            Quisquam tempora odit atque repellat est molestiae perferendis <a
                                                    href="detail-opportunite.php">[...]</a>
                                        </p>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="widget">
                        <div class="widget-heading">
                            <h4><b class="text-blue">Rechercher par</b> catégories</h4>
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