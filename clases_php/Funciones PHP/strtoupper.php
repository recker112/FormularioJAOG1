<?php
echo "La función Strtoupper() sirve para convertir un los caracteres de yb string a mayúsculas<br/>";

echo "<br> <br>";

$texto = "Hola, buen día.";

echo "Texto original: ". $texto;

echo "<br/>";

echo "Texto con función: ". strtoupper($texto);

echo "<br> <br>";

$texto = "Ayer hizo mucho FRÍO.";

echo "Texto original: ". $texto;

echo "<br/>";

echo "Texto con función: ". strtoupper($texto);

echo "<br> <br>";

$texto = "MARTES.";

echo "Texto original: ". $texto;

echo "<br/>";

echo "Texto con función: ". strtoupper($texto);
?>