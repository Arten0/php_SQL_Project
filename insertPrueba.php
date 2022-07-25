<!DOCTYPE html>
<html lang="es">

<head>
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
    <title>Inserción datos platilla</title>

</head>

<body>
    <?php

    require "conexionBD.php";

    $sql1 = "INSERT INTO `piloto` (`ID`, `nombre`, `nacimiento`, `Descripcion`) VALUES
(1, 'Batman', '1939-05-27', 'Batman (conocido inicialmente como Bat-Man y en español como el Hombre Murciélago) es un personaje de cómic creado por los estadounidenses Bob Kane y Bill Finger,y propiedad de DC Comics. Apareció por primera vez en la historia titulada El caso del sindicato químico de la revista Detective Comics, lanzada por la editorial National Publications el 30 de marzo de 1939.'),
(2, 'Emmett Brown', '1914-06-11', 'Dr. Emmett Lathrop Brown, apodado Doc, es un personaje de ficción de la trilogía de películas Back to the Future (también conocidas como Regreso al Futuro en España y Volver al Futuro en Hispanoamérica) interpretado por el actor estadounidense Christopher Lloyd. La apariencia y gestos del personaje están vagamente inspirados en Leopold Stokowski y Albert Einstein.');";

    $sql2 = "INSERT INTO `automovil` (`ID`, `modelo`, `descripcion`, `potencia`) VALUES
(1, 'Batmobile', 'El Batmobile (en inglés) (conocido como Batmóvil en España y como Batimóvil en Latinoamérica) es el ficticio automóvil conducido por el superhéroe Batman. Ubicado en el Batcave,&#8203;al cual accede a través de una entrada oculta, el Batmobile es un vehículo fuertemente armado que es usado por Batman en su lucha contra el crimen. Utilizando la última tecnología de rendimiento civil, junto con prototipos de hardware de grado militar, la mayoría de los cuales fueron desarrollados por Empresa', 800),
(2, 'DMC DeLorean', 'Automóvil deportivo fabricado por DeLorean Motor Company (DMC) entre 1981 y 1982. Es conocido como el DeLorean, ya que este fue el único modelo que fabricí dicha compañía. El auto también es llamado a veces DMC-12, que es su designación interna de preproducción. Sin embargo, el nombre DMC-12 nunca se usa en material de ventas o marketing para el modelo de producción.', 132);";

    $sql3 = "INSERT INTO `pilo_auto` (`ID_Piloto`, `ID_Automovil`) VALUES
(1, 1),
(2, 2);";

    try {
        $mysqli->query($sql1);
        $mysqli->query($sql2);
        $mysqli->query($sql3);

        echo "<br>Datos inciales/prueba insertados";
    } catch (Exception $e) {
        echo "Lo sentimos, Error al insertar datos:";
        echo "Datos de prueba ya insertados<br>";
        //echo $e->getMessage();
    }
    echo "<br><br><br><a href='index.html'>Inicio</a>";
    ?>
</body>

</html>