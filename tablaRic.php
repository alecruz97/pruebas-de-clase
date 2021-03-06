<?php

function muestraError($mensaje)
{
    echo "Error: $mensaje\n";
    exit(1);
}

if ($argc < 2) {
    muestraError("debes indicar el número de la tabla a mostrar.");
}

if ($argc > 2) {
    muestraError("has pasado demasiados argumentos.");
}

$numero = $argv[1];

if (!ctype_digit($numero)){
    muestraError("el argumento no es un número.");
}

$numero = (int) $numero;

if ($numero < 0 || $numero > 10) {
    muestraError("debe estar entre 0 y 10.");
}

$res = [];

for ($i = 0; $i <= 10; $i++){
    $res[] = $numero * $i;
}

foreach ($res as $k => $v){
    echo "$numero x $k = $v\n";
}
