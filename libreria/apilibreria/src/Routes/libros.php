<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;
/*//FUNCION DE PRUEBA /index.php/libros
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;*/

//contendrĂ¡ los entrypoints (acciones CRUD) de la tabla libros
$app->group('/api', function(RouteCollectorProxy $group){
    $group->get('/libros', 'App\Controllers\LibrosController:getAll');
    $group->get('/libros/show/{id}/{ciudad}', 'App\Controllers\LibrosController:show');
    $group->post('/libros/new', 'App\Controllers\LibrosController:new'); 
    $group->get('/libros/filter', 'App\Controllers\LibrosController:getFilter');  
    #  $group->get('/libros/{id}', 'App\Controllers\LibrosController:show');
});

/*//FUNCION DE PRUEBA /index.php/libros
$app->get("/libros", function(Request $request, Response $response, $args) {
    $response->getBody()->write("Hello, I'm your libros.php file");
    return $response;
});*/






