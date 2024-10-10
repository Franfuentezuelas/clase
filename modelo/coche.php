<?php

class Coche{

    private int $idCoche;
    private String $marca;
    private String $modelo;
    
    public function __construct(String $marca, String $modelo){
        $this->marca= $marca;
        $this->modelo= $modelo;
    }

}
