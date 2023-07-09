<?php
require_once "Model.class.php";
require_once "Category.class.php";

class CategoriesManager extends Model
{
    private $categoryManager;
    protected $table='categories';

public function DisplayCategories(){
    $results = array();
    $categories = $this->getAll();
    foreach ($categories as $category) {
        $newCategory = new Category(
            $category['id'],
            $category['nom_categorie'],
            $category['description'] 
            );
        array_push($results, $newCategory);
        }
    return $results;
}

/*  public function getAllCategories() {
       $results=array();

        $req = $this->getDatabase()->prepare("SELECT id, nom_categorie, description FROM categories");
        $req->execute();
        $categories = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();

     foreach ($categories as $category) {
            $newCategory = new Category(
                $category['id'],
                $category['nom_categorie'],
                $category['description']
            );
            array_push($results, $newCategory);
        }
        return $results;
}  */
    
    public function getCategorieById($id) {
        
         $req = $this->getDatabase()->prepare("SELECT id, nom_categorie, description FROM categories WHERE id=:id");
         $req->execute(['id'=>$id]);
         $category = $req->fetch(PDO::FETCH_ASSOC);
         $req->closeCursor();

            $newCategory = new Category(
                $category['id'],
                $category['nom_categorie'],
                $category['description']
            );
         
     return $newCategory;
    }

    public function addCategorie($nom_categorie, $description) {

        $req = $this->getDatabase()->prepare('INSERT INTO categories (nom_categorie, description) 
        VALUES (:nom_categorie, :description)');
        $req->execute([':nom_categorie' => $nom_categorie, ':description'  => $description]);
    }

    public function setCategorie($nom_categorie, $description) {

        $req = $this->getDatabase()->prepare('UPDATE categories 
        SET nom_categorie=:nom_categorie, 
        description=:description WHERE id=:id');
        $req->execute([':nom_categorie' => $nom_categorie, ':description'  => $description]);
    }

    public function delCategorie($id) {
        $req = $this->getDatabase()->prepare('DELETE FROM categories WHERE id=:id');
        $req->execute([':id' => $id]);
    }
}  