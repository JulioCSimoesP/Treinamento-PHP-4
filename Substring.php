<?php

//-->Elementos a serem manipulados
$email = 'patricialemos@gmail.com';
$nomeCompleto = 'João Gonçalves';
$string1 = 'Ok google';
$string2 = '@Três@pratos@de@trigo@para@três@@tigres@tristes@@';
//<--

//-->Utilização da função substr()/mb_substr()
echo $email . PHP_EOL . PHP_EOL;

echo 'Com a função substr() é possível extrair uma parte de uma string. Exemplo: ' . PHP_EOL;
$apelido = substr($email, 0, 13);
$dominio = substr($email, 14);
echo 'Apelido do email: '.$apelido . PHP_EOL . 'Domínio do email: '.$dominio . PHP_EOL . PHP_EOL;

//=====

echo $nomeCompleto . PHP_EOL;
echo 'Quando lidamos com caracteres que não fazem parte do Unicode, como "ç" ou "ã" por exemplo, o ideal é utilizar as funções de string da extensão mbstring. Exemplo: ' . PHP_EOL;
$nome = mb_substr($nomeCompleto, 0, 4);
$sobrenome = mb_substr($nomeCompleto, 5);
echo 'Nome: '.$nome . PHP_EOL . 'Sobrenome: '.$sobrenome . PHP_EOL . PHP_EOL;
//<--

//-->Utilização da função strpos()/mb_strpos()
echo 'A função strpos() permite encontrar a posição da primeira ocorrência de um caractere em uma string. Exemplo: ' . PHP_EOL;
$posicao = strpos($email, '@');
echo 'O "@" se encontra na posição '.$posicao.' da string "'.$email.'"' . PHP_EOL;

//=====

echo 'A função strpos() também permite encontrar a ocorrência de uma substring. Exemplo: ' . PHP_EOL;
$posicao = strpos($string1, 'google');
echo 'O "google" se encontra na posição '.$posicao.' da string "'.$string1.'"' . PHP_EOL;

//=====

echo 'Além disso também existe a possibilidade de utilizar a função mb_strpos para lidar com strings que possuam caracteres multibyte. Exemplo: ' . PHP_EOL;
$posicao = strpos($nomeCompleto, 'ç');
echo 'O "ç" se encontra na posição '.$posicao.' da string "'.$nomeCompleto.'"' . PHP_EOL;

//=====

function encontraCaracteres (string $texto, string $busca): int
{
    $offset = 0;
    $acumulador = 0;
    while (is_int(mb_strpos($texto, $busca, $offset))) {
        $offset = mb_strpos($texto, $busca, $offset) + 1;
        $acumulador ++;
    }

    return $acumulador;
}

echo 'Construindo uma função, também possível utilizar o strpos()/mb_strpos() para encontrar todas as ocorrências de determinado caractere ou substring. Exemplo: ' . PHP_EOL;
$contador = encontraCaracteres($string2, '@');
echo 'O "@" ocorre '.$contador.' vezes na string "'.$string2.'"' . PHP_EOL;
//<--
