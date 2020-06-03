<?php
include 'utiles_escolares.php';

echo "Probando Clase de PHP: <br/>";
$tijeras = new Tijeras("Colores", "Pintar", "Azules");
$tijeras->ShowInfo();
?>