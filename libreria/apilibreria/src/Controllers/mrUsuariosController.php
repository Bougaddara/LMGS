<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    //use App\Controllers\BaseController;
    use App\Model\mrUsuarioModel;    

    class mrUsuarioController {
        public function mrAll($request, $response, $args){
            $usuario = mrUsuarioModel::mrAll();
            $usuariosJson = json_encode($usuario);
            $response->getBody()->write($usuariosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);   
        }

        public function mrnew(Request $request, Response $response, $args){

            $parametros = $request->getParsedBody();

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