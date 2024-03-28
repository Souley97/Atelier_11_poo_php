<?php 

/**  1.  Définissez une classe Voiture avec quelques propriétés telles que marque, modèle,
 *  kilométrage, année,... et une méthode pour afficher les détails de la voiture. 
 **/

class Voiture{
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

    function afficher_detail(){
        echo "Marque : {$this->marque}, Modèle : {$this->modele}, Kilométrage : {$this->kilometrage} km, Année : {$this->annee}<br>";
    }
}


/** 2  Instanciez un objet de la classe Voiture avec les valeurs de votre choix
 *  pour les propriétés et affichez les détails de la voiture.
**/ 

$voiture = new Voiture("Toyota", "Corolla", 75000, 2018);
$voiture2 = new Voiture("Honda", "Civic", 60000, 2016);


$voiture->afficher_detail();
$voiture2->afficher_detail();


