<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    //use App\Controllers\BaseController;
    use App\Model\mrUsuariosModel;    

    class mrUsuariosController {
        public function mrAll($request, $response, $args){
            $usuario = mrUsuariosModel::mrAll();
            $usuariosJson = json_encode($usuario);
            $response->getBody()->write($usuariosJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);   
        }

        public function mrnew(Request $request, Response $response, $args){

            $parametros = $request->getParsedBody();

            
            $usuarioid = $parametros['usuario'];
            $nombre =$parametros['nombre'];
            $apellido =$parametros['apellido'];
            $direccion =$parametros['direccion'];
            $ciudad =$parametros['ciudad'];
            $anioNac =$parametros['anioNac'];
            $valoresParametros = array ($usuarioid, $nombre, $apellido, $direccion, $ciudad, $anioNac);

            $usuario = mrUsuariosModel::mrnew($valoresParametros);
            $usuarioJson = json_encode($usuario);
            $response->getBody()->write($usuarioJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
           
            
        }
    }