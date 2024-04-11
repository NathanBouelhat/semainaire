<?php

class Seminaire{ 
    private $id;
    private $id_int;
    
    private $lieu;
    private $date_seminaire;
    

   function __construct($id, $id_int, $lieu, $date_seminaire,){
    $this->id = $id;
    $this->id_int = $id_int;
    $this->lieu = $lieu;
    $this->date_seminaire = $date_seminaire;

   }
   public function getId(){return $this-> id;}
   public function getId_int(){return $this-> id_int;}
   public function getDate_seminaire(){return $this-> date_seminaire;}
   public function getLieu(){return $this-> lieu;}
   public function setId($id): void{$this->id = $id;}
   public function setId_int($id_int): void {$this->id_int = $id_int;}
   public function setLieu($lieu): void{$this-> lieu = $lieu;}
   public function setDate_in($date_seminaire): void{$this->date_seminaire = $date_seminaire ; }





}

