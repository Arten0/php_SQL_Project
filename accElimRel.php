<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Eliminar relación</title>
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

//eliminar relaciones segun el id de piloto y el id de auto
$sql = "DELETE FROM pilo_auto WHERE ID_Piloto = '".$_REQUEST['id_pilot']."' AND ID_Automovil = '".$_REQUEST['id_auto']."'";

try{
    $result = $mysqli->query($sql);
    echo "<br>Relacion eliminada";
}catch(Exception $e){
    echo "Error al eliminar relacion".$e->getMessage();
}
$mysqli->close();
echo "<br>";
echo "<br>";
echo "<a href='elimRela.php'>Eliminar otra relación</a>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<a href='index.html'>Volver al inicio</a>";


?>