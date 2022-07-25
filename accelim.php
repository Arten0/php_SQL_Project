<!DOCTYPE html>
<html lang="es">

<head>
    <title>Eliminar Entradas</title>
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

$op = $_REQUEST['elim'];


if (!$op) {
    try {
        $sql = "DELETE FROM piloto WHERE ID = " . $_REQUEST['listado'];
        $result = $mysqli->query($sql);
        echo "Piloto eliminado";
    } catch (Exception $e) {
        echo "Error al eliminar piloto:" . $e;
    }
} else {
    try {
        $sql = "DELETE FROM automovil WHERE ID = " . $_REQUEST['vehiculo'];
        $result = $mysqli->query($sql);
        echo "<p>Vehiculo eliminado</p>";
    } catch (Exception $e) {
        echo "<p>Error al eliminar vehiculo:" . $e."</p>";
    }
}
mysqli_close($mysqli);
echo "<br>";
echo "<br>";

echo "<br><a href='eliminar.php'>Volver</a>";
echo "<br>";
echo "<br>";
echo "<br><a href='index.html'>Volver al inicio</a>";

?>
</html>