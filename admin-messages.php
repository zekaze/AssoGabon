<?php include 'inc/header.php' ?>
    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-3">
                    <?php include_once 'inc/admin-sidebar.php';?>
                </div>
                <div class="col-lg-10 col-md-9">
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
                            <div class="accordion btn" data-accordion>
                                <div data-control><i class="fa fa-camera"></i> &nbsp; Photo de couverture</div>
                                <div data-content>
                                    <a href="#"><i class="fa fa-crop"></i> &nbsp; Ajuster cette photo</a>
                                    <a href="#"><i class="fa fa-photo"></i> &nbsp; Choisir une photo de couverture</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="detail-asso">
                        <div class="title">
                            <h3><b class="text-green">Messages</b></h3>
                        </div>

                        <p>Retrouvez ici tous les messages envoyés par les visiteurs de la page de votre
                            association.</p>

                        <div class="tableau">
                            <div class="row formulaire">
                                <div class="col-sm-3">
                                    <label class="hidden">Afficher éléments</label>
                                    <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-input"><option value="-1">Afficher tout</option><option value="10">10</option><option value="20">20</option><option value="80">80</option></select>
                                </div>
                                <div class="col-sm-9">
                                    <form action="">
                                        <label class="hidden">Rechercher&nbsp;:</label>
                                        <div class="flex-row">
                                            <input type="search" class="form-input" placeholder="Rechercher un message..." aria-controls="DataTables_Table_0" style="width: 80%">
                                            <button type="submit" class="btn" style="margin:0 0 15px"><i class="fa fa-search"></i></button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                            <?php for ($i = 0; $i < 10; $i++):?>
                                <a href="message-lire.php" class="tr">
                                    <div class="body">
                                        <div class="expediteur">Nom de l'expéditeur (mail@adresse.com)</div>
                                        <div class="objet">Objet du message</div>

                                    </div>
                                    <div class="date">
                                        <?php echo afficher_date('2017-07-29 10:22:29');?>
                                    </div>
                                </a>
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
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true"><i class="fa fa-caret-right"></i></span>
                                    </a>
                                </li>
                                <li><span class="record" >10 sur 137</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'inc/footer.php'?>