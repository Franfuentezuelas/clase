<?php


class ConfigCon{

public static function configuracion(){

    $document=$_SERVER["DOCUMENT_ROOT"];

    $bd = "$document/config/conexionBDconcesionario.txt";
    $actual = file_get_contents(trim($bd));
    $array = explode(',', $actual);
    
    $config['DB_URL']=$array[0]; // datos de la conexion a la base de datos de freetour
    $config['USER']=$array[1]; // usuario
    $config['PASS'] = $array[2]; // pass
    
    return $config;
}
}
