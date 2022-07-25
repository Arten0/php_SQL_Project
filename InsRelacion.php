<!DOCTYPE html>
<html lang="es">
<head>
    <title>Relación</title>
    <meta charset="UTF-8">
    <style>
    body {
      background-color: rgb(221, 94, 94);
      font-size: 20px;
      font-family: Arial, Helvetica, sans-serif;
      text-align: center;

    }

    p {
      text-align: center;
    }

    a {
      background-color: red;
      color: white;
      padding: 1em 1.5em;
      text-decoration: none;
      text-transform: uppercase;

    }

        </style>


</head>    
<?php

require "conexionBD.php";

$idPil = $_REQUEST['listPiloto'];
$idVeh = $_REQUEST['listVehiculo'];

try{
    $sql = "INSERT INTO pilo_auto (ID_piloto, ID_automovil) VALUES ('$idPil', '$idVeh')";
    $result = $mysqli->query($sql);
    echo "<p>Relacionado correctamente</p>";
}
catch(Exception $e){
    echo "<p>Error al relacionar relación duplicada</p><br>" ;
}
mysqli_close($mysqli);
echo "<br>";


echo "<a href='relacionar.php'>Volver ha relacionar</a>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<a href='index.html'>Volver al inicio</a>";

?>