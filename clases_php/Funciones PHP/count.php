<?php
echo "La función count() sirve para contar los elementos de un array <br/>";

echo "<br> <br>";

$var = array('React', 'Angular', 'Vue', 'ES6', 'Laravel', 'MongoDB', 'Redux', 'Ionic', 'ElectronJS');

echo "Array1: ". count($var). " elementos";

echo "<br> <br>";

$var = array(0,1,2,3,4);

echo "Array2: ". count($var). " elementos";

echo "<br> <br>";

$var = array();

echo "Array3: ". count($var). " elementos";
?>