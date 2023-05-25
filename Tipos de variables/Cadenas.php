<?php

// --------------------------------
// -- Tipos de Datos de Cadena de Caracteres - String
// --------------------------------

$unaCadenaDobleComillas = "Mi \"amigo\" D'alessandro es un gran fubolista"; // shift + 2 para hacer las comillas dobles¬¬
echo $unaCadenaDobleComillas;
echo PHP_EOL;
$unaCadenaSimpleComillas = 'Cadena de "comillas" simples'; // tecla a la derecha del 0
echo $unaCadenaSimpleComillas;
echo PHP_EOL;

$cadena1 = "hola";
echo "Soy la cadena1: " . $cadena1 . PHP_EOL;

$cadena2 = "mundo";
echo "Soy la cadena2: " . $cadena2 . PHP_EOL;

$cadena3 = $cadena1 . ' ' . $cadena2;
echo "Soy la cadena3: " . $cadena3 . PHP_EOL;