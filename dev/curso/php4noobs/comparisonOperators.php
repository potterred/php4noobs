<?php
/** Aula sobre operadores de comparação */

// Operador de igualdade ==
var_dump(1 == 1);        // true - números iguais
var_dump(1 == 2);        // false - números diferentes
$password = 'secret';
var_dump($password == 'secret123');  // false - strings diferentes

// Operador de diferença !=
var_dump(1 != 1);        // false - números são iguais
var_dump(1 != 2);        // true - números diferentes
var_dump($password != 'secret123');  // true - strings diferentes

// operador Idêntico ===
var_dump('1' === 1);
var_dump(1 === 1);

// operador não Idêntico !==
var_dump(1 !== 2); // true - numeros não idênticos
var_dump(1 !== 1); // false - numeros idênticos

// operador maior >
$number = 6;
var_dump($number > 5);

// operador Maior ou Igual >=
$number = 2;
var_dump($number >= 1);

// Operador Menor <
$number = 5;
var_dump($number >= 2);

// operador Menor ou igual <=
$number = 2;
var_dump($number <= 2);

