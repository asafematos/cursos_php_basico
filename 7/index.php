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

    <form action="index.php" method="post">
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
    <h1>Dados enviados pelo formulario:</h1>
    <b>Nome: </b><?php echo $_REQUEST["nome"]?><br>
    <b>Email: </b><?php echo $_REQUEST["email"]?><br>
    <b>Assunto: </b><?php echo $_REQUEST["assunto"]?><br>
    <b>Mensagem: </b><?php echo $_REQUEST["mensagem"]?><br><br>

    <a href="index.php">Voltar</a>
<?php endif ?>
</body>
</html>