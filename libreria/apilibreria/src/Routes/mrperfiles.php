<?php
# para agrupar las rutas en grupos
use Slim\Routing\RouteCollectorProxy;   
$app->post('/mrperfiles/new', 'App\Controllers\mrPerfilesController:mrnew'); 