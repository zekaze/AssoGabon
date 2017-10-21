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
                            </div>
                        </div>
                    </div>
                </section>

                <div class="detail-asso">
                    <h3><b>Paramètres de votre compte</b></h3>
                    <form action="" class="formulaire">
                        <label style="display: block; margin-bottom: 5px">
                            <input type="checkbox" style="margin-right:10px;font-size:14px !important;" name="alerte_mail">
                            Activer les notification par mail
                        </label>
                        Vous récevrez des notifications des messages de contact sur votre Email 1 configurable <a
                            href="admin-info-generales.php">ici</a>.

                        <label style="display: block; margin-bottom: 5px">
                            <input type="checkbox" style="margin-right:10px;font-size:14px !important;" name="alerte_mail">
                            Activer les notification par mail
                        </label>
                        Vous récevrez des notifications des messages de contact sur votre Email 1 configurable <a
                            href="admin-info-generales.php">ici</a>.

                        <div>
                            <button type="submit" class="btn btn-success">Mettre à jour</button>
                        </div>
                    </form>

                    <h3><b>Changement de mot de passe</b></h3>
                    <div class="alert alert-info">
                        <i class="fa fa-info"></i> &nbsp; Le mot de passe doit contenir au minimum 8 caractères
                    </div>
                    <form action="" class="formulaire">
                        <label>Ancien mot de passe</label>
                        <input type="password" class="form-input" name="sc_old_password" id="sc_old_password" placeholder="Saisissez votre ancien mot de passe" required="required">

                        <label>Mot de passe</label>
                        <input type="password" class="form-input" name="sc_new_password" id="sc_new_password" placeholder="Saisissez votre nouveau mot de passe" required="required">

                        <label>Confirmation</label>
                        <input type="password" class="form-input" name="sc_confirm_new_password" id="sc_confirm_new_password" placeholder="Confirmez votre nouveau mot de passe" required="required">
                        <div>
                            <button type="submit" class="btn btn-success">Mettre à jour</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

<?php include 'inc/footer.php'?>