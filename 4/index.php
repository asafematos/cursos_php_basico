<?php

$x[0][0] = "oi";
$x[0][1] = "position 1";

$y = $x;

//echo $y[0][0];

$animais = array("Gato, ", "Cachorro, ", "Coelho ");

#echo $animais[0];
#echo $animais[1];
#echo $animais[2];

#echo "<br>";

$nome = array(0 => "Luiz, ", 1 => "Asafe, ", 2 => "Gabi ");
#echo $nome[0];
#echo $nome[1];
#echo $nome[2];

#echo "<br>";

$nomes = array(
    0 => array(
        "Amigos",
        0 => "Pedrao",
        1 => "Merileia",
        2 => "Firuloz",
        3 => "Gastrogildus"
    ),
    1 => array(
        "MegAmigos",
        0 => "Alberrio",
        1 => "Luiz",
        2 => "Gabi",
        3 => "Asafe"
    )
);
#echo $nomes[0][0];

//for ($i = 0; $i < count($nome); $i++)
//    echo $nome[$i]."<br>";

$limite = 10;
$i = 0;
$array = array();

while ($limite > $i) {
    $array[] = "abc";
    $i++;
}

print_r($array);