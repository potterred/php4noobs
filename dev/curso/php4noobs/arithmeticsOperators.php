<?php
/** Aula sobre operadores Aritméticos */

$itemA =10;
$itemB =20;
$itemC =($itemA+$itemB + 10) +10;

echo $itemC . PHP_EOL;

$itemA =25;
$itemB =5;
$itemC =($itemB - $itemA) + 100 - 50;

echo $itemC . PHP_EOL;

// divisao

$itemC = $itemA / $itemB;

echo $itemC . PHP_EOL;

$itemA=15;
$itemB=3;
$itemC =($itemA * $itemB) - 20 +($itemA -5);

echo $itemC . PHP_EOL;

$itemA = 20;
$itemB = 4;
$itemC = ($itemA % $itemB);

echo $itemC . PHP_EOL;