<!DOCTYPE html>
<html lang="es">

<head>
  <title>Modificar Entradas</title>
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

  <h2>Modificar Entradas</h2>
  <p>Elige y seleciona una opción para modificar:</p>

  <form id="formIns1" name="formIns1" method="post" action="modificarPiloto.php">



    <label for="listado">Lista de pilotos:</label>
    <select name="listado" id="listado">

      <?php
      require "conexionBD.php";

      $sql = "SELECT * FROM piloto";

      $result = $mysqli->query($sql);

      while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['ID'] . "'>" . $row['nombre'] . "</option>";
      }

      mysqli_close($mysqli);
      ?>

    </select>


    <input type="submit" name="modificar" value="Modificar piloto" />

  </form>

  <br>
  <form id="formIns2" name="formIns2" method="post" action="modificarVehiuclo.php">



    <label for="listado">Lista de vehículos :</label>
    <select name="listado" id="listado">

      <?php
      require "conexionBD.php";

      $sql = "SELECT * FROM automovil";

      $result = $mysqli->query($sql);

      while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['ID'] . "'>" . $row['modelo'] . "</option>";
      }

      mysqli_close($mysqli);
      ?>

    </select>

    <input type="submit" name="modificar" value="Modificar vehículo" />

  </form>
  <br>
  <br>
  <br>

  <a href="index.html">Volver</a>


</body>

</html>