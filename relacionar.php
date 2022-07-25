<html>

<head>
  <title>Relacionar</title>
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

  <form id="formRel" name="formRel" method="post" action="InsRelacion.php">
    <label for="relacionar">
      <h2>Relacionar Pilotos con vehículo</h2>
    </label>

    <label for="listPiloto">Lista de Pilotos:</label>
    <select name="listPiloto" id="listPiloto">

      <?php
      require "conexionBD.php";

      $sql = "SELECT * FROM piloto";

      $result = $mysqli->query($sql);

      while ($row = $result->fetch_assoc()) {
        echo "<p><option value='" . $row['ID'] . "'>" . $row['nombre'] . "</option></p>";
      }

      mysqli_close($mysqli);
      ?>

    </select>

    <label for="listVehiculo">Lista de Vehículos:</label>
    <select name="listVehiculo" id="listVehiculo">

      <?php
      require "conexionBD.php";

      $sql = "SELECT * FROM automovil";

      $result = $mysqli->query($sql);

      while ($row = $result->fetch_assoc()) {
        echo "<p><option value='" . $row['ID'] . "'>" . $row['modelo'] . "</option></p>";
      }

      mysqli_close($mysqli);
      ?>
    </select>
    <br>
    <br>
    <input type="submit" name="Relacionar" value="Crear relación" />
    <br>
    <br>
    <br>
    <br>
    <a href="index.html">Volver al inicio</a>





  </form>
</body>