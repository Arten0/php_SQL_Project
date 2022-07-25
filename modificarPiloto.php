<html>

<head>
    <title>Modificar Piloto</title>
</head>
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
        form{
            text-align: center;
        }

</style>

<body>

    <form id="formIns" name="formIns" method="post" action="accModPil.php">

        <h3>Modificar Piloto</h3>


        <?php

        $id = $_POST['listado'];


        require "conexionBD.php";

        $sql = "SELECT * FROM piloto where id = '$id'";

        try {
            $result = $mysqli->query($sql);

            while ($row = $result->fetch_assoc()) {
                echo "<label for='nom'>ID:</label>";
                echo "<input type='text' readonly name='ID' id='ID' value='" . $id . "'/>";
                echo "<br>";
                echo "<label for='nom'>Nombre</label>";
                echo "<br>";
                echo "<input type='text' name='nom' id='nom' value='" . $row['nombre'] . "'/>";
                echo "<br>";
                echo "<label for='nac'>Nacimiento</label>";
                echo "<br>";
                echo "<input type='date' name='nac' id='nac' value='" . $row['nacimiento'] . "'/>";
                echo "<br>";
                echo "<label for='desc'>Descripcion</label>";
                echo "<br>";
                echo "<textarea name='descPil' rows='10' cols='50'>" . $row['Descripcion'] . "</textarea><br>";
            }
        } catch (Exception $e) {
            echo "Error en consultas: " . $e->getMessage();


            exit;
        } finally {

            mysqli_close($mysqli);
        }


        ?>
        <br>
        <input type="submit" name="modificar" value="Modificar" />
    </form>
    <br><p><a href='modificar.php'>Volver a modificar</a></p>
    <br>
    <br><p><a href='index.html'>Volver a inicio</a></p>


</body>

</html>