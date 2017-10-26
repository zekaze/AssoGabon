<?php include 'inc/header.php'?>
    <section class="header-container" style="background-image:url('assets/images/bg/1.jpg'); background-size: cover ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-7 co-xs-12 text-center">
                    <h2><b class="text-white">Résultats de recherche</b></h2>
                </div>
            </div>
        </div>
    </section>
    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div id="resultats-recherche">
                        <h4 class="page-title">Résultats de recherche pour: <i>"Expert en communication digitale"</i></h4>

                        <div class="compteur">25 résultats trouvés</div>

                        <div id="resultats">
                            <?php for($i = 0; $i < 10; $i++):?>
                                <a href="" class="resultat">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img src="assets/images/default.gif" alt="" class="img-responsive">
                                        </div>
                                        <div class="col-md-10">
                                            <div class="header">
                                                <h4 class="title">Titre de l'élément</h4>
                                                <div class="type-element">Type du résultat</div>
                                            </div>
                                            <div class="desc">Description de l'élément si disponible. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur.</div>
                                        </div>
                                    </div>
                                </a>
                            <?php endfor;?>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
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