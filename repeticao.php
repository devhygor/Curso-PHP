<?php

$contador = 1;

while ($contador <= 15 ) {                  // while = enquanto
    echo "#$contador" . PHP_EOL;
    $contador = $contador + 1;
}

echo PHP_EOL;

for ($contador = 1; $contador <= 15; $contador += 1) {    // for = para
    echo "#$contador" .PHP_EOL;
}