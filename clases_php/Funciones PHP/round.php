<?php

$numero = 47.9381745124;
echo "Redondear un número decimal:<br/>";

echo "Número: ". $numero . "<br/>";

echo "Número redondeado: ". round($numero) . "<br/>";

echo "<br/> <br/>";

echo "Redondear un número decimal dejando solo 2 decimas:<br/>";

echo "Número: ". $numero . "<br/>";

echo "Número redondeado: ". round($numero, 2) . "<br/>";

echo "<br/> <br/>";

echo "Redondear un número decimal dejando solo 5 decimas:<br/>";

echo "Número: ". $numero . "<br/>";

echo "Número redondeado: ". round($numero, 5) . "<br/>";
?>