<?php include 'inc/header.php'?>

    <section class="header-container" style="background-image:url('assets/images/bg/1.jpg'); background-size: cover ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2><b class="text-white">Partenaires</b></h2>
                        <ol class="header-text">
                            <li><a href="#">Accueil</a> </li>
                            <li><a href="#">Projets</a> </li>
                            <li class="active">Partenaires</li>
                        </ol>
                </div>
            </div>
        </div>
    </section>


    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="page-section "  style="background-color: white">
                        <div class="head2">
                            <h3><b class="text-blue">Rechercher</b> un partenaire</h3>
                        </div>

                        <div class="search-form-contaner">
                            <form action="" class="barre-recherche">
                                <input type="text" class="form-input" name="keyword"
                                       placeholder="Que recherchez vous?" value="">
                                <button type="button" class="btn btn-default btn-search-submit">Rechercher</button>
                            </form>

                            <div class="list-document row-item">
                                <?php for ($i = 0; $i < 10; $i++): ?>
                                    <a href="#" class="col-6 list-item partenaire">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <img src="assets/images/partenaires/ab-fr.jpg" class="img-responsive"
                                                     alt="">
                                            </div>
                                            <div class="col-xs-8">
                                                <strong> Ambassade de France au Gabon</strong>
                                                <div>105 rue Kaze, Libreville, Gabon </div>
                                                <div>amb-fr@yahoo.fr/+241 01649525</div>
                                            </div>
                                        </div>
                                    </a>
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