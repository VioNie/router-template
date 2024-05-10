<?php
require '../vendor/autoload.php';
$router = new AltoRouter();


$router->map( 'GET', '/', function() {
    require __DIR__ . '/../templates/home.php.html';

});
// map users details page
$router->map( 'GET|POST', '/page/[i:id]/', function( $id ) {
    require __DIR__ . '/../templates/p'.$id.'.php.html';
});


// match current request
$match = $router->match();

// call closure or throw 404 status
if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    // no route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}