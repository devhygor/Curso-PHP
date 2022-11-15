<?php

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

function exibe_mensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

function titular_com_letras_maiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibe_conta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular Saldo: $saldo </li>";
}