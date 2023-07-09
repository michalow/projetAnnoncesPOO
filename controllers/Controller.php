<?php
// tous les managers qui utilise ce controller
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
    
    public function postCategorie($id, $nom, $description){
        if (!empty($_POST)) {
            $id = $_POST['id'] ?? '';
            var_dump($id);
            $nom = $_POST['nom'] ?? '';
            $description = $_POST['description'] ?? '';
            if (!empty($_POST['id'])) {
                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
                try {
                    $categorie = $this->managerCategories->setCategorie($nom, $description, $id);
                    var_dump($categorie);
                    include "views/categoriesForm.php" ;
                    /* if($categorie->rowCount()) {
                        echo 'cat ajoutée';
                        /* $type = 'success';
                        $message = ['Catégorie mis à jour']; 
                    }else{
                        echo 'cat non ajoutée';
                        /* $type = 'error';
                        $message = ['Catégorie non mis à jour'];
                    } */
                } catch (Exception $e) {
                    $type = 'error';
                    $message = ['Catégorie non mis à jour: ' . $e->getMessage()];
                }
                
            } else {
                try {
                    $categorie = $this->managerCategories->addCategorie($nom, $description);
                    include "views/categoriesForm.php" ;
                   /*  if ($categorie->rowCount()) {
                        echo 'cat ajoutée'; */
                       /*  $type = 'success';
                        $message = ['Catégorie ajoutée'];  */
                    /* } else { */
                       /*  echo 'cat pas ajouté'; */
                         /* $type = 'error';
                        $message = ['Catégorie non ajoutée']; */
                    /* }  */
                } catch (Exception $e) {
                    $type = 'error';
                    $message = 'Exception message: ' . $e->getMessage();
                }
            }

    $createCatStmt = null;
    $updateCatStmt = null;
    $db = null;
    }
}


    public function allStates()
    {
        $etats = $this->managerEtats->getAllStates();
            include "views/etats.php" ;
    } 

}    