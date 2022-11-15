<?php

$contas_correntes = [
    04545656456 => [
        'titular' => 'Hygor',
        'saldo' => 1000
    ], 
    17457889788 => [
        'titular' => 'Patricia',
        'saldo' => 5000
    ], 
    27878578879 => [
        'titular' => 'Heloísa',
        'saldo' => 250
    ]
];

// foreach percorre todos os itens do array, no casa da $contas_correntes, 
// e o $conta é a variavel que criamos para armazenar os valores

foreach ($contas_correntes as $cpf => $conta) {      
    echo $cpf . PHP_EOL;
}