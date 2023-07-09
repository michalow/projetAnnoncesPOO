<?php
require_once "Model.class.php";
require_once "Etat.class.php";

class EtatsManager extends Model
{
    private $etatManager;

    public function getAllStates() {
       $results=array();

        $req = $this->getDatabase()->prepare("SELECT id, nom, description FROM etats");
        $req->execute();
        $etats = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

     foreach ($etats as $etat) {
            $newEtat = new Etat(
                $etat['id'],
                $etat['nom'],
                $etat['description']
            );
            array_push($results, $newEtat);
        }
        return $results;
    }
    
    public function getStateById($id) {
        /* $results=array(); */
       /*  $id=$_GET['id']; */
        
        /* if(isset($_GET['id'])) {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        try { */
         $req = $this->getDatabase()->prepare("SELECT id, nom, description FROM etats WHERE id=:id");
         $req->execute([$id]);
         $etats = $req->fetch(PDO::FETCH_ASSOC);
         $req->closeCursor();

            $newEtat = new etat(
                $etats['id'],
                $etats['nom'],
                $etats['description']
            );
            /* array_push($results, $newetat); */ /* catch (Exception $e) {
            echo $e->getMessage();
        }
     }    */
     return $newEtat;
    }

   /*  public function setAlletats() {
        $req = $this->getDatabase()->prepare("INSERT INTO ")
    } */
}  