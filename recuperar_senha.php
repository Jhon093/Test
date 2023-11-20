<!DOCTYPE html>
<html>
<body>
    <?php include('navbar.php'); ?>
   
</body>

<head>
    <title>Recuperação de Senha</title>
</head>
<body>
    <h2>Recuperar Senha</h2>
    <form action="processar_recuperacao_senha.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <input type="submit" value="Recuperar Senha">
    </form>
</body>
<footer>
        <?php include('navbar_inferior.php'); ?>
        </footer>
</html>
