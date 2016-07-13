<!doctype html>
<html>
<head>
    <title>Furmularios</title>
    <style>
        label {
            width: 100px;
            display: block;
        }
    </style>
</head>
<body>

<?php
//
//$_REQUEST["nome"]
//
//?>

<?php if (!$_REQUEST['submit']): ?>

    <form action="email.php" method="post">
        <fieldset>
            <legend>Exemplo Formulario</legend>
            <label>Nome: <input type="text" name="nome"></label><br>
            <label>Email: <input type="text" name="email"></label><br>
            <label>Assunto: <input type="text" name="assunto"></label><br>
            <label>Mensagem: <textarea name="mensagem" rows="10"></textarea></label><br>
        </fieldset>
        <br>
        <input type="submit" name="submit" value="Enviar">
    </form>

<?php else: ?>
    <h1>Dados enviados com sucesso</h1>

    <a href="email.php">Voltar</a>
    <?php
    $mensagem = "Dados enviados via formulario";
    $mensagem .= "Nome: " . $_REQUEST['nome'] . "\n";
    $mensagem .= "Email: " . $_REQUEST['email'] . "\n";
    $mensagem .= "Assunto: " . $_REQUEST['assunto'] . "\n";
    $mensagem .= "Mensagem: " . $_REQUEST['mensagem'] . "\n";

    $to = "contato@inbless.com.br";
    $assunto = "Enviando dados via formulario!";
    $header = "header: from:asafe@inbless.com.br";

    mail($to, $assunto, $mensagem, $header);
    ?>

<?php endif ?>
</body>
</html>