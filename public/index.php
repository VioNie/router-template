<?php
require '../vendor/autoload.php';
$router = new AltoRouter();

//route pour la hoempage
$router->map( 'GET', '/', function() {
    App\View\View::render('home',[],'day');

});

// route pour les css100 id=numero du jour
$router->map( 'GET|POST', '/day/[i:id]/', function( $id ) {
    App\View\View::render('day/cssDay'.$id  ,  []  ,  'day');
});



/*
 EXPLICATION
 A savoir :
    * on cherche toujours un .html.php
    * on va chercher dans /templates


$router->map( 'GET|POST', '/day/[i:id]/', function( $id ) {
    App\View\View::render('day/cssDay'.$id  ,  []  ,  'day');
                           ^^^^^^^^^^^^        ^^^    ^^^^
                                |               |      |
                                |               |  lien de la base
                                |               |  on va chercher
                                |               |  'base.html.php'
                                |               |  dans /templates/day
                                |               |
                                |        Données à passer dans
                                |        le template
                                |
                                |
              lien vers le template  on va chercher dans
              /templates/day/cssDay{id}  si le lient est
              http://localhost:8080/day/3 on va avoir
             day/cssDay/3  donc on va chercher dans
             templates/day/cssDay3.html.php


});





 Autre route en cas de besoin

$router->map( 'GET|POST', '/other/[*:name]/', function( $name ) {
    App\View\View::render('other/'.$name,[],'other');
});

*/


$match = $router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}