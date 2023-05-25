Para resolver estas expresiones, podemos utilizar el lenguaje de programación PHP. A continuación, generaremos el código PHP para resolver cada una de las expresiones, comentando el código para que sea más fácil de entender para el alumno:

a)
<?php
$exp1 = 3 * 2 - 4 / 2 * 1;
$exp2 = 3 * 2 + 2 * 1;
$exp3 = 5;
$exp4 = 11 % 4;

$resultado = ($exp1 > $exp2) && ($exp3 > $exp4);

if($resultado) {
    echo "La expresión a) es VERDADERA";
} else {
    echo "La expresión a) es FALSA";
}
?>
En este código, primero evaluamos las expresiones individuales y luego utilizamos el operador lógico && para evaluar si ambas son VERDADERAS. Si ambas son VERDADERAS, el resultado final será VERDADERO.

b)
<?php
$exp1 = 3 >= 3;
$exp2 = 5 <> 5;
$exp3 = 15 / 5 + 2 <> 5;

$resultado = ($exp1 || $exp2) && !$exp3;

if($resultado) {
    echo "La expresión b) es VERDADERA";
} else {
    echo "La expresión b) es FALSA";
}
?>
En este código, utilizamos los operadores lógicos || y ! para evaluar la expresión. En resumen, si alguna de las primeras expresiones es VERDADERA y la tercera expresión es FALSA, el resultado final será VERDADERO.

c)
<?php
$exp1 = 3 * (-3) * 2;
$exp2 = 3 - (-3) * 2;
$exp3 = 1 ^ 3 * 2;
$exp4 = 6;

$resultado = !(!($exp1 > $exp2 || $exp3 > $exp4));

if($resultado) {
    echo "La expresión c) es VERDADERA";
} else {
    echo "La expresión c) es FALSA";
}
?>
En este código, utilizamos los operadores ! y || para evaluar la expresión. En resumen, si ambas expresiones entre paréntesis son FALSAS, el resultado final será VERDADERO.

d)

<?php
$exp1 = 3 >= 4;
$exp2 = 5 > 3;
$exp3 = 3 > 3;
$exp4 = 4 <= 4;
$exp5 = 5 > 4;
$exp6 = 6 >= 7;

$resultado = ($exp1 && $exp2 && !$exp3) || !$exp4 || $exp5 || $exp6;

if($resultado) {
    echo "La expresión d) es VERDADERA";
} else {
    echo "La expresión d) es FALSA";
}
?>
En este código, utilizamos los operadores lógicos && y || para evaluar la expresión. En resumen, si ambas primeras expresiones son VERDADERAS y la tercera es FALSA, o si alguna de las últimas expresiones es VERDADERA, el resultado final será VERDADERO.