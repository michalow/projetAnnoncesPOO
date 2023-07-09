<?php
require_once "Model.class.php";
require_once "Game.class.php";
require_once "Platform.class.php";
/*******
 * Class GamesManager
 * La classe GamesManager a pour vocation de gérer les objets Game que l'applictaion va créer et manipuler
 */
class GamesManager extends Model
{

    // Fonction qui renvoie un tableau contenant tous les jeux
    // on va faire une jointure sur la table platforms pour récupérer toutes les infos en une fois
    public function get_all_games()
    {
        $results = array();
        
            $req = $this->getDatabase()->prepare("SELECT games.id, games.title, games.year, games.platform, platforms.title as p_title FROM games LEFT JOIN platforms ON games.platform = platforms.id ");
            $req->execute();
            $games = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();

        // on a récupéré tous les utilisateurs, on les ajoute $results
        foreach ($games as $game) {
            $new_game = new Game(
                $game['id'],
                $game['title'],
                $game['year'],
                new Platform($game['platform'], $game['p_title']) // On créé un objet Platform avec les infos issues de la requête
            );
            array_push($results, $new_game);
        }
        return $results ;
    }


    // Pareil que précédemment, on récupère les jeux appartenant cette fois à une plateforme spécifique
    // C'est comme on a fait juste avant mais avec un where
    public function get_all_games_by_platform($id_platform)
    {
        $results = array();
            $req = $this->getDatabase()->prepare("SELECT games.id, games.title, games.year, games.platform, platforms.title as p_title FROM games LEFT JOIN platforms ON games.platform = platforms.id where platform = ? ");
            $req->execute([$id_platform]);
            $games = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();

        // on a récupéré tous les utilisateurs, on les ajoute au manager de users
        foreach ($games as $game) {
            $new_game = new Game(
                $game['id'],
                $game['title'],
                $game['year'],
                new Platform($game['platform'], $game['p_title'])
            );
            array_push($results, $new_game);
        }
        return $results ;
    }


    // Pareil que précédemment, on récupère les jeux sortis une année donnée
    // C'est comme on a fait juste avant mais on change le where
    public function get_all_games_by_year($year)
        {
            $results = array();
                $req = $this->getDatabase()->prepare("SELECT games.id, games.title, games.year, games.platform, platforms.title as p_title FROM games LEFT JOIN platforms ON games.platform = platforms.id where year = ? ");
                $req->execute([$year]);
                $games = $req->fetchAll(PDO::FETCH_ASSOC);
                $req->closeCursor();
    
            // on a récupéré tous les utilisateurs, on les ajoute au manager de users
            foreach ($games as $game) {
                $new_game = new Game(
                    $game['id'],
                    $game['title'],
                    $game['year'],
                    new Platform($game['platform'], $game['p_title'])
                );
                array_push($results, $new_game);
            }
            return $results ;
        }


    // Ici on se focalise sur un unique jeu, la fonction ne va donc pas renvoyer un tableau mais une instance de Game
    public function get_game($id)
    {
        $results = array();
            $req = $this->getDatabase()->prepare("SELECT games.id, games.title, games.year, games.platform, platforms.title as p_title FROM games LEFT JOIN platforms ON games.platform = platforms.id where games.id = ? ");
            $req->execute([$id]);
            $games = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor();

        foreach ($games as $game) {
            $new_game = new Game(
                $game['id'],
                $game['title'],
                $game['year'],
                new Platform($game['platform'], $game['p_title'])
            );
            return $new_game;
        }
    }
}
