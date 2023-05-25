<?php

// --------------------------------
// -- Coalescencia nula - ??
// --------------------------------

/*

$a ?? "Valor por defecto"

La idea es que si el primer valor es null entonces tomará el segundo valor.
Si ese valor es null tomará el siguiente valor.

 */

 if(!$a){
    $a = 0;
 }

 $a ?? 0;

 $cargo = $cargo ?? "Empleado comun";
echo "El cargo que ocupa la persona es : $cargo";