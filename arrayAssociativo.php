<?php

$conta1 = [
    'titular' => 'Hygor',
    'saldo' => '10000'
];
$conta2 = [
    'titular' => 'Patricia',
    'saldo' => '5000'
];
$conta3 = [
    'titular' => 'Heloisa',
    'saldo' => '1500'
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}