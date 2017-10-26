<?php include 'inc/header.php'?>

    <section class="header-container bg-cover" style="background-image:url('assets/images/experts/contact.jpg'); background-size: cover ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2><b class="text-white">Contact</b></h2>
                    <div>
                        <ol class="header-text">
                            <li><a href="index.php">Accueil</a> </li>
                            <li><a href="">Communication</a> </li>
                            <li class="active">Contacts</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="main-container">
        <div class="container">
            <div class="row"  style="background-color: white">
                <div class="page-section col-sm-7">
                    <div class="head2">
                        <h3><b class="text-blue">Laissez-nous un </b>message</h3>
                    </div>

                    <p>Merci de remplir ce formulaire, nous tâcherons de traiter votre message dans les prochaines 48 heures. Tous les champs sont obligatoires.</p>
                    <form class="contact-form" action="">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="sc_nom">Nom</label>
                                <input class="form-input" id="sc_nom" name="sc_nom" required type="text" placeholder="Votre nom et prénom">
                            </div>
                            <div class="col-sm-6">
                                <label for="sc_email">Adresse mail</label>
                                <input class="form-input" id="sc_email" name="sc_email" required type="email" placeholder="Votre adresse mail">
                            </div>
                        </div>
                        <div>
                            <label for="sc_objet">L'objet de votre message</label>
                            <input class="form-input" id="sc_objet" name="sc_objet" required type="text" placeholder="L'objet de votre message">
                        </div>
                        <div>
                            <label for="sc_objet">Message</label>
                            <textarea name="sc_message" id="sc_message" class="rich-text" required></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-md">Envoyer le message</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-5" style="padding-bottom: 15px">
                    <div class="head2">
                        <h3><b class="text-blue">Contactez </b>nous</h3>
                    </div>
                    <div class="logo text-center" style="margin-bottom: 15px">
                        <img src="assets/images/logo.png" class="img-responsive" alt="Logo Asso_Gabon">
                    </div>
                    <ul>
                        <li><strong>Adresse</strong> 185, Rue du pont Pirah - BP 2125 - Libreville, Gabon</li>
                        <li><strong>Tél.:</strong> (+241) 01.79.70.00/ 01.79.70.09</li>
                        <li><strong>Email:</strong> contact@asso-gabon.org</li>
                    </ul>
                    <div class="head2">
                        <h3><b class="text-blue">Rejoignez </b>nous</h3>
                        <p>Vous êtes un cabinet, un expert sectoriel ou généraliste, vous organisez ou animez des ateliers, seminaires ou formations destinés aux associations ou alors vous êtes une association</p>
                        <a class="btn btn-md bg_green" href="connexion.php" style="color: #fff">Nous rejoindre</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'inc/footer.php'?>