<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;
$app->get('/mrusuarios', 'App\Controllers\mrUsuariosController:mrAll');    
$app->post('/mrusuarios/new', 'App\Controllers\mrUsuariosController:mrnew'); 
