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
        echo "Vous venez de demarrer la voiture.<br>";
    }

    //Ajoutez une méthode spécifique à la classe Voiture appelée klaxonner() et utilisez-la sur l'objet que vous avez instancié.

    function klaxonner(){
        echo "Vous avez klaxonner.";
    }

    function afficher_detail(){
        echo "Marque : {$this->marque}, Modèle : {$this->modele}, Kilométrage : {$this->kilometrage} km, Année : {$this->annee}<br>";
    }
}

$voiture = new Voiture("Toyota", "Corolla", 75000, 2018);
$voiture->afficher_detail();
$voiture->demarrer() ;
$voiture->klaxonner() ;

