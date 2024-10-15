<?php
// Esta logueado, tiene autorizacion, datos validos?
// Obtencion de datos o realizar operacion $ marcas es un array de marcas
// Actualizo vista y llamo a Pintor.pintaMarcas($marcas)
$document=$_SERVER["DOCUMENT_ROOT"];
var_dump ($document);


include_once "$document/Repositorio/RepoMarca.php";
include_once "$document/vista/pintor.php";
include_once "$document/config/configCon.php";
//include_once "$document/vista/pintor.php"
//include_once "$document/Repositorio/RepoMarca.php"


$marcas=RepoMarca::getAll();

$mostrar=Pintor::listaMarcas($marcas);
echo $mostrar;

ConfigCon::configuracion();



