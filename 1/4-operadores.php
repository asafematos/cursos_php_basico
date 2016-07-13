<?php

$x = 10;
$y = 5;

//=== OPERADORES ===\\

$soma = $x + $y;
$subtrai = $x - $y;
$mult = $x * $y;
$divide = $x / $y;

echo 'A soma de ', $x, ' e ', $y, ' e igual a ', $soma, '<br>';
echo 'A subtracao de ', $x, ' e ', $y, ' e igual a ', $subtrai, '<br>';
echo 'A multipicacao de ', $x, ' e ', $y, ' e igual a ', $mult, '<br>';
echo 'A divisao de ', $x, ' e ', $y, ' e igual a ', $divide, '<br>';

//=== FIM ===\\
// === SIMPLIFICAÇÕES === \\

$x++; # $x = $x + 1;
$x+=5; # $x = $x + 5;

$x--; # $x = $x - 1;
$x-=5; # $x = $x - 5;

echo $x, '<br>';

// === FIM === \\
//=== CONCATENAR ===\\\

$nome1 = "Asafe";
$nome2 = " Matos";

echo $nome1.$nome2, "<br>";
$nome1.= " Matos";

echo $nome1;