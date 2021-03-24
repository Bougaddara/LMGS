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

    public static function mrcategorias($P1){
        mrLibrosModel::conexionDB();
        $sql = "Select * from libros l inner join categorias c on l.categoriaid=c.categoriaid where l.precio > ? and c.nombre_categoria = ? ";
        $data = mrLibrosModel::$DB->run($sql,$P1);
        return $data->fetchAll();
    }
   


   
    
  
}