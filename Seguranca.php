<?php

//-->Elementos a serem manipulados
$string1 = 'Esta é uma "string" \com \'caracteres especiais\'';

$string2 = '<script>alert("Alerta")</script>';

$string3 = '{
    "nome": "João",
    "idade": "24",
}';
//<--

//-->Utilização da função addslashes()
echo 'A função addslashes() é uma ferramenta que adiciona uma barra de escape nos caracteres aspas simples, aspas duplas, barra invertida e null byte de uma string de entrada. Exemplo: ' . PHP_EOL;
echo 'String original: ' . PHP_EOL . $string1 . PHP_EOL;
echo 'String alterada: ' . PHP_EOL . addslashes($string1) . PHP_EOL . PHP_EOL;

echo <<<FINAL
     O addslashes() é uma função que pode ser utilizada para evitar ataques de XSS, mas não é a solução ideal.
     Tendo em mente que um dos fundamentos da segurança da informação é limpar as entradas e escapar as saídas, a seguir são apresentadas algumas funções que auxiliam a implementar esses conceitos.
     FINAL. PHP_EOL;
echo PHP_EOL;
//<--

//-->Utilização da função htmlspecialchars()
echo 'Uma solução é o htmlspecialchars(), o qual converte qualquer caracter especial da sintaxe html e xml para entidades html. Exemplo: ' . PHP_EOL;
echo 'String original: ' . PHP_EOL . $string2 . PHP_EOL;
echo 'String alterada: ' . PHP_EOL . htmlspecialchars($string2) . PHP_EOL;
echo PHP_EOL;
//<--

//-->Utilização da função htmlentities()
echo 'Caso haja necessidade de lidar com caracteres especiais que não fazem parte da sintaxe html e xml, o ideal é utilizar a função htmlentities(). Exemplo: ' . PHP_EOL;
echo 'String original: ' . PHP_EOL . $string3 . PHP_EOL;
echo 'String alterada pelo htmlspecialchars(): ' . PHP_EOL . htmlspecialchars($string3) . PHP_EOL;
echo 'String alterada pelo htmlentities(): ' . PHP_EOL . htmlentities($string3) . PHP_EOL;
echo PHP_EOL;
//<--

//-->Utilização da função filter_input()
echo 'Uma outra solução é a função filter_input(), a qual possui diversos tipos de filtros. Exemplo: ' . PHP_EOL;
echo 'String original: ' . PHP_EOL . $_GET['teste'] . PHP_EOL;
echo 'String alterada pelo filter_input(): ' . PHP_EOL . filter_input(INPUT_GET, 'teste', FILTER_SANITIZE_SPECIAL_CHARS) . PHP_EOL;
echo PHP_EOL;
//<--

echo 'Vale lembrar que estas soluções, quando juntas, não geram um código legível ou visualmente limpo, portanto o ideal é utilizar uma delas em combinação com outras soluções.' . PHP_EOL;
echo PHP_EOL;