<?php
/*El código comienza definiendo tres variables: $A, $B y $C, que son valores en punto flotante. Luego, se realizan dos operaciones aritméticas con estas variables y se guardan los resultados en las variables $F y $G.*/
$A = 1.0;
$B = 3.0;
$C = 4.0;

$F = (($A * $B) / sqrt($C)) / ($C - 1 / $B) - (2 * $C / $A); // La primera operación se asigna a la variable $F, que calcula el resultado de la siguiente expresión matemática:
/*La expresión se evalúa en el siguiente orden: primero, se multiplica $A por $B, luego se divide el resultado por la raíz cuadrada de $C. El resultado de esta división se divide por $C - 1 / $B. Después, se resta 2 * $C / $A del resultado anterior. Finalmente, el resultado se asigna a la variable $F y se imprime en la pantalla.*/
echo $F . "<br>"; 

$G = (2 * $A - $B / sqrt($C)) / ($C + 1 / $B) * ($B / 4);// La segunda operación se asigna a la variable $G, que calcula el resultado de la siguiente expresión matemática:
/*La expresión se evalúa en el siguiente orden: primero, se multiplica $A por 2 y se resta $B dividido por la raíz cuadrada de $C. Luego, el resultado se divide por $C + 1 / $B. Finalmente, se multiplica el resultado por $B / 4 y se asigna a la variable $G, que se imprime en la pantalla.*/
echo $G . "<br>";
