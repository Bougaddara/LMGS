<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;
$app->get('/mrlibros', 'App\Controllers\mrLibrosController:mrAll');    
$app->get('/mrlibros/categoria', 'App\Controllers\mrLibrosController:mrcategorias'); 

