<?php
    namespace App\Controllers;
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    //use App\Controllers\BaseController;
    use App\Model\mrPerfilesModel;    

    class mrPerfilesController {

        public function mrnew(Request $request, Response $response, $args){

            $parametros = $request->getParsedBody();

            $perfilid =$parametros['perfilid'];
            $email =$parametros['email'];
            $facebook =$parametros['facebook'];
            $instagram =$parametros['instagram']; 
            $foto =$parametros['foto'];
            $rol = $parametros['rol']; 
            $userid =$parametros['userid'];

            $valoresParametros = array ($perfilid, $email, $facebook, $instagram, $foto, $rol, $userid);

            $perfil = mrPerfilesModel::mrnew($valoresParametros);
            $perfilJson = json_encode($perfil);
            $response->getBody()->write($perfilJson);
            return $response
                ->withHeader('Content-Type', 'application/json')
                ->withStatus(200);
           
            
        }
    }