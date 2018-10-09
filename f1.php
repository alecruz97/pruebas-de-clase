<?php

echo "Esto es ANTES.\n";

#echo PEPE . "\n";

$res = require __DIR__ . '/aux.php';

echo "Esto es DESPÚES y el valor de res es $res. \n";

echo PEPE . "\n";

