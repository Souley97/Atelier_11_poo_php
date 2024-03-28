<?php

// Créez une classe Vehicule parenté avec une méthode demarrer() et faites en sorte que la classe Voiture hérite de la classe Vehicule.
class Vehicule {

    function  demarrer(){

    }
}

class Voiture extends Vehicule {
        public $marque;
        public $modele ;
        public $kilometrage;
        public $annee;
    
    
        function __construct($marque, $modele, $kilometrage, $annee){
            $this->marque= $marque;
            $this->modele= $modele;
            $this->kilometrage= $kilometrage;
            $this->annee= $annee;
    
        }
        
    function demarrer(){
        echo "Vous venez de demarrer la voiture.";
    }
}

?>