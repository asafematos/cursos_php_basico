<?php

$x = 2;
$y = 3;

if ($x == $y) {
    echo 'Realmente ', $x, ' � igual a', $y, '<br>';
}

if ($x > $y) {
    echo 'Realmente ', $x, ' � maior que ', $y, '<br>';
}

if ($x < $y) {
    echo 'Realmente ', $x, ' � menor que ', $y, '<br>';
}

if ($x >= $y) {
    echo 'Realmente ', $x, ' � maior ou igual a ', $y, '<br>';
}

if ($x <= $y) {
    echo 'Realmente ', $x, ' � menor ou igual a ', $y, '<br>';
} else {
    echo 'N�o, ', $x, ' n�o � igual, nem maior, nem menor que ', $y, '<br>';
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
    echo 'Y � igual a true';
}
