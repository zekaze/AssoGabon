<?php include 'inc/header.php' ?>
    <section id="main-container" style="background-color: #f3f3f5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-3">
                    <?php include_once 'inc/admin-sidebar.php';?>
                </div>
                <div class="col-lg-10 col-md-9">
                    <?php include_once 'inc/admin-header.php';?>
                    <div class="detail-asso">
                        <div class="title">
                            <h3><b class="text-green">Discussions avec</b> nom de l'interlocuteur</h3>
                        </div>
                    </div>
                    <div class="detail-asso">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="chat-bubbles">
                                    <?php for ($i = 0; $i < 15; $i++):?>
                                        <?php
                                        $self = null;
                                        $self = $i % 2 ? "self" : null;
                                        ?>
                                        <div class="chat-row <?php echo $self;?>">
                                            <a href="#repondre" class="chat-bubble anchor">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad architecto atque cupiditate deleniti deserunt dignissimos hic id ipsam, magni nam natus necessitatibus nisi perferendis quis reprehenderit saepe tempore temporibus ullam.

                                                <div class="date">
                                                    <?php $date_publication = "22-07-2017 11:20:07";
                                                    echo afficher_date($date_publication); ?>
                                                </div>
                                            </a>
                                            <div class="profile_pic">
                                                <img src="assets/images/experts/1.jpg" class="img-responsive" alt="Asso-Gabon">
                                            </div>
                                        </div>

                                    <?php endfor;?>
                                </div>
                                <form class="contact-form" id="repondre" action="">
                                    <div>
                                        <textarea name="libelle" class="rich-text" id="libelle" required></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-md">Publier</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-push-1 col-md-3">
                                <h5 class="h5">Rechercher ici</h5>
                                <form action="" class="formulaire flex-row">
                                    <input type="text" placeholder="Recherchez ici ..." id="mot" class="form-input" name="">
                                    <button type="submit" class="btn" style="margin:0 0 15px"><i class="fa fa-search"></i></button>
                                </form>

                                <div class="sidebar-widget">
                                    <h5 class="h5">Récents</h5>
                                    <ul class="chat-contact-list">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <li>
                                                <a href="#">
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <img src="assets/images/experts/1.jpg" class="img-responsive"
                                                                 alt="Asso-Gabon">
                                                        </div>
                                                        <div class="col-xs-8">
                                                            <div class="nom">Nom contact</div>
                                                            <div class="desc">Key Master</div>
                                                        </div>
                                                    </div>

                                                </a>
                                            </li>
                                        <?php endfor; ?>
                                    </ul>
                                </div>
                                <div class="sidebar-widget">
                                    <h5>Liste des contacts</h5>
                                    <ul class="chat-contact-list">
                                        <?php for ($i = 0; $i < 15; $i++): ?>
                                            <li>
                                                <a href="#">
                                                    <div class="row">
                                                        <div class="col-xs-4">
                                                            <img src="assets/images/experts/1.jpg" class="img-responsive"
                                                                 alt="Asso-Gabon">
                                                        </div>
                                                        <div class="col-xs-8">
                                                            <div class="nom">Nom contact</div>
                                                            <div class="desc">Key Master</div>
                                                        </div>
                                                    </div>

                                                </a>
                                            </li>
                                        <?php endfor; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'inc/footer.php'?>