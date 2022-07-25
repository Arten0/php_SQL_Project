<?php

$servidor = "localhost";
$usuario = "root";
$clave = "";

@$mysqli = new mysqli($servidor, $usuario, $clave);
// evitar errores y avisos
if ($mysqli->connect_errno) {
    echo "Fallo conectar a Mysql: " . $mysqli->connect_error . " Bases de datos no encontrada " . $mysqli->connect_errno;
    die("Salida del programa. Error BBDD");
} else {

    $basedatos = "proyecto";
    $mysqli->select_db($basedatos);
}
?>