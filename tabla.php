<?php

unset($argv[0]);
$num = $argv[1];

if (ctype_digit($num) && $argc = 2){
    echo "Error: \n";
} else {
    echo "adios \n";
    for ($i = 0; $i <= 10; $i++) {
        echo "$i * $argv[1] = " . ($i * $argv[1]) . "\n";
    }
}

/*foreach ($argv as $v) {
    echo "Tabla de multiplicar de $v:\n";
    if (is_numeric($v){
        for ($i = 0; $i <= 10; $i++) {
            echo "$v X $i = " . ($v * $i) . "\n";
        }
    } else {
        echo "El valor '$v' no es número.\n";
        exit(1);
    }
}*/
