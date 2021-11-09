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
unset($contasCorrentes['535.353.425-32']);

// foreach ($contasCorrentes as $cpf => $conta) {
//   exibeConta($conta);
// };
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
</head>

<body>

</body>
<h1>Contas Correntes</h1>

<ul>
  <dl>
    <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
      <dt>
        <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
      </dt>
      <dd>Saldo: <?= $conta['saldo']; ?></dd>
    <?php } ?>
  </dl>
</ul>

</html>