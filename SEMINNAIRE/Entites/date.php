<?php 

class Date_{
    private $date_seminaire;

    public function __construct($date_seminaire){
        $this->date_seminaire = $date_seminaire;
    }
// Méthode set pour modifier la date du seminaire 
    public function setDateSeminaire( $date_seminaire): void {$this->date_reservation = $date_seminaire;}
// Méthode pour obtenir la date du seminaire
	public function getDateSeminaire() {return $this->date_seminaire;}

}

// l'attribut date_seminaire est de type DATETIME
// les methodes sont "setDateSeminaire" et "getDateSeminaire"{Méthode setDateSeminaire pour modifier la date du seminaire et 
// Méthode getDateSeminaire pour obtenir la date du seminaire}