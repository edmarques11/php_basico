<?php

$conta1 = [
  'titular' => 'vinicios',
  'saldo' => 1000
];
$conta2 = [
  'titular' => 'Edmarques',
  'saldo' => 99999999999999999999999999999999
];

$contasCorrentes = [$conta1, $conta2];

for ($i = 0; $i < count($contasCorrentes); $i++) {
  echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
