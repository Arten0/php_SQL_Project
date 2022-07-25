<html>

<head>
    <title>Galeria del Automovil</title>
    <meta charset="UTF-8">
    <style>
        body {
            background-image: url('img/fondo.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }

        a {
            background-color: red;
            color: white;
            padding: 1em 1.5em;
            text-decoration: none;
            text-transform: uppercase;


        }

        table {



            color: black;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;
            margin-top: auto;
            border-collapse: collapse;
            border: 2px solid #ddd;
            border-radius: 5px;
            background-color: white;


        }

        h2 {
            font-style: italic;
        }

        p {
            text-align: center;
        }

        h1 {
            text-align: center;
            color: red;
            text-shadow: 5px 5px black;
        }
    </style>
</head>

<body>
    <h1>Galeria del Automóvil</h1>
    <table>

        <?php
        require "conexionBD.php";
        $sql = "SELECT  * FROM automovil a INNER JOIN pilo_auto pa ON a.ID = pa.ID_Automovil INNER JOIN piloto p ON p.ID = pa.ID_Piloto ;";
        $result = $mysqli->query($sql);
        while ($row = $result->fetch_array()) {
            echo "<tr>";
            echo "<td>";;
            echo "<h2>" . $row['modelo'] . "</h2>";
            echo $row['potencia'] . " CV <br>";
            echo "<textarea id='1' name='descVeh' rows='15' cols='50' style='resize: none; border: none;  outline: none;' readonly>" . $row['descripcion'] . "</textarea>";
            echo "</td>";
            echo "<td>";
            echo "<h2>Piloto: " . $row['nombre'] . "</h2>";
            echo "Nacimiento: " . $row['nacimiento'] . "<br>";
            echo "<textarea id='2' name='descVeh' rows='15' cols='50' style='resize: none; border: none;  outline: none;' readonly>" . $row['Descripcion'] . "</textarea>";
            echo "</td>";
            echo "</tr>";


            echo "<br> <br>";
        }
        $mysqli->close();
        ?>
    </table>
    <br>
    <p><a href="index.html">Inicio</a>
    <p>

</body>

</html>