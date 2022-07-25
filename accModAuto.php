<!DOCTYPE html>
<html lang="es">

<head>
    <title>Modificar vehículo</title>
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
//update automóvil
if (isset($_REQUEST['modificar']) && strlen($_REQUEST['modelo']) > 0 && strlen($_REQUEST['descAuto']) > 0 && strlen($_REQUEST['potencia']) > 0) {
    $id = $_REQUEST['ID'];
    $modelo = $_REQUEST['modelo'];
    $descripcion = $_REQUEST['descAuto'];
    $potencia = $_REQUEST['potencia'];

    $sql = "UPDATE automovil SET modelo = '$modelo', descripcion = '$descripcion', potencia = '$potencia' WHERE id = '$id'";

    try {
        $result = $mysqli->query($sql);

        echo "Automovil modificado";
    } catch (Exception $e) {
        echo "Error al modificar automóvil  " . $e->getMessage();
    } finally {
        mysqli_close($mysqli);
    }
} else {
    echo "<p>Error al modificar automóvil: campos vacios</p>";
}

echo "<br><br><br><a href='index.html'>Volver al inicio</a>";
?>
</body>

</html>