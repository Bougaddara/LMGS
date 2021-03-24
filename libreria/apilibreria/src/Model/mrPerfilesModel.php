<?php
namespace App\Model;
use App\Config\DB;

class mrPerfilesModel {
    private static $table = 'perfiles';
    private static $DB;

    public static function conexionDB(){
        mrPerfilesModel::$DB = new DB();
    }
   
    

    public static function mrnew($pr){
        mrPerfilesModel::conexionDB();
        $sql = "insert into usuarios (perfilid, email, facebook, instagram, foto, rol, userid) 
                values (?, ?, ?, ?, ?, ?, ?) ";
        $data = mrPerfilesModel::$DB->run($sql,$pr);
        return "perfil ". $pr[0] . " INSERTADO CORRECTAMENTE ";
    }
   


   
    
  
}