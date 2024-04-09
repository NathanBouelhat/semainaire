<?php 

class Commentaire{
    private $intervenant;
    private $seminaire;
    private $texte;
    private $date_texte;

    public function getIntervenant() {return $this->intervenant;}

	public function getSeminaire() {return $this->seminaire;}

	public function getTexte() {return $this->texte;}

	public function getDateTexte() {return $this->date_texte;}

	public function setIntervenant( $intervenant): void {$this->intervenant = $intervenant;}

	public function setSeminaire( $seminaire): void {$this->seminaire = $seminaire;}

	public function setTexte( $texte): void {$this->texte = $texte;}

	public function setDateTexte( $date_texte): void {$this->date_texte = $date_texte;}

	
}