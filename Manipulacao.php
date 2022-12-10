<?php

//-->Elementos a serem manipulados
$string1 = 'Banana Uva Maçã Laranja Cereja Açaí Pêra Kiwi Acerola Côco Amora';

$string2 = 'Pedro Pereira,24,pedrop@gmail.com,Eletricista';

$string3 = '  Hello World   ';

$string4 = '´[´´]{}Foo Bar[{]}[´´';
//<--

//-->Utilização da função explode()
echo 'A função explode() permite dividir uma string em vários fragmentos com base em um separador. Exemplo: ' . PHP_EOL;
$frutas1 = explode(' ', $string1);
var_export($frutas1);
echo PHP_EOL;

//=====

echo 'Como os fragmentos são devolvidos em um array, é possível utilizá-los para preencher uma lista de variáveis. Exemplo :' . PHP_EOL;
[$nome, $idade, $email, $profissao] = explode(',', $string2);
echo 'Nome: '.$nome . PHP_EOL .
     'Idade: '.$idade . PHP_EOL .
     'E-mail: '.$email . PHP_EOL .
     'Profissão: '.$profissao . PHP_EOL;

//=====

echo 'Ainda é possível limitar a quantidade de fragmentos gerados pelo explode(). Exemplo: ' . PHP_EOL;
$frutas2 = explode(' ', $string1, 5);
var_export($frutas2);
echo PHP_EOL . PHP_EOL;
//<--

//-->Utilização da função implode()
echo 'Com a função implode() é possível transformar os elementos de um array em uma única string. Exemplo: ' . PHP_EOL;
$array = [
    $nome,
    $idade,
    $email,
    $profissao
];
$resultado = implode(',' . PHP_EOL, $array);
echo $resultado . PHP_EOL;

//=====

echo 'É interessante saber que, para qualquer função, não é necessário fornecer os parâmetros em ordem, basta utilizar uma associação explícita. Exemplo: ' . PHP_EOL;
$resultado = implode(array: $array, separator: ', ');
echo $resultado . PHP_EOL;
//<--

//-->Utilização da função trim()
echo 'A função trim() permite remover caracteres invisíveis da extremidades de uma string. Exemplo: ' . PHP_EOL;
echo '"'.$string3.'" vira "'.trim($string3).'"' . PHP_EOL;

//=====

echo 'Também é possível remover outros caracteres das extremidades se forem especificados. Exemplo: ' . PHP_EOL;
echo '"'.$string4.'" vira "'.trim($string4, '´[]{}').'"' . PHP_EOL;

//=====

echo 'Se desejar, você pode aparar apenas um dos lados da string. Exemplo: ' . PHP_EOL;
echo '"'.$string4.'" vira "'.ltrim($string4, '´[]{}').'"' . PHP_EOL;
echo '"'.$string4.'" vira "'.rtrim($string4, '´[]{}').'"' . PHP_EOL;
//<--