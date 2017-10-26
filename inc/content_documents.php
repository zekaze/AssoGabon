<div class="title">
    <h3><b class="<?php echo kz_color_class();?>">Documents</b></h3>
</div>
<div class="section-outils">
    <div class="groupe-outils">
        <div class="liste-outils">
            <?php $max_count = rand(3,6);?>
            <?php for($i= 0; $i < $max_count; $i++):?>
                <a href="#">
                    <div class="row">
                        <div class="col-md-9"><strong>Nom du document</strong></div>
                        <div class="col-md-3">Type</div>
                    </div>
                </a>
            <?php endfor;?>
        </div>
    </div>
</div>
