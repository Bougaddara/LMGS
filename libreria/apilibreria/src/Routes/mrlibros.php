<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;

$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/mrlibros', 'App\Controllers\mrLibrosController:mrAll');
    $group->get('/libros/show/{id}/{ciudad}', 'App\Controllers\LibrosController:show');
    
    #  $group->get('/libros/{id}', 'App\Controllers\LibrosController:show');
});