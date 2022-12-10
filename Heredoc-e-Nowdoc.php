<?php

//-->Utilização da sintaxe heredoc
echo 'A sintaxe heredoc é uma maneira de expressar strings que permite eliminar indentações ou espaços de uma string que aconteçam antes de um delimitador. Exemplo: ' . PHP_EOL;
if (true) {
    echo 'String com indentação ocasionada pelo código-fonte: 
         Olá senhor(a), 
         Venho por meio deste enviar uma mensagem.
         Grato pela atenção.
         Eu';
}
echo PHP_EOL . PHP_EOL;

//=====

if (true) {
    echo <<<FIM
    String sem indentação ocasionada pelo código-fonte:
    Olá senhor(a), 
    Venho por meio deste enviar uma mensagem.
    Grato pela atenção.
    Eu
    FIM;
}
echo PHP_EOL . PHP_EOL;

//=====

echo 'Para adicionar indentação ou espaços na sintaxe heredoc, basta adiciona-los após a linha demarcada pelo identificador final. Exemplo: ' . PHP_EOL;
if (true) {
    echo <<<FIM
    String heredoc com indentações intencionais:
        Olá senhor(a), 
            Venho por meio deste enviar uma mensagem.
        Grato pela atenção.
        Eu
    FIM;
}
echo PHP_EOL . PHP_EOL;;

//=====

if (true) {
    echo <<<FIM
    String heredoc com espaços intencionais:
      Olá senhor(a), 
    Venho por meio deste enviar uma mensagem.
     Grato pela atenção.
      Eu
    FIM;
}
echo PHP_EOL;
echo 'Vale lembrar que não é possível misturar espaços, tabulações ou outros caracteres invisíveis antes do delimitador ou do corpo da string.' . PHP_EOL;
echo PHP_EOL . PHP_EOL;

//=====

echo 'A sintaxe heredoc é equivalente a uma string de aspas duplas, portanto é possível utilizar variáveis e outras ferramentas dentro do corpo da string. Exemplo: ' . PHP_EOL;
$nome = 'João';
$assunto = [
    'financeiro' => 'sobre o financeiro'
];
$detalhe = [
    'fatura' => 'Sua fatura está prestes a vencer.'
];
if (true) {
    echo <<<FIM
    String heredoc acessando variáveis e arrays:
    Olá senhor(a) $nome, 
    Venho por meio deste enviar uma mensagem {$assunto['financeiro']}.
    $detalhe[fatura]
    Grato pela atenção.
    Eu
    FIM;
}
echo PHP_EOL . PHP_EOL;

//=====

echo 'O heredoc pode ser utilizado em qualquer ambiente que possa receber uma string: Exemplo: ' . PHP_EOL;
$array = [<<<FINAL
a
    b
        c
FINAL, 'd', 'e'
];
foreach ($array as $valor) {
    echo $valor . PHP_EOL;
}
echo PHP_EOL;
//<--

//-->Utilização da sintaxe nowdoc
echo 'A sintaxe nowdoc é similar ao heredoc, a única diferença é que ela se comporta como uma string de aspas simples: Exemplo: ' . PHP_EOL;
if (true) {
    echo <<<'FIM'
    Olá senhor(a) $nome, 
    Venho por meio deste enviar uma mensagem {$assunto['financeiro']}.
    $detalhe[fatura]
    Grato pela atenção.
    Eu
    FIM;
}
echo PHP_EOL . PHP_EOL;
//<--