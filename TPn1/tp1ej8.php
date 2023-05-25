Para cada uno de los enunciados, podemos escribir las siguientes expresiones lógicas en PHP:

a. <?php ($A > 0) && ($B < 0) ?>

Explicación: La expresión lógica "A es positivo" se representa como "$A > 0". La expresión lógica "B es negativo" se representa como "$B < 0". La conjunción "y" se representa como "&&".

b. <?php ($A != $B) && ($A != $C) && ($B != $C)?>

Explicación: La expresión lógica "A, B y C son diferentes" se representa como "$A != $B && $A != $C && $B != $C". El operador "!=" significa "diferente de".

c. <?php ($E != 0) && ($F <= $G) ?>

Explicación: La expresión lógica "E es no nulo" se representa como "$E != 0". La expresión lógica "F no es mayor que G" se representa como "$F <= $G".

d. <?php ($B > $A) && ($B < $C) ?>

Explicación: La expresión lógica "B está estrictamente entre A y C" se representa como "$B > $A && $B < $C". El operador ">" significa "mayor que" y el operador "<" significa "menor que".

e. <?php (($F < 0) || ($E >= 0)) && ! (($F < 0) && ($E >= 0)) // Utilizando xor : ($F < 0 xor $E >= 0)?>

Explicación: La expresión lógica "F es negativo" se representa como "$F < 0". La expresión lógica "E es no negativo" se representa como "$E >= 0". La conjunción "o" se representa como "||". La negación "no" se representa como "!".
La expresión lógica "no ambos a la vez" significa que no se cumple que F sea negativo y E sea no negativo simultáneamente, es decir, se utiliza la negación "!" para negar la expresión "($F < 0) && ($E >= 0)".