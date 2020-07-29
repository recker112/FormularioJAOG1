<?php
include("clasedb.php");
extract($_REQUEST);

$db = new classDB();

$conex = $db->conectar();

/*
OBTENER TODOS LOS REGISTROS
*/
?>
<h1>Obtener todos los inmuebles</h1>
<table>
	<thead>
		<th>ID</th>
		<th>IDEM</th>
		<th>Estacionamiento</th>
		<th>Estado</th>
		<th>Tipo</th>
		<th>Código postal</th>
	</thead>
	<tbody>
<?
$sql = "SELECT * FROM inmuebles";

$result = $conex->query($sql);

while ($row = $result->fetch_array()) {
	echo "<tr style='text-align: center'>";

	echo "<td>". $row[0]. "</td>";

	echo "<td>". $row[1]. "</td>";

	echo "<td>". $row[2]. "</td>";

	echo "<td>". $row[3]. "</td>";

	echo "<td>". $row[4]. "</td>";

	echo "<td>". $row[5]. "</td>";

	echo "</tr>";
}

?>
	</tbody>
</table>


<h1>Obtener todos los inmuebles con estacionamiento y desocupados</h1>
<table>
	<thead>
		<th>ID</th>
		<th>IDEM</th>
		<th>Estacionamiento</th>
		<th>Estado</th>
		<th>Tipo</th>
		<th>Código postal</th>
	</thead>
	<tbody>
<?
$sql = "SELECT * FROM inmuebles WHERE estacionamiento='Si' AND status='Desocupado'";

$result = $conex->query($sql);

while ($row = $result->fetch_array()) {
	echo "<tr style='text-align: center'>";

	echo "<td>". $row[0]. "</td>";

	echo "<td>". $row[1]. "</td>";

	echo "<td>". $row[2]. "</td>";

	echo "<td>". $row[3]. "</td>";

	echo "<td>". $row[4]. "</td>";

	echo "<td>". $row[5]. "</td>";

	echo "</tr>";
}

?>
	</tbody>
</table>

<h1>Contar inmuebles</h1>
<table>
	<thead>
		<th>Con estacionamiento</th>
		<th>Sin estacionamiento</th>
		<th>Ocupados</th>
		<th>Desocupados</th>
	</thead>
	<tbody>
<?
$sql = "SELECT 
count(case when estacionamiento='Si' then 1 end),
count(case when estacionamiento='No' then 1 end),
count(case when status='Ocupado' then 1 end),
count(case when status='Desocupado' then 1 end)
FROM inmuebles";

$result = $conex->query($sql);

$row = $result->fetch_array();

echo "<tr style='text-align: center'>";

echo "<td>". $row[0]. "</td>";

echo "<td>". $row[1]. "</td>";

echo "<td>". $row[2]. "</td>";

echo "<td>". $row[3]. "</td>";

echo "</tr>";

?>
	</tbody>
</table>