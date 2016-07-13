<?php

$login="admin";
$senha=1234;

if($login == "admin" and $senha == 1234) {
    echo "Usuario logado";
}

elseif($login == "admin" and $senha != 1234) {
    echo "Senha Errada";
}

elseif($login != "adimin" and $senha == 1234) {
    echo "Login Errado";
}

else {
    echo "Erro no login";
}