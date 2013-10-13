<?php
try {
    require 'connexionbdd.inc';
    $bdd = getBdd();
    
    //Affichage des catégorie
    $requete = "SELECT FRS.F_NUMFRS, FRS.F_NOMFRS , COUNT(*) as 'nbpdt' FROM T_SEEDBOX SB JOIN T_FOURNISSEUR FRS ON SB.F_NUMFRS = FRS.F_NUMFRS GROUP BY SB_ID;";
    $stmtCategories = $bdd->query($requete);
    


} catch (Exception $e) {
    $msgErreur = $e->getMessage() . '(' . $e->getFile() . ', ligne ' . $e->getLine() . ')';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width,intial-scale=1.0">
        <link rel="stylesheet" href="librairies/bootstrap/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="contenu/style.css" type="text/css"/>
        <link rel="icon" type="text/css" href="contenu/Images/favicon.ico"/>
    </head>


    <body>

        <nav class="navbar navbar-default" role="navigation">
            <a class="navbar-brand" href="accueil.html"><span class="nom_site">SeedBox Sell</span></a>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <p class="msg_bienvenue">
                    <strong class="msg">Bienvenue sur le site SeedBox Sell, la référence en matière de location de Seed Box.</strong> 
                </p>
            </div>
        </div>
        <div class="breadcrumb"><a href="accueil.html" class="first">Accueil</a></div>
        <div class="container breadcrumb">
            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <a class="list-group-item" href="accueil.html" title="Accueil">Accueil</a>
                        <?php
                        
                        foreach ($stmtCategories as $ligne)
                        {
                            $libcat = $ligne['F_NOMFRS'];
                            $nombre = $ligne['nbpdt'];
                            
                            echo "<a class='list-group-item' href='abonnement.html'>$libcat<span class='badge'>$nombre</span> </a>";
                        }
                        ?>
                       
                        <!--<a class="list-group-item" href="fournisseur.html" title="Fournisseurs">Fournisseurs<span class="badge">3</span></a>-->
                    </div>
                </div>
                <div class="col-md-9">
                    <img class="img-responsive img_accueil" src="contenu/Images/smtp-server.jpg"/>
                </div>
            </div>
            <footer class="breadcrumb">
                <div class="col-md-12">
                    <span>COMLAR Rémi - NGUYEN Huy Bao</span> 
                </div>
            </footer>
        </div>


    </body>
</html>