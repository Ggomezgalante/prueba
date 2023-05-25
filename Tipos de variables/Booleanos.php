<?php

// --------------------------------
// -- Tipos de Datos Booleanos
// --------------------------------

$valorVerdadero = true; //tiene valor verdadero
$valorFalso = false; // tiene valor falso

/* echo $valorVerdadero; // devuelve 1
echo $valorFalso; // devuelve "" */

var_dump($valorVerdadero);
var_dump($valorFalso);

$tieneValor= 0.0000001;
echo "Tiene valor vale $tieneValor: " . (bool)$tieneValor;
echo PHP_EOL;
$tieneValor= "";
echo "Tiene valor vale $tieneValor: " . (bool)$tieneValor;