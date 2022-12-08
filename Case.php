<?php

//-->Elementos a serem manipulados
$frase1 = 'Ana banana ama sua mana Nana banana';
$frase2 = 'PEDRA PAPEL E TESOURA';
$nome1 = 'João Gonçalves';
$nome2 = 'SÉRGIO MOURÃO';
//<--

//-->Utilização da função strtoupper()/mb_strtoupper()
echo 'A função strtoupper() permite transformar todos os caracteres de uma string em caracteres maiúsculos. Exemplo: ' . PHP_EOL;
echo 'A string "'.$frase1.'" vira "'.strtoupper($frase1).'"' . PHP_EOL;

//=====

echo 'Para lidar com caracteres multibyte, é possível utilizar a função mb_strtoupper(). Exemplo: ' . PHP_EOL;
echo 'A string "'.$nome1.'" vira "'.mb_strtoupper($nome1).'"' . PHP_EOL;
echo PHP_EOL;
//<--

//-->Utilização da função strtolower()/mb_strtolower()
echo 'A função strtolower() permite transformar todos os caracteres de uma string em caracteres minúsculos. Exemplo: ' . PHP_EOL;
echo 'A string "'.$frase2.'" vira "'.strtolower($frase2).'"' . PHP_EOL;

//=====

echo 'Para lidar com caracteres multibyte, é possível utilizar a função mb_strtolower(). Exemplo: ' . PHP_EOL;
echo 'A string "'.$nome2.'" vira "'.mb_strtolower($nome2).'"' . PHP_EOL;
echo PHP_EOL;
//<--