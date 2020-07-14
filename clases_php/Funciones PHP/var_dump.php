<?php
echo "La función var_dump() sirve para mostrar toda la información contenida en una variable<br/>";

echo "<br> <br>";

$var = array('React', 'Angular', 'Vue', 'ES6', 'Laravel', 'MongoDB', 'Redux', 'Ionic', 'ElectronJS');

echo "Variable: ";

var_dump($var);

echo "<br> <br>";

$var = 407.47;

echo "Variable: ";

var_dump($var);

echo "<br> <br>";

$texto = "LARAVEL y PHP 8.";

echo "Variable: ";

var_dump($texto);
?>