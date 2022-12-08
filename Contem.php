<?php

//-->Elementos a serem manipulados
$nomes = [
    'Vinicius Pereira',
    'Patrícia Silva',
    'Carlos Pereira',
    'Paulo Fernandes',
    'Manuela da Costa',
    'Bruno Pereira',
    'Amanda Pereira',
    'Igor Salazar',
    'Sérgio Alcântara',
    'Daniela Pereira'
];

$url1 = 'https://alura.com.br';

$url2 = 'https://google.com';

$url3 = 'http://mercadolivre.com.br';

$url4 = 'http://shoppee.com';
//<--

//-->Utilização da função str_contains()
var_export($nomes);
echo PHP_EOL;

echo 'Com a função str_contains() é possível verificar se determinada string existe dentro de outra. Exemplo: '.PHP_EOL.
     'Existe "Bruno" em "'.$nomes[5].'"?' . PHP_EOL;
var_export(str_contains($nomes[5], 'Bruno'));
echo PHP_EOL;

echo 'Existe "Pedro" em "'.$nomes[8].'"?' . PHP_EOL;
var_export(str_contains($nomes[8], 'Pedro'));
echo PHP_EOL . PHP_EOL;

//=====

echo 'Fazem parte da família "Pereira": ' . PHP_EOL;
$familiares = array_filter($nomes, function ($item){
    return str_contains($item, 'Pereira');
});
var_export($familiares);
echo PHP_EOL;

echo 'Não fazem parte da família "Pereira": ' . PHP_EOL;
$familiares = array_filter($nomes, function ($item){
    return !str_contains($item, 'Pereira');
});
var_export($familiares);
echo PHP_EOL . PHP_EOL;
//<--

//-->Utilização da função str_starts_with()/str_ends_with()
echo 'A função str_starts_with() verifica se uma string começa com determinado texto. Exemplo: ' . PHP_EOL .
     'O endereço '.$url1.' começa com "https"?' . PHP_EOL;
var_export(str_starts_with($url1, 'https'));
echo PHP_EOL . PHP_EOL;

//=====

echo 'A função str_ends_with() verifica se uma string termina com determinado texto. Exemplo: ' . PHP_EOL .
     'O endereço '.$url3.' termina com ".br"?' . PHP_EOL;
var_export(str_ends_with($url3, '.br'));
echo PHP_EOL. PHP_EOL;

//=====

echo 'O endereço '.$url2;
if (str_starts_with($url2, 'https')) {
    echo ' começa com "https" ';
} else {
    echo ' não começa com "https" ';
}
if (str_ends_with($url2, '.br')) {
    echo 'e termina com ".br"';
} else {
    echo 'e não termina com ".br"';
}
echo PHP_EOL;

//=====

echo 'O endereço '.$url4;
if (str_starts_with($url4, 'https')) {
    echo ' começa com "https" ';
} else {
    echo ' não começa com "https" ';
}
if (str_ends_with($url4, '.br')) {
    echo 'e termina com ".br"';
} else {
    echo 'e não termina com ".br"';
}
echo PHP_EOL . PHP_EOL;
//<--