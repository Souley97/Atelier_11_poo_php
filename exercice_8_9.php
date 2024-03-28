<?php 
/*8.  Utilisez l'héritage pour faire en sorte que la classe Moto hérite de la classe Vehicule.
9. Créer une instance d’une moto électrique
*/ 

class Vehicule {
    public $marque;
    public $modele;

    // Constructeur pour initialiser les propriétés
    function __construct($marque, $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    // Méthode pour afficher les détails du véhicule
    function afficher_detail() {
        echo "Marque : {$this->marque}, Modèle : {$this->modele}<br>";
    }
}

class Moto extends Vehicule {
    protected $type;

    // Constructeur pour initialiser les propriétés spécifiques à la moto
    public function __construct($marque, $modele, $type) {
        
        // Appel de la méthode Magic __construct de la classe parente Vehicule
        parent::__construct($marque, $modele);
        $this->type = $type;
    }

    // Méthode pour afficher les détails spécifiques à la moto
    public function afficher_detail() {
        // Appel de la méthode afficher_detail de la classe parente Vehicule
        parent::afficher_detail();
        echo "Type de carburant : {$this->type}<br>";
    }
}

// Création d'une instance d'une moto électrique
$motoElectrique = new Moto("Honda", "CBR500R 2024", "Électrique");

// Affichage des détails de la moto électrique
$motoElectrique->afficher_detail();