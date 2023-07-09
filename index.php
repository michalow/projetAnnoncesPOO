<?php
session_start();
define("ROOT_DIR",__DIR__);
require_once ROOT_DIR.'/librairies/phprouter/router.php';


define("PDO", 0) ; // connexion par PDO
/* define("DB_MANAGER");  */// TODO choisissez entre PDO ou MEDOO
// Création de deux constantes URL et FULL_URL qui pourront servir dans les controlleurs et/ou vues
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
define("FULL_URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]/{$_SERVER['REQUEST_URI']}"));


/******** HELPERS *********/
// inclusion des helpers contenant des fonctions utilisables dans toutes les vues
require_once "helpers/string_helper.php";

/******** CONTROLLERS *********/
require_once "controllers/GamesController.php";
require_once "controllers/AnnoncementsController.php";
require_once "controllers/MembersController.php";
require_once "controllers/Controller.php";
/* require_once "models/CategoriesManager.class.php"; */

include_once "views/common/header.php";
include_once "views/common/navbar.php";

get('/', function(){
    $controller = new AnnoncementsController();
    $controller->allAnnoncements();
});

get('/connexion', function(){
    $controller = new UsersManager();
    $controller->logUser();
    require_once 'views/signup.php';
});

post('/membre', function(){
    /* $controller = new UsersManager();
    $controller->logUser(); */
    require_once 'views/member.php';
});

get('/membres', function(){
    $controller = new MembersController();
    $controller->allMembers(); 
});

get('/membre/$id', function($id){
    $controller = new MembersController();
    /* $controller->all_annonces(); */
});

get('/categories', function(){
    $controller = new Controller();
    $controller->allCategories();
    /* var_dump($controller->allCategories()); */
});

get('/categorie/$id', function($id){
    $controller = new Controller();
    $controller->categorieById($id); 
});

get('/categorie', function(){
    /* $controller = new Controller();
    $controller->postCategorie($_POST["nom"], $_POST["description"]); */
    include 'views/categoriesForm.php';
});

post('/categorie', function($id, $nom_categorie, $description){
    $controller = new Controller();
    $controller->postCategorie($id, $nom_categorie, $description);
});

post('/categorie/$id', function($id, $nom_categorie, $description){
    $controller = new Controller();
    $controller->postCategorie($id, $nom_categorie, $description);
});

// Pour les routes GET on utilise la fonction get()
// Pour invoquer un contrôleur on crée un callback
/* get('/games/$id_game', function($id_game){
    // route utilisée pour obtenir les infos sur un jeu ayant comme id $id_game
    $controller = new GamesController();
    $controller->get_game($id_game);
}); */

get('/annonces', function(){
    $controller = new AnnoncementsController();
    /* $controller->all_annonces(); */
});

get('/annonce/$id', function($id){
    $controller = new AnnoncementsController();
    /* $controller->all_annonces(); */
});

// COMMENT GERER CA ???
// pour mettre les annonces par categorie sur le site ??
// pour modifier ou supprimer la categorie par admin ??
/* get('/categories/$id', function($id){
    $controller = new CategoriesEtatsController();
    /* $controller->all_annonces(); 
}); */

get('/etats', function(){
    $controller = new Controller();
    $controller->allStates();
});

get('/etat/$id', function($id){
    $controller = new Controller();
    /* $controller->all_annonces(); */
});

include_once "views/common/footer.php";


/* get('/games', function(){
    // route utilisée pour obtenir les infos sur tous les jeux
    $controller = new GamesController();
    $controller->all_games();
});

get('/platforms/$id_platform', function($id_platform){
    // route utilisée pour obtenir les infos sur les jeux appartenant à une plateform ayant pour id $id_platform
    $controller = new GamesController();
    $controller->get_games_by_platform($id_platform);
}); */

/* get('/years/$year', function($year){
    // route utilisée pour obtenir les infos de tous les jeux sortis durant l'année $year
    $controller = new GamesController();
    $controller->get_games_by_year($year);
}); */

/* post('/years/$year', function($year){
    // route utilisée pour obtenir les infos de tous les jeux sortis durant l'année $year
    $controller = new GamesController();
    $controller->get_games_by_year($year);
}); */

