<?php

// no hay que incluir los includes por que en index que es la unica puerta tengo la autocarga
// tiene que estar configurado para poder encontrarlo en los diferentes directorios
include_once "micargador.php";


$resultado = RepoMarca::getAll();
var_dump($resultado);

$marca = RepoMarca::findByID(5);
var_dump($marca);
$marca2 = RepoMarca::findByID(1);
var_dump($marca2);
$marca3 = RepoMarca::findByID(3);
var_dump($marca3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
    <a href="control/Listadomarcas.php">Lista de Marcas</a>
</body>
</html>

