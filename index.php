<?php

$document=$_SERVER["DOCUMENT_ROOT"];
include_once "$document/Repositorio/RepoMarca.php";
include_once "$document/modelo/marca.php";

echo $document;
$resultado = RepoMarca::getAll();
var_dump($resultado);
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

