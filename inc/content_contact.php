<div class="title">
    <h3>Envoyer un <b class="<?php echo kz_color_class();?>">SMS</b></h3>
</div>

<form class="contact-form" action="">
    <div class="row">
        <div class="col-sm-6">
            <label for="sc_nom">Nom</label>
            <input class="form-input" id="sc_nom" name="sc_nom" required type="text" placeholder="Votre nom et prénom">
        </div>
        <div class="col-sm-6">
            <label for="sc_email">Numéro de téléphone</label>
            <input class="form-input" id="tel" name="tel" required type="text" placeholder="Votre numéro de téléphone">
        </div>
    </div>
    <div>
        <label for="sc_objet">Message</label>
        <textarea name="sc_message" id="sc_message" rows="7" class="form-input" required></textarea>
    </div>
    <div>
        <button type="submit" class="btn btn-md">Envoyer le SMS</button>
    </div>
</form>