<?php
namespace App\Model;
use App\Config\DB;

class mrLibrosModel {
    private static $table = 'libros';
    private static $DB;

    public static function conexionDB(){
        mrLibrosModel::$DB = new DB();
    }
    public static function getFilter($sql, $param){
        $data = mrLibrosModel::$DB->run($sql, $param);
        return $data->fetchAll();
    }

    public static function mrAll(){
        mrLibrosModel::conexionDB();
        $sql = "Select * from libros";
        $data = mrLibrosModel::$DB->run($sql, []);
        return $data->fetchAll();
    }
    public static function show($param){
        LibrosModel::conexionDB();
        $sql = 'SELECT * from libros where libro_id = ?';
        $data = LibrosModel::$DB->run($sql, $param);
        return $data->fetch();
    }
    
  
}