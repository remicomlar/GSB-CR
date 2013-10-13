<?php

// Effectue la connexion à la BD, et renvoie un objet PDO
function getBdd() {
    // Connexion à la base de données desert
    $bdd = new PDO("mysql:host=localhost;dbname=seedbox;charset=utf8", "root", "",
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

