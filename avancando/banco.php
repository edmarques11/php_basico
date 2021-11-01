<?php

function exibeMensagem(string $mensagem): void
{
  echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valor): array
{
  if ($valor > $conta['saldo']) {
    exibeMensagem($conta['titular'] . " não tem saldo suficiente para o saque de $valor");
  } else {
    $conta['saldo'] -= $valor;
  }

  return $conta;
}

function depositar(array $conta, float $valor): array
{
  if ($valor > 0)
    $conta['saldo'] += $valor;
  else
    exibeMensagem('Deposite valor positivo seu arigó!');

  return $conta;
}

$contasCorrentes = [
  '535.353.425-32' => [
    'titular' => 'Vinicios',
    'saldo' => 1000
  ],
  '423.534.687-77' => [
    'titular' => 'Edmarques',
    'saldo' => 99999999999999999999999999999999
  ]
];

$contasCorrentes['535.353.425-32'] = sacar($contasCorrentes['535.353.425-32'], 500);
$contasCorrentes['535.353.425-32'] = depositar($contasCorrentes['535.353.425-32'], 1500);

foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem("$cpf => " . $conta['titular'] . " " . $conta['saldo']);
};
