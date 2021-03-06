<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    //use App\Controllers\BaseController;
    use App\Model\mrLibrosModel;    

    class mrLibrosController {
        public function mrAll($request, $response, $args){
            $libros = mrLibrosModel::mrAll();
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);   
        }

        public function mrcategorias(Request $request, Response $response, $args){

            $parametros = $request->getQueryParams();

            $precio = $parametros['precio'];
            $categoria = $parametros['nombre_categoria'];

            $valoresParametros = array ($precio, $categoria);

            $libros = mrLibrosModel::mrcategorias($valoresParametros);
            $librosJson = json_encode($libros);
            $response->getBody()->write($librosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
           
            
        }
    }