<div class="section-outils">
    <div class="h3">Dirigeant</div>
    <div class="groupe-outils">
        <div class="liste-outils">
            <div class="row">
                <div class="col-md-3">
                    <img src="assets/images/blog/1.jpg" class="img-responsive" alt="img">
                </div>
                <div class="col-md-9">
                    <strong class="h4">Nom prénom</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="groupe-outils">
        <div class="h3">Membres de l'association</div>
        <div class="liste-outils">
            <div class="row-item">
                <?php $max_count = rand(2,5);?>
                <?php for($i= 0; $i < $max_count; $i++):?>
                <div class="col-6">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="assets/images/blog/1.jpg" class="img-responsive" alt="img">
                        </div>
                        <div class="col-md-7">
                            <strong class="h4">Nom prénom</strong>
                            <ul>
                                <li><strong>Fonction</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endfor;?>
            </div>
        </div>
    </div>
</div>

<!--<div class="croppie" style="width:  100%; height:  400px; margin-bottom: 50px" data-image="assets/images/blog/1.jpg">
</div>
<div id="croppie-result"></div>
<div>
    <span class="btn btn-default" id="bind_croppie">Edit background</span>
    <span class="btn btn-default hidden" id="enregistrer">Enregistrer les modifications</span>
</div>
-->
