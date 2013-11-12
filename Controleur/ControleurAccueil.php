<?php

require_once 'Framework/Controleur.php';
require_once 'Modele/Accueil.php';

// Contrôleur de l'accueil
class ControleurAccueil extends Controleur {
    
    // Objet modèle Médicament
    private $fournisseur;

    public function __construct() {
        $this->fournisseur = new Fournisseur();
    }

    // Affiche la liste des fournisseurs
    public function index() {
        $fournisseurs = $this->fournisseur->getFournisseurs();
        $this->genererVue(array('fournisseurs' => $fournisseurs));
    }
    
}