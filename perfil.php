<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<header>

<?php include('navbar.php'); ?>

</header>

<head>

<body>
    <h1> Olá, seja bem vindo(a) </h1>
    <h2>Perfil do Usuário</h2>
    
    <!-- Conteúdo da página do perfil -->
    <!-- Adicione informações do perfil aqui -->

    <a href="logout.php">Sair</a> <!-- Adicione um link para logout -->
</body>
<footer>
        <?php include('navbar_inferior.php'); ?>
        </footer>
</html>
