<?php
include('assets/php/clasedb.php');

extract($_REQUEST);

//Base de datos
$db = new classDB;
$con = $db->conectar();

//Sql
$sql="INSERT INTO datos_personales VALUES(NULL, '$firstName', '$lastFirstName', '$dni')";

$result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php if($result) { ?>
    <h1>Formulario insertado</h1><a href="index.php">Regresar</a>
  <?php } else { ?>
    <h1>Error al isertar el formulario</h1><a href="index.php">Regresar</a>
  <?php } ?>
</body>
</html>