<?php

// --------------------------------
// -- Declaración If/else - Si/Sino
// --------------------------------

/*

Esto permite la ejecución condicional.

Piensa en ello como una pregunta de sí/no. Si es verdadera, ejecuta el código.
Si no es verdadera, ejecuta el código en la sección else (si se proporciona una).

 */

/* $edad = readline("ingrese su edad: ");
$salario = readline('Ingrese su salario: ');

if($edad>=21){
    echo "Es mayor de edad". PHP_EOL;
} else {
    echo "La persona es menor de edad" . PHP_EOL;
    echo "Acceso denegado". PHP_EOL;
}

if(($edad>=21) && ($salario>=200_000)){
    echo "Puede acceder al prestamo". PHP_EOL;
} else {
    echo "No puede acceder al prestamo";
}
 */

$user = 'admin';
$pass = 'admin';
$usuario = readline('Ingrese su usuario');
$contraseña = readline('Ingrese su contraseña');

if($usuario==$user){
    if($contraseña==$pass){
        echo "usuario logueado correctamente";
    } else {
    echo "contraseña incorrecta";
}
} else {
    echo "usuario incorrecto";
}