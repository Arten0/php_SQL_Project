<html>

<head>
    <title>Eliminar Relaciones</title>
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

<body>
    <h2>Eliminar Relaciones</h2>

    <?php
    require "conexionBD.php";

    $sql = "SELECT p.ID AS id_pilot, p.nombre, a.ID AS id_auto,a.modelo  FROM piloto p INNER JOIN pilo_auto pa ON p.ID = pa.ID_Piloto
                INNER JOIN automovil a ON a.ID = pa.ID_Automovil;";

    $result = $mysqli->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo " <form id='formElim' name='formElim' method='post' action='accElimRel.php'>";
        echo " <input type='hidden' name='id_pilot' value='" . $row['id_pilot'] . "'>";
        echo "<input type = 'text' name = 'pilotname' value = '" . $row['nombre'] . "' readonly>";
        echo " <----Relacionado con---> ";

        echo " <input type='hidden' name='id_auto' value='" . $row['id_auto'] . "'>";

        echo "<input type = 'text' name = 'autoname' value = '" . $row['modelo'] . "' readonly>";
        echo " ";
        echo "<input type = 'submit' name = 'eliminar' value = 'Eliminar'>";
        echo "<br>";
    }


    mysqli_close($mysqli);
    ?>
    <br>
    <br><a href='index.html'>Volver al inicio</a>

    </form>

</html>