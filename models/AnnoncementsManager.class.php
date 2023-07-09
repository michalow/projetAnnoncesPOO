<?php
require_once "Model.class.php";
require_once "Annoncement.class.php";
require_once "Etat.class.php";

class AnnoncementsManager extends Model
{
    public function getAllAnnonces()
    {
        $results = array();
        
            $req = $this->getDatabase()->prepare("SELECT
            annonces.id,
            annonces.titre,
            annonces.description, 
            annonces.prix_vente,
            photos.url, 
            annonces.id_etat, 
            etats.nom 
            FROM annonces LEFT JOIN photos ON annonces.id = photos.id_annonce 
            LEFT JOIN etats ON annonces.id_etat = etats.id
            /* LEFT JOIN categories_annonces ON annonces.id_ */");
            $req->execute();
            $annonces = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();

        // on a récupéré tous les utilisateurs, on les ajoute $results
        foreach ($annonces as $annonce) {
            $new_annonce = new Annoncement(
                $annonce['id'],
                $annonce['titre'],
                $annonce['description'],
                $annonce['prix_vente'],
                $annonce['url'],
                new Etat($annonce['id'], $annonce['nom'])
            );
            array_push($results, $new_annonce);
           /*  var_dump($results); */
        }
        return $results ;
    }


   
}