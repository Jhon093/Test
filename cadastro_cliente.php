<!DOCTYPE html>
<html lang="pt-BR">
<body>
    <?php include('navbar.php'); ?>
    <!-- O restante do conteúdo da página -->
</body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
 
</head>
<body>
    <header>
        <h1>Cadastro de Cliente</h1>
        
    </header>
    
    <section id="formulario-registro">
        <h2>Criar uma Conta</h2>
        <form action="processar_cadastro.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required>
            <button type="submit">Criar Conta</button>
        </form>
    </section>

    <section id="opcao-checkout-convidado">
        <h2>Check-out como Convidado</h2>
        <p>Se preferir, você pode fazer o check-out como convidado sem criar uma conta.</p>
        <a href="checkout.php">Check-out como Convidado</a>
    </section>

    <section id="login-cliente">
        <h2>Login de Cliente</h2>
        <form action="processar_login.php" method="post">
            <label for="email-login">Email:</label>
            <input type="email" name="email" id="email-login" required>
            <label for="senha-login">Senha:</label>
            <input type="password" name="senha" id="senha-login" required>
            <button type="submit">Entrar</button>
        </form>
    </section>
    
    <footer>
    <?php include('navbar_inferior.php'); ?>
    
</footer>
</body>
</html>
