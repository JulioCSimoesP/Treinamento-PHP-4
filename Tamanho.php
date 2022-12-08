<?php

//-->Elementos a serem manipulados
$string1 = 'Ana banana ama sua mana Nana banana';
$string2 = 'Ser ou não ser, eis a questão';
$string3 = 'abcdef';
//<--

//-->Utilização da função strlen()/mb_strlen()
echo 'A função strlen() permite contar o número de caracteres de uma string. Exemplo: ' . PHP_EOL;
$contador = strlen($string1);
echo 'A string "'.$string1.'" possui '.$contador.' caracteres' . PHP_EOL;

//=====

echo 'Se a string possuir caracteres multibyte, é possível utilizar a função mb_strlen(). Exemplo: ' . PHP_EOL;
$contador = mb_strlen($string2);
echo 'A string "'.$string2.'" possui '.$contador.' caracteres' . PHP_EOL . PHP_EOL;
//<--

//-->Propriedade de array das strings
echo 'Uma curiosidade sobre strings é que os seus caracteres podem ser acessados como se a string fosse um array. Exemplo: ' . PHP_EOL;
echo 'O terceiro caractere da string "'.$string3.'" é o caractere "'.$string3[2].'"' . PHP_EOL;

//=====

echo 'No entanto não é possível utilizar o foreach() para realizar uma varredura nos caracteres de uma string. Mas é possível utilizar o for(). Exemplo: ' . PHP_EOL;
for ($i = 0 ; $i < mb_strlen($string3) ; $i++) {
    echo $string3[$i] . PHP_EOL;
}
//<--