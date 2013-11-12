<!doctype html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <meta name="viewport" content="width=device-width,intial-scale=1.0">
        
        <link rel="stylesheet" href="librairies/bootstrap/css/bootstrap.min.css" type="text/css"/>
        
        <link rel="stylesheet" href="Contenu/style.css" type="text/css"/>
        
        <link rel="icon" type="text/css" href="contenu/Images/favicon.ico"/>
        
        <base href="<?= $racineWeb ?>" >
        <title><?= $titre ?></title>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <a class="navbar-brand" href="accueil.html"><span class="nom_site">SeedBox Sell</span></a>
        </nav>
        
        <div class="container breadcrumb">
            <div class="row">
                <!-- #contenu -->
                <div id="contenu">
                    <?= $contenu ?>
                </div> 
                <footer class="breadcrumb">
                    <div class="col-md-12">
                        <span>COMLAR Rémi - NGUYEN Huy Bao</span> 
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>