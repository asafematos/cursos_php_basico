<?php
$alunos = array();

$alunos[] = [
    'nome' => 'Pedro',
    'nota' => '7'
];
$alunos[] = [
    'nome' => 'Maria',
    'nota' => '3'
];
$alunos[] = [
    'nome' => 'Paulo',
    'nota' => '6'
];
$alunos[] = [
    'nome' => 'Firulinha',
    'nota' => '8'
];
$alunos[] = [
    'nome' => 'Braluteco',
    'nota' => '1'
];
$alunos[] = [
    'nome' => 'Farcolizis',
    'nota' => '4'
];
$alunos[] = [
    'nome' => 'Mercoteio',
    'nota' => '5'
];
$alunos[] = [
    'nome' => 'Fassuquete',
    'nota' => '6'
];
$alunos[] = [
    'nome' => 'Pezil�io',
    'nota' => '8'
];
$alunos[] = [
    'nome' => 'Fricoletozis',
    'nota' => '4'
];
$alunos[] = [
    'nome' => 'Benedito',
    'nota' => '2'
];
$alunos[] = [
    'nome' => 'Merc�dius',
    'nota' => '1'
];
$alunos[] = [
    'nome' => 'Firuticonis',
    'nota' => '5'
];
$alunos[] = [
    'nome' => 'Clar�ncio',
    'nota' => '4'
];
$alunos[] = [
    'nome' => 'Macolitiusicaviruz',
    'nota' => '5'
];
$alunos[] = [
    'nome' => 'A�rizEgipt',
    'nota' => '2'
];
$alunos[] = [
    'nome' => 'Dengozo',
    'nota' => '7'
];
$alunos[] = [
    'nome' => 'Magrelo',
    'nota' => '5'
];
$alunos[] = [
    'nome' => 'Gord�o',
    'nota' => '3'
];
$alunos[] = [
    'nome' => 'Nerdoliz',
    'nota' => '6'
];



foreach($alunos as $aluno){

    if($aluno['nota'] >= 7){
        echo "O aluno {$aluno['nome']} tirou {$aluno['nota']} e est� aprovado <br> <br>";
    }
    elseif($aluno['nota'] >= 5){
        echo "O aluno {$aluno['nome']} tirou {$aluno['nota']} e est� em recupera��o <br> <br>";
    }
    else{
        echo "O aluno {$aluno['nome']} tirou {$aluno['nota']} e est� reprovado <br> <br>";
    }

}