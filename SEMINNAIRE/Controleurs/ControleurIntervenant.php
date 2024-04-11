<?php 

class ControleurIntervenant{

    function intervenantHTTP(){
        $modelsInt = new ModelsIntervenant();
        $modelsEve = new ModelsEvenement();
                
        if( isset($_GET['action']) ){
            // VALEUR DE L'ACTION
            $action = $_GET['action'];

            switch($action){
                case"action": $intervenant = $modelsInt->afficherInt(); 
                include "Views/index.php";
                break;

            
        
        case "IntNB":

            // RECUP DONNEES DU FORMULAIRE
            if( isset($_POST['libelle']) ){
                extract($_POST);
                $recupf = new Article(0, $nom, $prenom, $affectation, $url);

                $modelsInt->recupef($intervenant);

                header("location: ?action=intervenant");
                exit;
            }
            include "Views/intervenant/ajoutIntervenant.php";
            break;

            case "suppArticle": 
                $id = $_GET['id'];
                $modelsInt->supprimer($id);

                header("location: ?action=intervenant");
                //exit;
                break;
                
                case "ModifierInt":

                    
                    if( isset($_POST['libelle']) ){
                       extract($_POST);
                       $art = new Article($id, $nom, $prenom, $nom, $url);

                      $modelsInt->modif($int);

                      header("location: ?action=article");
                      exit;
                   }

                   $id = $_GET['id'];
                   $modif = $modelsInt->lire($id);
                   include "views/article/new.php";
                   break;

                }

            }



    }
}