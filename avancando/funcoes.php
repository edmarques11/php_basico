<?php

function exibeMensagem(string $mensagem): void
{
  echo $mensagem . '<br />';
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

function titularComLetrasMaiusculas(array &$conta): void
{
  $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta): void
{
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  echo "<li>Titular: $titular. Saldo: {$conta['saldo']}</li>";
}