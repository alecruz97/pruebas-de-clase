<?php

unset($argv[0]);
$argc--;

echo "Has pasado $argc nombres. \n";

foreach ($argv as $v){
    echo "¡Hola, $v!\n";
}
