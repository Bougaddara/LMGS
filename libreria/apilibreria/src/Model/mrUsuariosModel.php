<?php
namespace App\Model;
use App\Config\DB;

class mrUsuariosModel {
    private static $table = 'usuarios';
    private static $DB;

    public static function conexionDB(){
        mrUsuariosModel::$DB = new DB();
    }
   
    public static function mrAll(){
        mrUsuariosModel::conexionDB();
        $sql = "Select * from usuarios ";
        $data = mrUsuariosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

    public static function mrnew($US){
        mrUsuariosModel::conexionDB();
        $sql = "insert into usuarios (usuarioid, nombre, apellidos, direccion, ciudad, anioNac) 
                values (?, ?, ?, ?, ?, ?) ";
        $data = mrUsuariosModel::$DB->run($sql,$US);
        return $data->fetchAll();
    }
   


   
    
  
}