<?php

require_once "models/GamesManager.class.php";


class GamesController
{
    private $gameManager;


    public function __construct()
    {
        $this->gameManager = new GamesManager();
        
    }
 
    public function get_games_by_year($year)
    {
        $games = $this->gameManager->get_all_games_by_year($year) ;
            require_once "views/games.php" ;
    }
    
   public function all_games()
    {
        $games = $this->gameManager->get_all_games() ;
            require_once "views/games.php" ;
    }


   public function get_games_by_platform($id_platform)
    {
        $games = $this->gameManager->get_all_games_by_platform($id_platform) ;
            require_once "views/games.php" ;
    }

    public function get_game($id)
    {
        $game = $this->gameManager->get_game($id) ;
            $games = array($game);
            require_once "views/games.php" ;
    } 
    
}
