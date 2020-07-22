<?php
include("clasedb.php");
extract($_REQUEST);

$db = new classDB();

$conex = $db->conectar();

// Config
$reg = 20; // Registros a insertar
$estacionamiento = array('Si', 'No');
$status = array('Ocupado', 'Desocupado', 'Mantenimiento');
$tipo = array('Casa', 'Apartamento', 'Chalet', 'Quinta', 'Otro');
$postal = array('2115', '0043', '1001', '0047');

$add = 0;
$error = array();
$agregados = array();
$e = 0;
for ($i=1; $i <= 20; $i++) { 
	$irand = rand(0,4000);
	$erand = rand(0, count($estacionamiento) - 1);
	$srand = rand(0, count($status) - 1);
	$trand = rand(0, count($tipo) - 1);
	$prand = rand(0, count($postal) - 1);

	$sql = "INSERT INTO inmuebles (idem, estacionamiento, status, tipo, cod_postal) VALUES 
	('".$irand."','".$estacionamiento[$erand]."', '".$status[$srand]."', '".$tipo[$trand]."', '".$postal[$prand]."')";

	if ($conex->query($sql)) {
		$agregados[$add] = $irand;
		$add++;
	}else {
		$error[$e] = $conex->error;
		$e++;
	}
}

echo "Registros añadidos: $add <br/><br/>";
for ($i=0; $i < count($agregados); $i++) { 
	echo "$i: Apartamento ".$agregados[$i]."<br/>";
}

echo "<br/>";
echo "Registros fallidos: <br/> <br/>";
for ($i=0; $i < count($error); $i++) { 
	echo "$i: ".$error[$i]."<br/>";
}

/*
// SQL para crear tabla
$sql = "CREATE TABLE inmuebles(id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, idem VARCHAR(50) NOT NULL, estacionamiento ENUM('Si','No'), status ENUM('Ocupado','Desocupado','Mantenimiento'), tipo ENUM('Casa','Apartamento','Chalet','Quinta','Otro'),cod_postal VARCHAR(5));";

// Crear tabla
if ($conex->query($sql)) {
	echo "Tabla creada";
} else {
	echo "No se pudo crear la tabla por el siguiente motivo: ". $conex->error;
}
*/

?>