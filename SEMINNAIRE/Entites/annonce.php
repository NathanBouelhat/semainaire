<?php

class Annonce{ 
    
    private $id;
    private $id_int;
    private $titre_in;
    private $resume_in;
    private $lieu;
    private $date_in;
    private $date_M_S_J;

   function __construct($id, $id_int,$titre_in, $resume_in, $lieu, $date_in, $date_M_S_J){

    

   }
   public function getId(){return $this-> id;}
   public function getId_int(){return $this-> id_int;}
   public function getTitre_in(){return $this-> titre_in;}
   public function getResume_S(){return $this-> resume_in;}
   public function getLieu(){return $this-> lieu;}
   public function getDate_in(){return $this-> date_in;}
   public function getDate_M_S_J(){return $this-> date_M_S_J;}
   public function setId($id): void{$this->id = $id;}
   public function setId_int($id_int): void {$this->id_int = $id_int;}
   public function setTitre_in($titre_in){return $this->titre_in = $titre_in;}

   public function setResume_S($resume_in): void{$this->resume_in = $resume_in;}
   public function setLieu($lieu): void{$this-> lieu = $lieu;}

   public function setDate_in($date_in): void{$this->date_in = $date_in; }
   public function setDate_M_S_J($date_M_S_J): void{$this->date_M_S_J = $date_M_S_J;}




    

}

