<?php

$idadeList = [21, 18, 45, 32, 17];

$idadeList[] = 12;

for ($i = 0; $i < count($idadeList); $i++) {
  echo $idadeList[$i] . PHP_EOL;
}