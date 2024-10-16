<?php

class Coche{

    private int $id;
    private String $marca;
    private String $modelo;
    
    public function __construct(String $marca, String $modelo,int $id = null){
        $this->marca= $marca;
        $this->modelo= $modelo;
        $this->id=$id;
    }

}
