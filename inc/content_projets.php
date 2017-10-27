<div class="title">
    <h3><b class="text-green">Projets</b></h3>
</div>
<div class="section-outils">
    <div class="groupe-outils">
        <div class="liste-outils">
            <?php $max_count = rand(1,5);?>
            <?php for($i= 0; $i < $max_count; $i++):?>
                <a href="detail-opportunite.php">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="assets/images/blog/1.jpg" class="img-responsive" alt="img">
                        </div>
                        <div class="col-md-6">
                            <strong class="h4">Titre du projet</strong>
                            <div>Extrait du contenu du projet. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem enim error est exercitationem harum inventore ipsum nemo, nisi obcaecati odio odit officia pariatur reprehenderit soluta ullam. Aliquam consequatur minus sequi?</div>
                        </div>
                        <div class="col-md-3">Date début</div>
                    </div>
                </a>
            <?php endfor;?>
        </div>
    </div>
</div>
