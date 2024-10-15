<?php

// creamos una clase Pintor y metodos para pintar cada cosa
class Pintor{

    public static function listaMarcas($marcas) {
        $plantilla = "";
        foreach($marcas as $item){
            $plantilla .= "Fabricante $item <br>";
        }
        return $plantilla;
    }
}

