<?php

$x = 2;
$y = 3;

if ($x == $y) {
    echo 'Realmente ', $x, ' é igual a', $y, '<br>';
}

if ($x > $y) {
    echo 'Realmente ', $x, ' é maior que ', $y, '<br>';
}

if ($x < $y) {
    echo 'Realmente ', $x, ' é menor que ', $y, '<br>';
}

if ($x >= $y) {
    echo 'Realmente ', $x, ' é maior ou igual a ', $y, '<br>';
}

if ($x <= $y) {
    echo 'Realmente ', $x, ' é menor ou igual a ', $y, '<br>';
} else {
    echo 'Não, ', $x, ' não é igual, nem maior, nem menor que ', $y, '<br>';
}

$conta = 99596;
$senha = 1234;
if ($conta == 99596 and $senha == 1234) {
    echo 'Conta logada com successo <br>';
}

if ($conta != 99596) {
    echo 'Sua Conta bancaria esta incorreta <br>';
}

if ($senha != 1234) {
    echo 'Sua senha incorreta <br>';
}

$y = true;

if($y) {
    echo 'Y é igual a true';
}
