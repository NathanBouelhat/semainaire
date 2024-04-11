<?php
class ModelsIntervenant{
    private $pdo;

    public function __construct(){
        $this->pdo = new PDO("mysql:host=localhost;dbname=seminaire", "root", "");
    }

    public function afficherInt(){
        $stmt = $this->pdo->prepare("SELECT * FROM intervenant");
        $stmt->execute();

        $tab = [];

        while($res = $stmt->fetch()){
            extract($res);
          $int = new Intervenant($id, $nom, $prenom, $affectation, $url);
            $tab[] = $int;
        }

        return $tab;


    }
    public function recupef(Intervenant $intervenant){
        $query = "INSERT INTO article VALUES(NULL, :libelle, :prix, :descr, :cat)";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute([
            "nom"   => htmlentities($intervenant->getNom()),
            "prenom"      => $intervenant->getPrenom(),
            "affectation"     => htmlentities($intervenant->getAffectation()),
            "Url"       => $intervenant->getURL()
        ]);

    }
    public function supprimer(int $id){
        $query = "DELETE FROM intervenant WHERE id = :id";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute(["id" => $id]);

        
    }
    
    public function modif(Intervenant $art){
        $query = "UPDATE intervenant SET nom = :nom, prenom = :prenom, affectation = :affectation, url = :url, WHERE id = :id";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            "nom"       => htmlentities($art->getNom()),
            "prenom"      => $art->getPrenom(),
            "affectation"     => htmlentities($art->getAffectation()),
            "url" => $art->getUrl(),
            "id"        => $art->getId()
        ]);
    }
    public function lire(int $id){
        $query = "SELECT * FROM intervenat WHERE id = :id";
        $stmt = $this->pdo->prepare($query);

        $stmt->execute(["id" => $id]);
        $res = $stmt->fetch(PDO::FETCH_ASSOC);

        extract($res);
        return new intervenant ($id, $nom, $prenom, $affectation, $url);

    }
}

