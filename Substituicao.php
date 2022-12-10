<?php

//-->Elementos a serem manipulados
$string1 = 'Este texto é uma droga, lascou toda essa bagaça.';

$string2 = 'olá é o mesmo que oi';

$array1 = [
    'droga',
    'lascou',
    'bagaça'
];

$array2 = [
    'drg',
    'lsc',
    'bgç'
];

$array3 = [
    'droga' => 'd',
    'lascou' => 'l',
    'bagaça' => 'b'
];

$array4 = [
    'olá' => 'oi',
    'oi' => 'olá'
];
//<--

//-->Utilização da função str_replace()
echo 'A função str_replace() permite substituir determinada string por outra. Exemplo: ' . PHP_EOL;
echo 'String original: ' . PHP_EOL . $string1 . PHP_EOL;
$resultado = str_replace('droga', '***', $string1);
echo 'String alterada: ' . PHP_EOL . $resultado . PHP_EOL;
echo PHP_EOL;

//=====

echo 'Se o primeiro parâmetro for um array, todas as strings desse array serão substituídas pelo mesmo output. Exemplo: ' . PHP_EOL;
echo 'String original: ' . PHP_EOL . $string1 . PHP_EOL;
$resultado = str_replace($array1, '***', $string1);
echo 'String alterada: ' . PHP_EOL . $resultado . PHP_EOL;
echo PHP_EOL;

//=====

echo 'Se os dois primeiros parâmetros forem arrays, cada elemento do primeiro array será substituido por um elemento de mesmo índice do segundo array. Exemplo: ' . PHP_EOL;
echo 'String original: ' . PHP_EOL . $string1 . PHP_EOL;
$resultado = str_replace($array1, $array2, $string1);
echo 'String alterada: ' . PHP_EOL . $resultado . PHP_EOL;
echo 'Lembrando que, se o elemento de busca não tiver um elemento correspondente no array de substituição, o elemento buscado será simplesmente substituído por nada.' . PHP_EOL;
echo PHP_EOL;
//<--

//-->Utilização da função strtr()
echo <<<FINAL
     Uma outra função de substituição de strings é o strtr(), porém, diferente do str_replace(), o strtr() trabalha de dois modos:
     No primeiro modo, o strtr() utiliza 3 parâmetros e realiza substituições de caracter por caracter. Exemplo:
     FINAL. PHP_EOL;
echo 'String original: ' . PHP_EOL . $string1 . PHP_EOL;
$resultado = strtr($string1, 'aeo', '@&0');
echo 'String alterada: ' . PHP_EOL . $resultado . PHP_EOL;
echo PHP_EOL;

//=====

echo <<<FINAL
    No segundo modo, o strtr() utiliza 2 parâmetros. O segundo parâmetro é um array, cujos índices definem o que será substituído e cujos valores definem pelo o que o índice será substituído. Exemplo: 
    FINAL;
echo 'String original: ' . PHP_EOL . $string1 . PHP_EOL;
$resultado = strtr($string1, $array3);
echo 'String alterada: ' . PHP_EOL . $resultado . PHP_EOL;
echo PHP_EOL;
//<--

//-->Diferença entre str_replace() e strtr()
echo <<<FINAL
    Uma diferença notável entre a função str_replace() e strtr() é que o strtr() identifica o que ele já alterou.
    Sendo assim, se o elemento alterado for semelhante ao elemento de busca subsequente, ele não será alterado novamente. Exemplo:
    FINAL. PHP_EOL;
echo 'String original: ' . PHP_EOL . $string2 . PHP_EOL;
$resultado = strtr($string2, $array4);
echo 'String alterada: ' . PHP_EOL . $resultado . PHP_EOL;
echo PHP_EOL;

//=====

echo <<<FINAL
     Já o str_replace() não identifica o que ele já alterou.
     Sendo assim, no caso anterior o str_replace() realizará a alteração novamente quando ele buscar pelo próximo elemento. Exemplo:
     FINAL. PHP_EOL;
echo 'String original: ' . PHP_EOL . $string2 . PHP_EOL;
$resultado = str_replace(['olá', 'oi'], ['oi', 'olá'], $string2);
echo 'String alterada: ' . PHP_EOL . $resultado . PHP_EOL;
echo PHP_EOL;
//<--