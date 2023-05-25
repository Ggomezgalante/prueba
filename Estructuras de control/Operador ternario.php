<?php

// --------------------------------
// -- Ternario
// --------------------------------

/*

(expresión) ? resultado1 : resultado2

La expresión ------ (expresión) ? resultado1 : resultado2 ----- evalúa a resultado1
si la expresión es TRUE, y result2 si la expresión es FALSE.

 */

$edad = readline('Ingrese su edad');

/* if ($edad >= 21) 
{
    echo "La persona es mayor de edad";
} 
else 
{
    echo "La persona es menor de edad";
} */

echo ($edad >= 21) ? "La persona es mayor de edad" : "La persona es menor de edad";