<?php include 'inc/header.php' ?>
    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container-fluid">
            <div class="col-lg-2 col-md-3">
                <?php include_once 'inc/admin-sidebar.php';?>
            </div>
            <div class="col-lg-10 col-md-9">
                <?php include_once 'inc/admin-header.php';?>
                <div class="detail-asso">
                        <h3><b>Ajouter un membre</b></h3>

                    <div class="formulaire">

                    </div>
                    <h3><b>Membres enregistrés</b></h3>
                    <div class="pagination-box clearfix">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th width="25%">Nom</th>
                                <th width="25%">Fonction</th>
                                <th>Tél.</th>
                                <th>Email</th>
                                <th width=""></th>
                            </tr>
                            <?php for ($i = 0; $i < 10; $i++): ?>
                                <tr class="article">
                                    <td>Nom du membre</td>
                                    <td>Fonction au sein de l'association</td>
                                    <td>+241 01 22 33 44</td>
                                    <td>email@adresse.com</td>
                                    <td>
                                        <button class="fa fa-trash btn" data-toggle="modal"
                                                data-target="#supprimer<?php echo $i; ?>" title="Supprimer"></button>
                                        <button class="fa fa-pencil btn" data-toggle="modal"
                                                data-target="#modifier<?php echo $i; ?>" title="Modifier"></button>
                                    </td>
                                </tr>

                            <?php endfor; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php include 'inc/footer.php'?>