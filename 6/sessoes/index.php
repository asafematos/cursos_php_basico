<?php
session_start();
$login ="inBless";
$senha ="123";

if($login=="inBless" and $senha=="123") {
    $_SESSION['logado']= true;
    header("location: secreto.php");
}

else {
    if($login=="inBless" and $senha!="123") {
        echo "Desculpe voc� n�o logou pois a senha estava incorreta.";
    }
    if($login!="inBless" and $senha=="123") {
        echo "Desculpe voc� n�o logou pois o nome do login estava incorreto.";
    }
    elseif($login!="inBless" and $senha!="123") {
        echo "Desculpe voc� n�o logou pois nenhum dos campos esta correto.";
    }
}