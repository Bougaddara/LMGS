<?php
namespace App\Model;
use App\Config\DB;

class mrLibrosModel {
    private static $table = 'libros';
    private static $DB;

    public static function conexionDB(){
        mrLibrosModel::$DB = new DB();
    }
   
    public static function mrAll(){
        mrLibrosModel::conexionDB();
        $sql = "Select * from libros ";
        $data = mrLibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }

    public static function mrcategorias($P1){
        mrLibrosModel::conexionDB();
        $sql = "Select * from libros l inner join categorias c on l.categoriaid=c.categoriaid where l.precio > ? and c.nombre_categoria = ? ";
        $data = mrLibrosModel::$DB->run($sql,$P1);
        return $data->fetchAll();
    }
   


   
    
  
}