<!DOCTYPE html>
<html>

<head>
  <title>Modificar Piloto</title>
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
    form{
            text-align: center;
        }
  </style>
</head>

<body>

  <form id="formIns" name="formIns" method="post" action="accModAuto.php">

    <h3>Modificar automóvil</h3>


    <?php

    $id = $_POST['listado'];

    require "conexionBD.php";

    $sql = "SELECT * FROM automovil where id = '$id'";

    try {
      $result = $mysqli->query($sql);

      while ($row = $result->fetch_assoc()) {
        echo "<label for='nom'>ID:</label>";
        echo "<input type='text' readonly name='ID' id='ID' value='" . $id . "'/>";
        echo "<br>";
        echo "<br>";
        echo "<label for='nom'>Modelo</label>";
        echo "<br>";
        echo "<input type='text' name='modelo' id='modelo' value='" . $row['modelo'] . "'/>";
        echo "<br>";
        echo "<br>";
        echo "<label for='desc'>Descripción</label>";
        echo "<br>";
        echo "<textarea name='descAuto' rows='10' cols='50'>" . $row['descripcion'] . "</textarea><br>";
        echo "<br>";
        echo "<label for='nom'>Potencia </label>";
        echo "<br>";
        echo "<input type='text' name='potencia' id='potencia' value='" . $row['potencia'] . "'/>";
      }
    } catch (Exception $e) {
      echo "<p>Error en consultas: " . $e->getMessage(). "</p>";


      exit;
    } finally {

      mysqli_close($mysqli);
    }


    ?>
    <br>
    <input type="submit" name="modificar" value="Modificar" />
  </form>
  <br>
  <br>
  <a href='index.html'>Volver a inicio</a>
  <br>
  <br>
  <br><p><a href='modificar.php'>Volver a modificar</a></p>


</body>

</html>