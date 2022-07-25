<html>

<head>
    <title>Base de Datos</title>
    <meta charset="utf-8">
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
    <?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    try {
        @$mysqli = new mysqli($servidor, $usuario, $clave);
        echo "Conexión con sistema de gestión de bases de datos realizada correctamente <br> servidor: " . $servidor . "<br> usuario: " . $usuario;

        $basedatos = "proyecto";


        try {
            $mysqli->select_db($basedatos);
            echo "<br><br>Base de datos encontrada<br>";
        } catch (Exception $e) {
            echo "<br><br>Error al seleccionar la base de datos: " . $e->getMessage();
            echo "<br>No se a encontradao la base de datos y se va a proceder a su creación. <br> ";


            
            $sql1 = "CREATE DATABASE IF NOT EXISTS `proyecto`;";

            $sql2 ="USE `proyecto`;";
            
            $sql3 = " 
            CREATE TABLE IF NOT EXISTS `automovil` (
              `ID` int(11) NOT NULL AUTO_INCREMENT,
              `modelo` varchar(25) NOT NULL,
              `descripcion` varchar(500) NOT NULL,
              `potencia` int(11) NOT NULL,
              PRIMARY KEY (`ID`)
            ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;";
            

          $sql4 = "  CREATE TABLE IF NOT EXISTS `piloto` (
                `ID` int(11) NOT NULL AUTO_INCREMENT,
                `nombre` varchar(25) NOT NULL,
                `nacimiento` date NOT NULL,
                `Descripcion` varchar(500) NOT NULL,
                PRIMARY KEY (`ID`)
              ) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;";

            
            $sql5 = " CREATE TABLE IF NOT EXISTS `pilo_auto` (
              `ID_Piloto` int(11) NOT NULL,
              `ID_Automovil` int(11) NOT NULL,
              PRIMARY KEY (`ID_Piloto`,`ID_Automovil`),
              KEY `ID_Automovil` (`ID_Automovil`),
              CONSTRAINT `pilo_auto_ibfk_1` FOREIGN KEY (`ID_Piloto`) REFERENCES `piloto` (`ID`) ON DELETE CASCADE,
              CONSTRAINT `pilo_auto_ibfk_2` FOREIGN KEY (`ID_Automovil`) REFERENCES `automovil` (`ID`) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
            ";
            
            $mysqli->query($sql1);
            $mysqli->query($sql2);
            $mysqli->query($sql3);
            $mysqli->query($sql4);
            $mysqli->query($sql5);
        }
    } catch (Exception $e) {
        echo "Fallo conectar a Mysql: " . $e->getMessage();
        $mysqli->rollBack();
    }
    mysqli_close($mysqli);
    ?>
    <br>
    <br>
    <a href='baseDatos.php'>Refrescar estado</a>
    <a href='insertPrueba.php'>Insertar datos de prueba</a>
    <br>
    <br>
    <br>
    <a href='index.html'>Volver</a>

</body>

</html>
