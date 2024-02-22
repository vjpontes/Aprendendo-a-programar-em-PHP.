<?php
function sacar(array $conta, float $valorASacar): array
{

    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("vc n pode sacar");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar): array
{

    if ($valorADepositar < 0) {
        exibeMensagem('vc n pode depositar');
    } else {
        $conta['saldo'] += $valorADepositar;
    }
    return $conta;
}
function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
    '102.431.545-43' => [
        'titular' => 'vinicius',
        'saldo' => '1000'
    ],
    '303.719.432-93' => [
        'titular' => 'carlos',
        'saldo' => '1000'
    ],
    '638.193.545-43' =>  [
        'titular' => 'roberto',
        'saldo' => '1000'
    ],
];

$contasCorrentes['303.719.432-93'] = sacar($contasCorrentes['303.719.432-93'], 50000);
$contasCorrentes['638.193.545-43'] = sacar($contasCorrentes['638.193.545-43'], 500);
$contasCorrentes['102.431.545-43'] = depositar($contasCorrentes['102.431.545-43'], -5500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
