<?php
// Création de l'interface IReparable
interface IReparable{
    public function reparer();
}
//Implementation de l'interface IReparable
class Voiture implements IReparable{
    protected $marque;
    protected $modele ;
    protected $kilometrage;
    protected $annee;
    function __construct($marque, $modele, $kilometrage, $annee){
        $this->marque= $marque;
        $this->modele= $modele;
        $this->kilometrage= $kilometrage;
        $this->annee= $annee;

    }

    public function reparer(){
        echo "La voiture a été réparée. <br> ";
    }
    function afficher_detail(){
        echo "Marque : {$this->marque}, Modèle : {$this->modele}, Kilométrage : {$this->kilometrage} km,\n Année : {$this->annee}";
    }
}

$voiture = new Voiture("Toyota", "Corolla", 75000, 2018);
$voiture->afficher_detail();
$voiture->reparer() ;
?>