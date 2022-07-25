<!DOCTYPE html>
<html>

<head>
  <title>Eliminar Registros</title>
</head>
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

<body>

  <h2>Eliminar Registros</h2>
  <p>Eliminar un registro tambien eliminará la relacion que haya</p>

  <form id="formIns1" name="formIns1" method="post" action="accelim.php">
    <input type="hidden" name="elim" value="0">


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


    <input type="submit" name="Eliminar" value="Eliminar piloto" />

  </form>

  <br>

  <form id="formIns2" name="formIns2" method="post" action="accelim.php">

    <input type="hidden" name="elim" value="1">


    <label for="vehiculo">Lista vehículos:</label>
    <select id="vehiculo" name="vehiculo">
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


    <input type="submit" name="Eliminar" value="Eliminar vehículo" />
  </form>
  <br>
  <br>
  <br><a href='elimRela.php'>Eliminar Relaciones</a>
  <br>
  <br>
  <br><a href='index.html'>Volver a inicio</a>


</body>

</html>