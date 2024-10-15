<?php

Class RepoCoche implements RepoCrud
{
// creamos una varible estatica para poder hacer a sangre las funcionalidades

    // propiedades
   
    // construcctor o constructores

    //Metodos

    // metodos para conexion con base de datos
    // create, read, modify, delete CRUD

    // 1º nuevoCoche es create para crearlo en la base de datos y
    // devuelve el coche ya completo con id de la base de datos
    //
    // funcion nuevoCoche(Coche coche): Coche {
       // Conexion::getConection();
       // return new Coche(,,,,,,,,);
    //  Repocoche rc = new RepoCoche
    //}

    // funcion getbyId(int id): Coche {
      //  Conexion::getConection();
       // return new Coche(,,,,,,,,);
    //  Repocoche rc = new RepoCoche
    //}
    
    public function new(Coche $coche){

        Return new Coche();
    };

    public function findByID($id){};

    public function findByObj($objeto){};

    public function update($id, $objeto){};

    public function delete(Obj $objeto){};

    public function save(Obj $objeto){};

    public function getAll(){};
    
}
