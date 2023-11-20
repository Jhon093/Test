<!DOCTYPE html>
<html lang="pt-BR">


<header>  <?php include('navbar.php'); ?>  </header>

<?php

// Verifique as credenciais do usuário aqui (consulte seu banco de dados)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $password = $_POST['senha'];

    // Realize a verificação das credenciais com o banco de dados ou qualquer outra fonte
    if ($username == 'email' && $password == 'senha') {
        // Autenticação bem-sucedida, redirecione para a página do carrinho
        header("Location: carrinho.php");
        exit;
    } else {
        // Exiba uma mensagem de erro, indicando que as credenciais são inválidas
        echo "Credenciais inválidas. Tente novamente.";
    }
}

?>

<body>
    
   


    
    <h2>Login</h2>
    <form action="processar_login.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <br>
        <input type="submit" value="Entrar">
    </form>
    
    <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
    <p>Esqueceu sua senha? <a href="recuperar_senha.php">Recupere-a</a></p>
    
    
</body>
    <footer>
    
        <?php include('navbar_inferior.php'); ?>
       
    </footer>

</html>
