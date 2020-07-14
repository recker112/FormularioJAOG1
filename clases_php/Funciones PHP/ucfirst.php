<?php
echo "La función ucfirst() sirve para convertir en mayúsucla solo el primer caracter de una cadena<br/>";

echo "<br> <br>";

$texto = "lorem ipsu.";

echo "Texto original: ". $texto;

echo "<br/>";

echo "Texto con función: ". ucfirst($texto);

echo "<br> <br>";

$texto = "REACT NATIVE ES UN BUEN FRAMEWORK PARA EL FRONTEND.";

echo "Texto original: ". $texto;

echo "<br/>";

echo "Texto con función: ". ucfirst(strtolower($texto));

echo "<br> <br>";

$texto = "LARAVEL y PHP 8.";

echo "Texto original: ". $texto;

echo "<br/>";

echo "Texto con función: ". ucfirst(strtolower($texto));
?>