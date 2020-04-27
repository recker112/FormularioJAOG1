<?php
include('../assets/php/clasedb.php');

extract($_REQUEST);

//Base de datos
$db = new classDB;
$con = $db->conectar();

//Sql
$sql="INSERT INTO utiles_escolares VALUES(NULL, '$nombre', '$uso', '$caracteristicas', '$nivel')";

$result=mysqli_query($con,$sql);

if ($result){
	header("Location: controlador.php?operacion=registrar&status=success");
}else {
	header("Location: controlador.php?operacion=registrar&status=error");
}
?>