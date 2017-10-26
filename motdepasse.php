<?php include 'inc/header.php' ?>

    <section class="header-container" style="background-image:url('assets/images/bg/1.jpg'); background-size: cover ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2><b class="text-white">Mot de passe oublié</b></h2>
                        <ol class="header-text">
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">Communication</a></li>
                            <li class="active">Se connecter</li>
                        </ol>
                </div>
            </div>
        </div>
    </section>


    <section id="main-container" style="background-color: #fff">
        <div class="container" id="reset-password">
            <div class="row">
                <div class="col-sm-8 col-sm-push-2">
                    <?php if(isset($_GET['s']) && $_GET['s'] == 'reset'):?>
                        <div class="page-section">
                            <div class="head text-center">
                                <h3><b class="text-blue">Réinitialiser</b> votre mot de passe</h3>
                            </div>

                            <p>Vous recevrez un lien pour réinitialiser votre mot de passe à cette adresse si elle est associée à un compte sur Asso-Gabon.</p>
                            <a href="connexion.php" class="underline">Retour vers la page de connexion</a>
                        </div>
                    <?php else:;?>
                        <div class="page-section">
                            <div class="head text-center">
                                <h3><b class="text-blue">Réinitialiser</b> votre mot de passe</h3>
                            </div>

                            <form action="" method="get">
                                <p>Veuillez entrer votre adresse mail. Un email sera envoyé a cette adresse avec les instructions
                                    pour réinitaliser votre mot de passe.</p>
                                <input type="text" name="email" placeholder="Votre adresse mail" class="form-input">

                                <button type="submit" name="s" value="reset">Réinitialiser le mot de passe</button>
                                <a href="connexion.php" class="underline">Retour vers la page de connexion</a>
                            </form>
                        </div>

                    <?php endif;?>
                </div>
            </div>

        </div>
    </section>

<?php include 'inc/footer.php' ?>