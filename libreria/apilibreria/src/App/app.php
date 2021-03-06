<?php
 
use Slim\Factory\AppFactory;
use Slim\Exception\NotFoundException;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
// cargamos el autoload para que pueda detectar el resto de las clases
require __DIR__. '/../../vendor/autoload.php';
 
 
// creamos la aplicación php
$app = AppFactory::create();
$app->setBasePath("/libreria/apilibreria/public/index.php");
//FUNCION DE PRUEBA /index.php/hello
$app->get("/hello", function(Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});
 
//Cargamos en memoria los archivos de rutas que contendrán los entrypoints a cada una de las tablas.
//los entrypoints harán referencia a las acciones CRUD de una tabla de nuestra BD


require __DIR__. "/../Routes/mrlibros.php";
require __DIR__. "/../Routes/mrcategorias.php";
require __DIR__. "/../Routes/mrusuarios.php";
require __DIR__. "/../Routes/mrperfiles.php";





$app->run();


