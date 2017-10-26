<?php include 'inc/header.php'?>

    <section class="header-container" style="background-image:url('https://i.ytimg.com/vi/mcC-fNVO3DM/maxresdefault.jpg'); background-size: cover ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2><b class="text-white">Forum</b></h2>
                        <ol class="header-text">
                            <li><a href="index.php">Accueil</a> </li>
                            <li><a href="#">Communication</a> </li>
                            <li><a href="forum.php">Forum</a> </li>
                        </ol>
                </div>
            </div>
        </div>
    </section>


    <section id="main-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 page-section" style="background-color: white">
                    <div class="head2">
                        <h3><b class="text-blue">Thématique</b></h3>
                    </div>
                    <div class="detail_discussion">
                        <div class="auteur_discussion"><i class="fa fa-user fa-2x"></i> Nom de l'auteur du sujet</div>
                        <div class="sujet   ">
                            <div class="date-publication">
                                <?php $date_publication = "22-07-2017 11:20:07";
                                echo 'Publié le : '.afficher_date($date_publication); ?>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aliquam aliquid animi doloremque enim facere modi soluta! Accusamus, aspernatur beatae dignissimos eveniet facere?</p>
                        </div>
                    </div>

                    <div class="liste-reponses">
                        <?php for($i =0; $i < 10; $i++):?>
                            <div class="row">
                                <div class="block_reponse">
                                    <div class="col-sm-2 text-center">
                                        <i class="fa fa-user fa-2x"></i>
                                        <div class="nom">Nom de l'intervenant</div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="message">
                                            <div class="date-publication">
                                                <?php $date_publication = "22-07-2017 11:20:07";
                                                echo afficher_date($date_publication); ?>
                                            </div>

                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, blanditiis culpa exercitationem expedita, facere illum neque nostrum omnis provident ratione reiciendis saepe, suscipit voluptas? Ad aliquam culpa laborum quis ullam?
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <a href="#repondre" class="btn btn-sm bg_green anchor" style="color: #fff">Répondre</a>
                                    </div>
                                </div>
                            </div>
    <?php endfor;?>

                    </div>
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
                                <a href="#" aria-label="Next"> <span aria-hidden="true"><i class="fa fa-caret-right"></i></span> </a>
                            </li>

                            <li>
                                <span class="record" >10 sur 137</span>
                            </li>
                        </ul>

                    </div>

                    <form class="contact-form" id="repondre" action="">
                        <div>
                            <textarea name="libelle" class="rich-text" id="libelle" required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-md">Publier</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <div class="widget-heading">
                            <h4><b class="text-blue">Thématiques</b>  de discussion</h4>
                        </div>
                        <ul class="themes">
                            <li><a href="forum.php"><i class="fa fa-caret-right"></i> Education</a></li>
                            <li><a href="forum.php"><i class="fa fa-caret-right"></i> Santé </a></li>
                            <li><a href="forum.php"><i class="fa fa-caret-right"></i> Droits de l'homme</a></li>
                            <li><a href="forum.php"><i class="fa fa-caret-right"></i> Economie social et solidaire / AGR</a></li>
                            <li><a href="forum.php"><i class="fa fa-caret-right"></i> Environement</a></li>
                            <li><a href="forum.php"><i class="fa fa-caret-right"></i> Education</a></li>
                            <li><a href="forum.php"><i class="fa fa-caret-right"></i> Santé</a></li>
                            <li><a href="forum.php"><i class="fa fa-caret-right"></i> Droits de l'homme</a></li>
                            <li><a href="forum.php"><i class="fa fa-caret-right"></i> Economie social et solidaire / AGR</a></li>
                            <li><a href="forum.php"><i class="fa fa-caret-right"></i> Environement</a></li>
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
                </div>
            </div>
        </div>
    </section>

<?php include 'inc/footer.php'?>