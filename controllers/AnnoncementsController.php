<?php

require_once "models/AnnoncementsManager.class.php";


class AnnoncementsController
{
    private $annoncementManager;


    public function __construct()
    {
        $this->annoncementManager = new AnnoncementsManager();
        
    }
 
  /*   public function homePage(){
        $annClass = new Annoncement($table);
        $this->table = $table;
        $annoncement = $annClass->getAll();
    } */

    public function allAnnoncements()
    {
        $annonces = $this->annoncementManager->getAllAnnonces();
            require_once "views/home.php" ;
    } 

 /*    public function annonces_Photo()
    {
        $annonces = $this->annoncementManager->get_annonces_Photo() ;
            require_once "views/home.php" ;
        var_dump($annonces);    
    } */

    
}
