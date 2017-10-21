<?php include 'inc/header.php'?>

    <section class="header-container" style="background-image:url('assets/images/bg/1.jpg'); background-size: cover ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-7 co-xs-12 text-center">
                    <h2><b class="text-white">Documents</b></h2>
                    <div >
                        <ol class="header-text">
                            <li><a href="#">Accueil</a> </li>
                            <li><a href="#">Ressources</a> </li>
                            <li class="active">Documents</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="page-section "  style="background-color: white">
                        <div class="head2">
                            <h3><b class="text-blue">Rechercher</b> un document</h3>
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




                            <div class="col-md-12 col-sm-12 col-xs-12  nopadding list-document">

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
                                            <span class="record" >20 sur 137</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="liste_documents">
                                    <?php for($i = 0; $i <= 20; $i++):?>
                                        <div class="document">
                                            <div class="blog-post">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <h3 class="post-title">
                                                        <i class="fa fa-file-pdf-o"></i>  Nom du document
                                                    </h3>

                                                    <div class="post-info">
                                                        <span class="taille"><b>155</b> Ko</span>
                                                        <b>25</b> Téléchargements
                                                        <a title="Télécharger" href="#" onclick="" class="dowload "><i class="fa fa-download "></i></a>
                                                    </div>

                                                    <p class="post-details">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque tempora odit
                                                    </p>
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
                                            <span class="record" >20 sur 137</span>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 nopadding">
                    <div class="widget">
                        <div class="widget-heading">
                            <h4><b class="text-blue">Rechercher par</b> catégorie</h4>
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

                    <div class="widget">
                        <h4><b class="text-green">Regard sur</b>...</h4>

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