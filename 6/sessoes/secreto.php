<?php session_start(); ?>


<?php if (isset($_SESSION['logado'])): ?>

    <h1>Parabens voc� logou na minha pagina secreta!</h1>
    <p>E o meu segredo �...</p>
    <p>Que eu n�o tenho segredos!</p>
    <i>--- N�o conte para ninguem! ---</i><br><br>
    <a href="logout.php">Logout(Sair)</a>

<?php else: ?>

    <h1>Bem Vindo ao meu curso de PHP logue-se para descobrir meus segredos.</h1>
    <a href="index.php">Login</a>

<?php endif; ?>