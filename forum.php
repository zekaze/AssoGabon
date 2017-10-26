<?php include 'inc/header.php'?>

    <section class="header-container" style="background-image:url('https://i.ytimg.com/vi/mcC-fNVO3DM/maxresdefault.jpg'); background-size: cover ">
        <div class="container">
            <div class="row">
                <div class="col-md-1 text-center">
                    <h2><b class="text-white">Forum</b></h2>
                        <ol class="header-text">
                            <li><a href="index.php">Accueil</a> </li>
                            <li><a href="#">Communication</a> </li>
                            <li class="active">Forum</li>
                        </ol>
                </div>
            </div>
        </div>
    </section>


    <section id="main-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-9" style="background-color: white">
                    <div class="head2">
                        <h3><b class="text-blue">Discussions</b> par thème</h3>
                    </div>

                    <div class="search-form-contaner">
                        <form action="" class="barre-recherche">
                            <input type="text" class="form-input" name="keyword"
                                   placeholder="Rechercher un sujet" value="">
                            <button type="button" class="btn btn-default btn-search-submit">Rechercher</button>
                        </form>


                        <div class="list-asso">
                            <?php $thematiques = array(
                                "Education" => "https://www.globe.gov/image/image_gallery?width=225&uuid=2cc8e051-6ec0-4b78-a773-e07ecd3c7304&groupId=383724&t=1347561805420",
                                "Santé" => "http://www.blog.kpmgafrica.com/wp-content/uploads/2013/07/blk-dr-hospital-bed-behind-e1374827323345.jpg",
                                "Droits de l'homme" => "https://media.licdn.com/mpr/mpr/AAEAAQAAAAAAAAiMAAAAJDkyODkxNjg1LTExMzQtNGM2Yy05MmNiLTVkM2E1OWU2YjY2MA.jpg",
                                "Economie sociale et solidaire / AGR" => "http://cdn.24.co.za/files/Cms/General/d/4885/6c9bc7b42e854435bf42b129a9523a08.jpg",
                                "Environnement" => "http://www.africanimpact.com/blog/wp-content/uploads/2012/03/Token-picture-lr.jpg",
                                "Protection des personnes vulnerables" => "http://www.nisgrenada.org/images/sized/downloads/Invalidity_-281x281.jpg",
                                "Insertion de la jeunesse" =>"http://www.takepart.com/sites/default/files/styles/large/public/africa-digital-rennaissance-MAIN.jpg",
                                "Energie" => "http://www.un.org/africarenewal/sites/www.un.org.africarenewal/files/solar.jpg",
                                "Numérique" => "http://www.digital-impact-awards.com/wp-content/uploads/2016/07/Digital-Marketing-Agency-in-Delhi-India.jpg",
                                "Agriculture / élevage" => "http://venturesafrica.com/wp-content/uploads/2015/12/agriculture11.jpg",
                                "Protection de l'enfance" => "https://pbs.twimg.com/profile_images/660011945517555712/03_jzWac.jpg",
                            ); ?>

                            <?php foreach ($thematiques as $thematique => $photo): ?>
                                <div>
                                    <div class="nom_thematique text-blue"><?php echo $thematique; ?></div>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="photo_frame"><img src="<?php echo $photo; ?>" alt="Asso-Gabon"></div>
                                        </div>
                                        <div class="col-sm-7">
                                            <span class="discussion">
                                                <?php for ($i = 0; $i < 5; $i++): ?>
                                                    <div class="row">
                                                        <div class="col-md-8"><a href="discussion.php"><?php echo $i+1;?>. Sujet de la discussion</a></div>
                                                        <div class="col-md-4 compteur_commentaires">125 commentaires</div>
                                                    </div>
                                                <?php endfor; ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

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

                            <form class="contact-form" action="">
                                <div class="head2" id="poser-question">
                                    <h3><b class="text-blue">Poser une</b> question</h3>
                                </div>
                                <p>Veuillez renseigner les informations de votre question. Tous les champs sont obligatoires.</p>
                                <div>
                                    <label for="thematique">Thématique</label>
                                    <select class="form-input" id="thematique" name="thematique">
                                        <option value="1_Education">Education</option>
                                        <option value="2_Santé">Santé</option>
                                        <option value="3_Droits de l'homme">Droits de l'homme</option>
                                        <option value="4_Economie sociale et solidaire / AGR" selected="">Economie sociale et solidaire / AGR</option>
                                        <option value="5_Environnement">Environnement</option>
                                        <option value="6_Protection des personnes vulnerables">Protection des personnes vulnerables</option>
                                        <option value="7_Insertion de la jeunesse">Insertion de la jeunesse</option>
                                        <option value="8_Energie">Energie</option>
                                        <option value="9_Numérique">Numérique</option>
                                        <option value="10_Agriculture / élevage">Agriculture / élevage</option>
                                        <option value="11_Genre">Genre</option>
                                        <option value="12_Protection de l'enfance">Protection de l'enfance</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="nom">Nom</label>
                                    <input class="form-input" id="nom" name="nom" required type="text"
                                           placeholder="Votre nom et prénom">
                                </div>
                                <div>
                                    <label for="email">Adresse mail</label>
                                    <input class="form-input" id="email" name="email" required type="email"
                                           placeholder="Votre adresse mail">
                                </div>
                                <div>
                                    <label for="libelle">Votre question</label>
                                    <textarea name="libelle" class="rich-text" id="libelle" required></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-md">Poser votre question</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="sidebar hidden-xs" style="background-color: #fff; padding: 0 15px 15px">
                        <div class="head2">
                            <h3><b class="text-blue">Poser une</b> question</h3>
                        </div>
                        <p>Voulez-vous partager une opinion? Avez vous des question?</p>
                        <a href="#poser-question" class="btn btn-sm bg_green anchor" style="color: #fff">Poser une question ici</a>
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