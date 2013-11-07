<?php $this->titre = "SeedBoxSell"; ?>

<div class="breadcrumb"><a href="accueil.php" class="first">Accueil</a></div>

<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            <a class="list-group-item" href="accueil.html" title="Accueil">Accueil</a>

            <?php
            foreach ($stmtCategories as $ligne) :
                $libcat = $this-> $nettoyer($ligne['F_NOMFRS']);
                $nombre = $this->$nettoyer($ligne['nbpdt']);

                echo "<a class='list-group-item' href='abonnement.html'>$libcat<span class='badge'>$nombre</span> </a>";
            
            ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-md-9">
        <img class="img-responsive img_accueil" src="contenu/Images/smtp-server.jpg"/>
    </div>
</div>