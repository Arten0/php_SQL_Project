<!DOCTYPE html>
<html lang="es">

<head>
    <title>Insercion</title>
    <meta charset="UTF-8">
    <style>
        body {
            background-color: rgb(221, 94, 94);
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;

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
<body>
    <?php

    require "conexionBD.php";
    //Opcion
    $op = $_REQUEST['prodId'];


    try {
        if (!boolval($op)) {

            if (isset($_REQUEST['nom']) &&  isset($_REQUEST['nac']) && isset($_REQUEST['descPil'])) {

                //Datos piloto
                $pNom = $_REQUEST['nom'];
                $pNac = $_REQUEST['nac'];
                $pDesc = $_REQUEST['descPil'];
                if (strlen($pNom) != 0 && strlen($pDesc) != 0) {

                    $sql = "INSERT INTO piloto (nombre, nacimiento, Descripcion) VALUES ('$pNom', '$pNac', '$pDesc')";

                    $mysqli->query($sql);
                    echo "<p>Piloto agregado correctamente</p>";
                } else {
                    echo "Error en insertar piloto: Campos vacios";
                }
            } else
                echo "<p>Valores del piloto incorrectos</p>";
        } else {
            if (isset($_REQUEST['nomVeh']) &&  isset($_REQUEST['descVeh']) && isset($_REQUEST['potencia'])) {

                //Datos vehiculo
                $vNom = $_REQUEST['nomVeh'];
                $vDesc = $_REQUEST['descVeh'];
                $vPotencia = $_REQUEST['potencia'];

                if (strlen($vNom) != 0 && strlen($vDesc) != 0) {
                    $sql2 = "INSERT INTO automovil (modelo, descripcion, potencia) VALUES ('$vNom', '$vDesc', '$vPotencia')";
                    $mysqli->query($sql2);
                    echo "<p>Vehiculo agregado correctamente</p>";
                } else {
                    echo "<p>Error en insertar Vehiculo: Campos vacios</p>";
                }
            } else
                echo "Valores del vehiculo incorrectos";
        }
    } catch (Exception $e) {
        mysqli_rollback($mysqli);
        echo "Error al agregar piloto o vehiculo: " . $e->getMessage();
    }


    mysqli_close($mysqli);
    echo "<br>";
    echo "<p><a href='relacionar.php'>Realizar Piloto con vehiculo relación</a></p><br>";
    echo "<p><br><a href='registrarEntrada.html'>Volver</a><p>";


    ?>
</body>
</html>
