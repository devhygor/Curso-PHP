<?php

$contas_correntes = [
    '045.456.556-01' => [
        'titular' => 'Hygor',
        'saldo' => 1000
    ], 
    '174.578.897-02' => [
        'titular' => 'Patricia',
        'saldo' => 5000
    ], 
    '278.785.788-03' => [
        'titular' => 'Heloísa',
        'saldo' => 250
    ]
];

function sacar(array $conta, float $valor_a_sacar): array
{
    if ($valor_a_sacar > $conta['saldo']) {
        exibe_mensagem(mensagem:"Você não pode sacar");
    } else {
        $conta ['saldo'] -= $valor_a_sacar;
    }

    return $conta;
}

function depositar(array $conta, float $valor_a_depositar): array 
{
    if ($valor_a_depositar > 0) {
        $conta['saldo'] += $valor_a_depositar;
    } else {
        exibe_mensagem(mensagem: "Depositos precisam ser positivos");
    }
    
    return $conta;
}

function exibe_mensagem(string $mensagem){
    echo $mensagem . PHP_EOL;
}

$contas_correntes['045.456.556-01'] = sacar($contas_correntes['045.456.556-01'], 500);
$contas_correntes['174.578.897-02'] = sacar($contas_correntes['174.578.897-02'], 200);

$contas_correntes['045.456.556-01'] = depositar($contas_correntes['045.456.556-01'], 900);

// foreach percorre todos os itens do array, no casa da $contas_correntes, 
// e o $conta é a variavel que criamos para armazenar os valores
foreach ($contas_correntes as $cpf => $conta) {      
    echo $cpf . ' ' . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}