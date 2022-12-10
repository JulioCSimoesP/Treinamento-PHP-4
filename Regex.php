<?php

//-->Elementos a serem manipulados
const regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';

$telefones = [
    '(21) 3154 - 0540',
    '(22) 94051 - 8069',
    '15 4512-0153',
    '(81) 4087 - 8806',
    '(99) 12313-4891',
    '(92) 99874 - 4843',
    '(11) 6631 - 7410',
    '94413-1509',
    'asfasf (51) 95461-1650'
];

$correspondencias = [];
//<--

//-->Utilização da função preg_match()
echo 'O preg_match() é uma função que permite validar strings conforme um padrão definido por uma expressão regular, também conhecida como regex. Exemplo: ' . PHP_EOL;

function validaTelefone (string $texto): bool {
    return preg_match(regex, $texto);
}

foreach ($telefones as $indice => $valor) {
    if (validaTelefone($valor)) {
        echo 'O telefone "' . $valor . '" é válido.' . PHP_EOL;
    } else {
        echo 'O telefone "' . $valor . '" não é válido.' . PHP_EOL;
    }
}
echo PHP_EOL;

//=====

echo 'Se o parâmetro "matches" for preenchido, a função preg_match() irá criar um array com a string que corresponder ao padrão regex e os grupos de captura identificados. Exemplo: ' . PHP_EOL;
foreach ($telefones as $indice => $valor) {
    $telefoneValido = preg_match(regex, $valor, $matches);
    if ($telefoneValido) {
        $correspondencias[] = $matches;
        echo 'Correspondencia adicionada' . PHP_EOL;
    } else {
        echo 'Telefone inválido' . PHP_EOL;
    }
}
echo PHP_EOL;
var_export($correspondencias);
echo 'Há ainda outros parâmetros a se explorar, porém os apresentados aqui são os principais da função' . PHP_EOL;
echo PHP_EOL;
//<--

//-->Utilização da função preg_replace()
echo 'A função preg_replace(), por sua vez, permite substituir strings que correspondam a uma expressão regex por outros valores. Exemplo: ' . PHP_EOL;
foreach ($telefones as $indice => $valor) {
    $resultado = preg_replace(regex, '(XX) \2, telefone alterado', $valor);
    echo $resultado . PHP_EOL;
}
//<--