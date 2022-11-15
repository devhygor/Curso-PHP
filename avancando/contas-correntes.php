<?php

$conta1 = [
    'titular' => 'Hygor',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Patricia',
    'saldo' => 5000
];
$conta3 = [
    'titular' => 'Heloísa',
    'saldo' => 250
];

$contas_Correntes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contas_Correntes); $i++) {
    echo $contas_Correntes[$i] ['titular'] . PHP_EOL;
}