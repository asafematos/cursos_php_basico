<?php
//function array_sort($array, $on, $order=SORT_ASC)
//{
//    $new_array = array();
//    $sortable_array = array();
//
//    if (count($array) > 0) {
//        foreach ($array as $k => $v) {
//            if (is_array($v)) {
//                foreach ($v as $k2 => $v2) {
//                    if ($k2 == $on) {
//                        $sortable_array[$k] = $v2;
//                    }
//                }
//            } else {
//                $sortable_array[$k] = $v;
//            }
//        }
//
//        switch ($order) {
//            case SORT_ASC:
//                asort($sortable_array);
//                break;
//            case SORT_DESC:
//                arsort($sortable_array);
//                break;
//        }
//
//        foreach ($sortable_array as $k => $v) {
//            $new_array[$k] = $array[$k];
//        }
//    }
//
//    return $new_array;
//}

$alunos = array();

$alunos[] = [
    'nome' => 'Pedro',
    'altura' => '1,80',
    'matricula' => '0'
];
$alunos[] = [
    'nome' => 'Maria',
    'altura' => '1,20',
    'matricula' => '1'
];
$alunos[] = [
    'nome' => 'Paulo',
    'altura' => '1,50',
    'matricula' => '2'
];
$alunos[] = [
    'nome' => 'Firulinha',
    'altura' => '1,75',
    'matricula' => '3'
];
$alunos[] = [
    'nome' => 'Braluteco',
    'altura' => '1,85',
    'matricula' => '4'
];
$alunos[] = [
    'nome' => 'Farcolizis',
    'altura' => '1,50',
    'matricula' => '5'
];
$alunos[] = [
    'nome' => 'Mercoteio',
    'altura' => '1,10',
    'matricula' => '6'
];
$alunos[] = [
    'nome' => 'Fassuquete',
    'altura' => '1,79',
    'matricula' => '7'
];
$alunos[] = [
    'nome' => 'Peziléio',
    'altura' => '1,47',
    'matricula' => '8'
];
$alunos[] = [
    'nome' => 'Fricoletozis',
    'altura' => '1,43',
    'matricula' => '9'
];
$alunos[] = [
    'nome' => 'Benedito',
    'altura' => '1,80',
    'matricula' => '10'
];
$alunos[] = [
    'nome' => 'Mercédius',
    'altura' => '1,60',
    'matricula' => '11'
];
$alunos[] = [
    'nome' => 'Firuticonis',
    'altura' => '1,65',
    'matricula' => '12'
];
$alunos[] = [
    'nome' => 'Clarêncio',
    'altura' => '1,80',
    'matricula' => '13'
];
$alunos[] = [
    'nome' => 'Macolitiusicaviruz',
    'altura' => '1,59',
    'matricula' => '14'
];
$alunos[] = [
    'nome' => 'AérizEgipt',
    'altura' => '1,30',
    'matricula' => '15'
];
$alunos[] = [
    'nome' => 'Dengozo',
    'altura' => '1,78',
    'matricula' => '16'
];
$alunos[] = [
    'nome' => 'Magrelo',
    'altura' => '1,11',
    'matricula' => '17'
];
$alunos[] = [
    'nome' => 'Gordão',
    'altura' => '1,26',
    'matricula' => '18'
];
$alunos[] = [
    'nome' => 'Deadpool',
    'altura' => '1,70',
    'matricula' => '19'
];


//array_sort


foreach($alunos as $aluno){

        echo $aluno['altura']. "<br>";

        if ($aluno['altura'] == 1) {

        }

//    if($aluno['nota'] >= 7){
//        echo "O aluno {$aluno['nome']} tirou {$aluno['nota']} e está aprovado <br> <br>";
//    }
//    elseif($aluno['nota'] >= 5){
//        echo "O aluno {$aluno['nome']} tirou {$aluno['nota']} e está em recuperação <br> <br>";
//    }
//    else{
//        echo "O aluno {$aluno['nome']} tirou {$aluno['nota']} e está reprovado <br> <br>";
//    }

}