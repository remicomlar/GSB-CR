<?php

require_once 'Framework/Modele.php';

// Services métier liés aux médicaments 
class Fournisseur extends Modele {

    // Morceau de requête SQL incluant les noms des fournisseurs de la table fournisseur
    private $sqlFournisseur = 'select F_NOMFRS from T_FOURNISSEUR ';

    // Renvoie la liste des fournisseurs
    public function getFournisseurs() {
        $sql = $this->sqlFournisseur;
        $fournisseurs = $this->executerRequete($sql);
        return $fournisseurs;
    }


}