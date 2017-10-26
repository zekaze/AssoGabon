    <div class="title">
        <h3>Prénoms <b class="text-blue">Noms</b></h3>
        Fonction et entreprise
    </div>
    <div class="blog-post">
        <div class="row">
            <div class="col-sm-4">
                <img src="assets/images/experts/1.jpg" alt="Expert" class="img-responsive">
            </div>

            <div class="col-sm-8">
                <div class="title">
                    <h3><b class="text-blue">Expertise</b></h3>
                </div>
                <div class="post-details">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam
                        neque tempora odi atque repellat est molestiae perferendis.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam
                        neque tempora oditatque repellat est molestiae perferendis.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7 col-sm-6">
            <div class="title">
                <h3><b class="text-blue">Thèmes</b> d'intervention</h3>
            </div>

            <ul class="ul-list">
                <li> Protection des personnes vulnérables</li>
                <li> Protection de l'enfance</li>
                <li> Droits de l'homme</li>
            </ul>
        </div>

        <div class="col-md-5 col-sm-6">
            <div class="title">
                <h3><b class="text-blue">contacts</b></h3>
            </div>

            <ul class="ul-list">
                <li>+241 02 22 33 44 / +241 06 55 77 99</li>
                <li><a href="mailto:email@yahoo.fr">email@yahoo.fr</a></li>
                <li>Libreville, Gabon</li>
                <li><a href="http://digip-apprifque.net">http://digip-apprifque.net</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7 col-sm-6">
            <div class="title">
                <h3><b class="text-blue">Réseaux</b> sociaux</h3>
            </div>

            <ul class="list-inline">
                <li><a href="#" class="fa fa-lg fa-facebook"></a></li>
                <li><a href="#" class="fa fa-lg fa-twitter"></a></li>
                <li><a href="#" class="fa fa-lg fa-instagram"></a></li>
                <li><a href="#" class="fa fa-lg fa-linkedin"></a></li>
                <li><a href="#" class="fa fa-lg fa-youtube"></a></li>
                <li><a href="#" class="fa fa-lg fa-google-plus"></a></li>
            </ul>
        </div>

    </div>

    <div class="title">
        <button id="owl-4-next" class="fa fa-chevron-right pull-right"></button>
        <button id="owl-4-prev" class="fa fa-chevron-left pull-right"></button>
        <h3><b class="text-blue">Actualités</b></h3>
    </div>

    <div class="owl-carousel-4">
        <?php for ($i = 0; $i < 8; $i++): ?>
            <div class="slide">
                <a href="detail-articles.php">
                    <div class="blog-post">
                        <div class="post-img">
                            <img src="assets/images/experts/1.jpg" alt="Asso-Gabon" class="img-responsive">
                        </div>

                        <h4 class="post-title">Sketch Designing Artists are beauty: A report</h4>

                        <p class="post-details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam neque
                            tempora odit atque repellat est molestiae perferendis.</p>
                    </div>
                </a>
            </div>
        <?php endfor; ?>
    </div>


    <div class="title">
        <button id="owl-1-next" class="fa fa-chevron-right pull-right"></button>
        <button id="owl-1-prev" class="fa fa-chevron-left pull-right"></button>
        <h3><b class="text-blue">multimédia</b></h3>
    </div>

    <div class="owl-carousel-1 pictures-gallery">
        <?php for ($i = 0; $i < 8; $i++): ?>
            <a href="assets/images/blog/1.jpg">
                <img src="assets/images/blog/1.jpg" alt="" class="img-responsive">
            </a>
        <?php endfor; ?>
    </div>