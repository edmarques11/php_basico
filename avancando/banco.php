<?php

require_once 'funcoes.php';

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

titularComLetrasMaiusculas($contasCorrentes['423.534.687-77']);

foreach ($contasCorrentes as $cpf => $conta) {
  exibeMensagem("$cpf => {$conta['titular']} {$conta['saldo']}");
};
