<?php
// ARRAYS ASSOCIATIVOS \\

$config = array();
$config["nome"] = "Inbless";
$config["linguagem"] = "PHP";
$config["site"] = "http://www.inbless.com.br";

#echo $config["nome"]." - ".$config["site"];

$exemplo = array(
    "nome"=>"Inbless",
    "email"=> "contato@inbless.com.br",
    "site"=> "http://www.inbless.com.br"
);

echo $exemplo["nome"];