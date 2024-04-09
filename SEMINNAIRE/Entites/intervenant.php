<?php 

class Intervenant{
    private $id;
    private $nom;
    
    private $prenom;

    private $affectation;
    private $url;
    

   function __construct(){

    

   }
   public function getId(){return $this-> id;}
   public function getnNom(){return $this-> nom;}
   public function getPrenom(){return $this-> prenom;}
   public function getAffectation(){return $this-> affectation;}
   public function getURL(){return $this-> url;}

   

   public function setId($id): void {$this->id = $id;}
   public function setNom($nom): void {$this->nom = $nom;}

   public function setPrenom($prenom): void {$this->prenom = $prenom ; }
   public function setAffectaion($affectation): void {$this->affectation = $affectation ; }
   public function setURL($url): void {$this->url = $url ; }


}


