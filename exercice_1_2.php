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


/**   Instanciez un objet de la classe Voiture avec les valeurs de votre choix
 *  pour les propriétés et affichez les détails de la voiture.
**/ 