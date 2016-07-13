<?php session_start(); ?>


<?php if (isset($_SESSION['logado'])): ?>

    <h1>Parabens você logou na minha pagina secreta!</h1>
    <p>E o meu segredo é...</p>
    <p>Que eu não tenho segredos!</p>
    <i>--- Não conte para ninguem! ---</i><br><br>
    <a href="logout.php">Logout(Sair)</a>

<?php else: ?>

    <h1>Bem Vindo ao meu curso de PHP logue-se para descobrir meus segredos.</h1>
    <a href="index.php">Login</a>

<?php endif; ?>