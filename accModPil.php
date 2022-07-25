<!DOCTYPE html>
<html lang="es">
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
        </style>
    </head>
<?php
require "conexionBD.php";
//update piloto
if(isset( $_REQUEST['modificar']) && strlen($_REQUEST['nom'])> 0 && strlen($_REQUEST['nac'])> 0 && strlen($_REQUEST['descPil'])> 0){

    $id =  $_REQUEST['ID'];
    $nombre =  $_REQUEST['nom'];
    $nacimiento =  $_REQUEST['nac'];
    $descripcion =  $_REQUEST['descPil'];


    $sql = "UPDATE piloto SET nombre = '$nombre', nacimiento = '$nacimiento', Descripcion = '$descripcion' WHERE id = '$id'";

    $result = $mysqli->query($sql);
    if($result){
        echo "<p>Piloto modificado</p>";
    }
    else{
        echo "<p>Error al modificar piloto</p>";
    }
}
mysqli_close($mysqli);
echo "<br><a href='index.html'>Volver</a>";
?>
</body>
</html>