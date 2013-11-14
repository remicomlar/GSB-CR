<?php

require_once 'Framework/Modele.php';

// Services métier liés aux praticiens
class Praticien extends Modele {

    // Morceau de requête SQL incluant les champs de la table praticien
    private $sqlPraticien = 'select id_praticien as idPraticien, nom_praticien as nomPraticien, prenom_praticien as prenomPraticien, adresse_praticien as adressePraticien, cp_praticien as cpPraticien,ville_praticien as villePraticien, coef_notoriete as coefNotoriete, lib_type_praticien as typePraticien from PRATICIEN P join TYPE_PRATICIEN T on P.id_type_praticien=T.id_type_praticien';
    private $sqlType = 'select id_type_praticien as idTypePraticien, lib_type_praticien as typePraticien from type_praticien';

    // Renvoie la liste des praticiens triée par nom
    public function getPraticiens() {
        $sql = $this->sqlPraticien . ' order by nom_praticien';
        $praticiens = $this->executerRequete($sql);
        return $praticiens;
    }

    // Renvoie un praticien à partir de son identifiant
    public function getPraticien($idPraticien) {
        $sql = $this->sqlPraticien . ' where id_praticien=?';
        $praticien = $this->executerRequete($sql, array($idPraticien));
        if ($praticien->rowCount() == 1)
            return $praticien->fetch();  // Accès à la première ligne de résultat
        else
            throw new Exception("Aucun praticien ne correspond à l'identifiant '$idPraticien'");
    }

    // Renvoie la liste des praticiens
    public function getTypePraticien() {
        $sql = $this->sqlType;
        $typePraticiens = $this->executerRequete($sql);
        return $typePraticiens;
    }

// Renvoie un praticien à partir de son type
    public function getPraticienType($idTypePraticien) {
        $sql = $this->sqlPraticien . ' where T.id_type_praticien=? order by nomPraticien';
        $praticien = $this->executerRequete($sql, array($idTypePraticien));
        if ($praticien->rowCount() > 0)
            return $praticien;
        else
            throw new Exception("Aucun praticien ne correspond à l'identifiant '$idTypePraticien'");
    }

}

