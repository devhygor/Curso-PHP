<?php

require 'funcoes.php';

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

$contas_correntes['045.456.556-01'] = sacar($contas_correntes['045.456.556-01'], 500);
$contas_correntes['174.578.897-02'] = sacar($contas_correntes['174.578.897-02'], 200);

$contas_correntes['045.456.556-01'] = depositar($contas_correntes['045.456.556-01'], 900);

unset($contas_correntes['278.785.788-03']);

titular_com_letras_maiusculas($contas_correntes['045.456.556-01']);

// foreach percorre todos os itens do array, no casa da $contas_correntes, 
// e o $conta é a variavel que criamos para armazenar os valores

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach ($contas_correntes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>