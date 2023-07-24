<?php
session_start();
define("ROOT_DIR",__DIR__);
require_once ROOT_DIR.'/librairies/phprouter/router.php';


define("PDO", 0) ; // connexion par PDO
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
define("FULL_URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://$_SERVER[HTTP_HOST]/{$_SERVER['REQUEST_URI']}"));


/******** HELPERS *********/
// inclusion des helpers contenant des fonctions utilisables dans toutes les vues
require_once "helpers/string_helper.php";

/******** CONTROLLERS *********/
require_once "controllers/AnnoncementsController.php";
require_once "controllers/MembersController.php";
require_once "controllers/Controller.php";
require_once "models/CategoriesManager.class.php";

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

post('/categorie', function(){ //id lastId
    $input = $_POST;
    $controller = new Controller();
    $controller->postCategorie($input);
});

post('/categorie/$id', function($id){
    $input = $_POST;
    $controller = new Controller();
    $controller->postCategorie($input);
});

delete('/categorieDel/$id', function($id){
    $controller = new Controller();
    $controller->deleteCategorie();
});

get('/annonces', function(){
    $controller = new AnnoncementsController();
    /* $controller->all_annonces(); */
});

get('/annonce/$id', function($id){
    $controller = new AnnoncementsController();
    /* $controller->all_annonces(); */
});


get('/etats', function(){
    $controller = new Controller();
    $controller->allStates();
});

get('/etat/$id', function($id){
    $controller = new Controller();
    /* $controller->all_annonces(); */
});

include_once "views/common/footer.php";


