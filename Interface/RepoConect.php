<?php
// con esta interface obligamos a que todos los repositorios que 
// implementen RepoCrud
/**
 * RepoCrud intercafe para comunicacion base de datos
 */
class RepoCrud{

    public function new($objeto){};

    public function findByID($id){};

    public function findByObj($objeto){};

    public function update($id, $objeto){};

    public function delete(Obj $objeto){};

    public function save(Obj $objeto){};

    public function getAll(){};

}