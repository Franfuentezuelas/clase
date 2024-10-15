<?php

$document=$_SERVER["DOCUMENT_ROOT"];

include_once "$document/config/configCon.php";

class Conexion{
    // creamos una conexion con el patron singleton de esta forma solo hay una unica conexion privada que no se puede modificar
    private static PDO $con; // la clase es de tipo conexion
    private static $datos=[];
    
    // funcion que mantiene el patron singleton
    public static function getConection(){
        
        if(empty(self::$con)){
            self::$datos=configCon::configuracion();
            
            //self::$con=new PDO('mysql:host=localhost;dbname=concesionario','root','Fran1234');
            self::$con=new PDO(self::$datos['DB_URL'],self::$datos['USER'],self::$datos['PASS']); // aqui en cadena de conexion hay que poner los atributos de conexion
        }
        return self::$con;
    }
}