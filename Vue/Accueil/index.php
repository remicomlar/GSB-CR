<?php $this->titre = "SeedBoxSell"; ?>

<div class="row">
    <div class="col-md-12">
        <p class="msg_bienvenue">
            <strong class="msg">Bienvenue sur le site SeedBox Sell, la référence en matière de location de Seed Box.</strong> 
        </p>
    </div>
</div>

<div class="breadcrumb"><a href="index.php" class="first">Accueil</a></div>

<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <a class="list-group-item" href="index.php" title="Accueil">Accueil</a>

            <?php foreach ($fournisseurs as $fournisseur) : ?>
                <a class='list-group-item' href='abonnement.html'><?= $this->nettoyer($fournisseur['F_NOMFRS']) ?><span class='badge'></span></a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-md-9">
        <img class="img-responsive img_accueil" src="contenu/Images/smtp-server.jpg"/>
    </div>
</div>