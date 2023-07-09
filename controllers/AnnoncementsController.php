<?php

require_once "models/AnnoncementsManager.class.php";


class AnnoncementsController
{
    private $annoncementManager;


    public function __construct()
    {
        $this->annoncementManager = new AnnoncementsManager();
        
    }
 
    /* public function get_games_by_year($year)
    {
        $games = $this->gameManager->get_all_games_by_year($year) ;
            require_once "views/games.php" ;
    } */
    
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


   /* public function get_games_by_platform($id_platform)
    {
        $games = $this->gameManager->get_all_games_by_platform($id_platform) ;
            require_once "views/games.php" ;
    }

    public function get_game($id)
    {
        $game = $this->gameManager->get_game($id) ;
            $games = array($game);
            require_once "views/games.php" ;
    }  */
    
}
