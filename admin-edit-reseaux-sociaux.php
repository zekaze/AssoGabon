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
                            <div data-control><i class="fa fa-lg fa-camera"></i> &nbsp; Photo de couverture</div>
                            <div data-content>
                                <a href="#"><i class="fa fa-lg fa-crop"></i> &nbsp; Ajuster cette photo</a>
                                <a href="#"><i class="fa fa-lg fa-photo"></i> &nbsp; Choisir une photo de couverture</a>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="detail-asso">
                        <h3><b>Votre association sur les réseaux sociaux</b></h3>

                    <div class="formulaire">
                        <form action="">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label><i class="fa fa-lg fa-facebook-square" style="color: #2d5497"></i> Facebook
                                        <i>(Exemple: https://www.facebook.com/asso-gabon)</i></label>
                                    <input type="url" class="form-input" name="facebook" value="https://www.facebook.com/Juniorachievementgabon/" placeholder="Lien de votre  compte ou page Facebook">
                                </div>
                                <div class="col-sm-6">
                                    <label><i class="fa fa-lg fa-twitter-square" style="color: #00acf0"></i> Twitter <i>(Exemple: https://www.twitter.com/asso-gabon)</i></label>
                                    <input type="url" class="form-input" name="twitter" placeholder="Lien de votre  compte ou page Twitter" value="https://www.twitter.com/Juniorachievementgabon/">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <label><i class="fa fa-lg fa-youtube" style="color: #f43913"></i> Youtube <i>(Exemple: https://www.youtube.com/asso-gabon)</i></label>
                                    <input type="url" class="form-input" name="youtube" placeholder="Lien de votre chaîne Youtube" value="https://www.youtube.com/Juniorachievementgabon/">
                                </div>
                                <div class="col-sm-6">
                                    <label><i class="fa fa-lg fa-instagram" style="color: #ce3ed0"></i> Instagram <i>(Exemple: https://www.instagram.com/asso-gabon)</i></label>
                                    <input type="url" class="form-input" name="instagram" placeholder="Lien de compte ou page Instagram" value="https://www.instagram.com/Juniorachievementgabon/">
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <label><i class="fa fa-lg fa-google-plus-square" style="color: #f43f28"></i> Google Plus <i>(Exemple: https://www.plus.google.com/asso-gabon)</i></label>
                                    <input type="url" class="form-input" name="google_plus" placeholder="Lien de compte ou page Google Plus" value="https://www.plus.google.com/Juniorachievementgabon/">
                                </div>
                                <div class="col-sm-6">
                                    <label><i class="fa fa-lg fa-linkedin-square" style="color: #0082ab"></i> LinkedIn <i>(Exemple: https://www.linkedin.com/asso-gabon)</i></label>
                                    <input type="url" class="form-input" name="linkedin" placeholder="Lien de compte ou page LinkedIn" value="https://www.linkedin.com/Juniorachievementgabon/">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Mettre à jour</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </section>

<?php include 'inc/footer.php'?>