<?php

$peso = 75;
$altura = 1.77;

$imc = $peso / ($altura**2);

if ($imc < 18.5)
  echo "Desnutrido $imc";
else if ($imc <= 24.9)
  echo "Normal $imc";
else
  echo "Obeso $imc";