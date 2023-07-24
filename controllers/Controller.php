<?php

require_once ROOT_DIR."/models/CategoriesManager.class.php";
require_once ROOT_DIR."/models/EtatsManager.php";

class Controller
{
    private $managerCategories;
    private $managerEtats;

    public function __construct()
    {
        $this->managerCategories = new CategoriesManager();
        $this->managerEtats = new EtatsManager();
        
    }

    public function allCategories(){
        $categories = $this->managerCategories->DisplayCategories();
            include "views/categories.php" ;
    }
    /* public function allCategories()
    {
        $categories = $this->managerCategories->getAllCategories();
            require_once "views/categories.php" ;
    } */
    
    public function categorieById($id)
    {
        $categorie = $this->managerCategories->getCategorieById($id);
            include "views/categoriesForm.php" ;
    }     
    
    public function postCategorie($input){
        if (!empty($input)) {
            $id = $input['id'] ?? '';
            $nom_categorie = $input['nom'] ?? '';
            $description = $input['description'] ?? '';
            if (empty($input['id'])) {
                try {
                    $categorie = $this->managerCategories->addCategorie($id,$nom_categorie, $description);
                    include "views/categories.php" ;
                } catch (Exception $e) {
                    $type = 'error';
                    $message = 'Exception message: ' . $e->getMessage();
                }
            } else {
                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                try {
                    $categorie = $this->managerCategories->setCategorie($id, $nom_categorie, $description);
                    var_dump($categorie);
                    include "views/categoriesForm.php" ;
                } catch (Exception $e) {
                    $type = 'error';
                    $message = ['Catégorie non mis à jour: ' . $e->getMessage()];
                }
            }

    /* $createCatStmt = null;
    $updateCatStmt = null;
    $db = null; */
    }
}

    public function deleteCategorie() {
        $id = $_GET['id']; 
        $categorie = $this->managerCategories->delCategorie($id);
        /* echo "Categorie a été supprimée"; */
            include "views/categories.php";
    }

    public function allStates()
    {
        $etats = $this->managerEtats->getAllStates();
            include "views/etats.php" ;
    } 

}    