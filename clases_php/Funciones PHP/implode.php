<?php
echo "La función implode() sirve para unir elementos de un array a un string<br/>";

echo "<br> <br>";

$textoArray = array('Buen', 'día.');

$textoArray = implode(' ', $textoArray);

echo "Array1: ". $textoArray;

echo "<br> <br>";

$textoArray = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes');

$textoArray = implode('.-.', $textoArray);

echo "Array2: ". $textoArray;

echo "<br> <br>";

$textoArray = array('Chillstep', 'FutureBass', 'House.');

$textoArray = implode(',', $textoArray);

echo "Array3: ". $textoArray;
?>