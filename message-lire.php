<?php include 'inc/header.php' ?>
    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container-fluid">
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
                                        <li><a href="admin-index.php">Accueil</a> </li>
                                        <li class="active">Messages</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="accordion btn" data-accordion>
                            <div data-control><i class="fa fa-camera"></i> &nbsp; Photo de couverture</div>
                            <div data-content>
                                <a href="#"><i class="fa fa-crop"></i> &nbsp; Ajuster cette photo</a>
                                <a href="#"><i class="fa fa-photo"></i> &nbsp; Choisir une photo de couverture</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="detail-asso">
                    <div class="header-2">
                        <a href="admin-messages.php" class="btn"><span class="fa fa-caret-left"></span> Retour aux messages</a>
                    </div>
                    <div class="header-2">
                        <h3>Objet du message</h3>

                        <div class="flex-row">
                            <div class="expediteur">Nom de l'expéditeur (mail@adresse.com)</div>
                            <div class="date text-right" style="width: 250px"><?php echo afficher_date('2017-07-29 10:22:29');?></div>
                        </div>
                    </div>
                    <div class="header-2">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid asperiores ex, fuga natus nostrum perspiciatis quis quo unde. Adipisci autem eaque et in nisi praesentium quos repudiandae rerum similique.
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet delectus deleniti fugiat, fugit, inventore ipsa iure, libero minus nam perspiciatis provident repellat suscipit temporibus vitae! Accusantium assumenda minus quisquam.
                    </div>
                    <form action="" class="formulaire">
                        <textarea name="" class="rich-text" placeholder="Votre message..."></textarea>
                        <button type="submit" class="btn submit-button">Envoyer</button>
                    </form>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-9">

                </div>

            </div>
        </div>
    </section>

<?php include 'inc/footer.php'?>