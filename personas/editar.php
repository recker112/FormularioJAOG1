<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="PersonasControlador.php" method="POST" name="formulario">
    <table>
      <tr>
        <td colspan="2">Editar Personas:</td>
      </tr>
      <tr>
        <td>Nombres:</td>
        <td>
        <input type="text" name="nombres" id="nombres" placeholder="Nombre" value="<?=$data[1]?>">
        </td>
      </tr>
      <tr>
        <td>Apellidos:</td>
        <td>
        <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" value="<?=$data[2]?>">
        </td>
      </tr>
      <tr>
        <td>Cedula:</td>
        <td>
        <input type="number" name="cedula" id="cedula" placeholder="Cédula" value="<?=$data[3]?>">
        </td>
      </tr>
      <tr>
        <td>
          <input type="hidden" name="id_persona" value="<?=$data[0]?>">
          <input type="hidden" name="operacion" value="actualizar">
          <input type="submit" name="enviar" value="Enviar">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>