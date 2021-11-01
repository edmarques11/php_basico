<?php

$array = [
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  2.7 => 'd',
  true => 'e'
];

foreach ($array as $key => $item) {
  echo "$key => " . $item . PHP_EOL;
}