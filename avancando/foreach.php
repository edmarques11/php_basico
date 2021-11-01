<?php

$contasCorrentes = [
  '535.353.425-32' => [
    'titular' => 'vinicios',
    'saldo' => 1000
  ],
  '423.534.687-77' => [
    'titular' => 'Edmarques',
    'saldo' => 99999999999999999999999999999999
  ]
];

$contasCorrentes['429.803.468-77'] = [
  'titular' => 'fulano',
  'saldo' => 111
];

foreach ($contasCorrentes as $number => $conta) {
  echo "$number => " . $conta['titular'] . PHP_EOL;
};
