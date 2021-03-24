<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    //use App\Controllers\BaseController;
    use App\Model\mrLibrosModel;    

    class mrLibrosController {
        
        public function new($request, $response, $args){
            $response->getBody()->write("Insertar un nuevo Libro");
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
        }
        public function show(Request $request, Response $response, $args){
          var_dump($args);
          $id = $args['id'];
          $ciudad = $args['ciudad'];
          echo $id." ".$ciudad;    
        }
        

        public function getFilter(Request $request, Response $response, $args){
            $parametros = $request->getQueryParams();
            var_dump($parametros);
            $precio = $parametros['precio'];
            $nombre = $parametros['nombre_libro'];
            echo $nombre. " " .$precio;
        }
        
        public function mrAll($request, $response, $args){
            $libros = mrLibrosModel::mrAll();
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
           
            
        }
    }