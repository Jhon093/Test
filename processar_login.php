<?php
session_start();
// Inclua a conexão com o banco de dados
include 'conexao.php';

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha_fornecida = $_POST['senha'];


    if ($con->connect_error) {
        die("Erro na conexão com o banco de dados: " . $con->connect_error);
    }

    // Consulta SQL para verificar as credenciais do usuário
    $sql = "SELECT id, email, senha FROM usuarios WHERE email = '$email'";
    $result = $con->query($sql);
    
    

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $senha_hash = $row['senha'];

        if (password_verify($senha_fornecida, $senha_hash)) {
            // Senha correta, usuário autenticado
            $_SESSION['user_id'] = $row['id'];
            header("Location: perfil.php");
        } else {
            // Senha incorreta
            header("Location: login.php?erro=senha"."&senha_hash=".$senha_hash."&senha=".$senha_fornecida);
        }
    } else {
        // Usuário não encontrado
        header("Location: login.php?erro=usuario");
      
    }

    $con->close();
}
?>
