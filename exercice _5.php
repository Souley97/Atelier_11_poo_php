<!-- 
   5 Définissez les propriétés de la classe Voiture comme privées et utilisez des métho
   des publiques pour y accéder et les modifier : ajoutez des méthodes comme getMarque()
    et setMarque(), etc, à la classe Voiture pour accéder et modifier la propriété 
    marque ainsi que les autres propriétés.

 -->

<?php  
class Voiture {
    private $marque;
    private $modele;
    private $kilometrage;
    private $annee;
    // Constructeur pour initialiser les propriétés
    public function __construct($marque, $modele, $kilometrage, $annee) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->kilometrage = $kilometrage;
        $this->annee = $annee;
    }
    // Méthodes pour accéder aux propriétés
    public function getMarque() {
        return $this->marque;
    }
    public function getModele() {
        return $this->modele;
    }
    public function getKilometrage() {
        return $this->kilometrage;
    }
    public function getAnnee() {
        return $this->annee;
    }
    // Méthodes pour modifier les propriétés
    public function setMarque($marque) {
        $this->marque = $marque;
    }
    public function setModele($modele) {
        $this->modele = $modele;
    }
    public function setKilometrage($kilometrage) {
        $this->kilometrage = $kilometrage;
    }

    public function setAnnee($annee) {
        $this->annee = $annee;
    }

    // Méthode pour afficher les détails de la voiture
    public function afficherDetails() {
        echo "Marque : {$this->marque}, Modèle : {$this->modele}, Kilométrage : {$this->kilometrage} km, Année : {$this->annee}\n";
    }
}

// Création d'un objet Voiture avec des valeurs choisies
$voiture = new Voiture("Toyota", "Corolla", 75000, 2018);

// Affichage des détails de la voiture
$voiture->afficherDetails();

// Utilisation des méthodes pour accéder et modifier les propriétés
echo "Marque avant modification : " . $voiture->getMarque() . "\n";

// Modification de la marque voiture
$voiture->setMarque("Honda");
echo "Marque après modification : " . $voiture->getMarque() . "\n";





