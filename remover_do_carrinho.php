<?php
// Inclua a conexão com o banco de dados
include 'conexao.php';

// Inicialize a sessão (se aplicável)
session_start();

if (isset($_GET['produto_id'])) {
    $produto_id = $_GET['produto_id'];

    // Remova o item do carrinho na sessão
    if (isset($_SESSION['carrinho'][$produto_id])) {
        unset($_SESSION['carrinho'][$produto_id]);
    }

    // Remova o item do carrinho no banco de dados
    $user_id = 1; // Substitua com o ID do usuário, se aplicável
    $sql = "DELETE FROM carrinho_itens WHERE user_id = $user_id AND produto_id = $produto_id";
    mysqli_query($con, $sql);

    // Redirecione de volta para a página de carrinho
    header('Location: carrinho.php');
    exit;
} else {
    // Redirecione para a página de carrinho se os parâmetros não estiverem definidos
    header('Location: carrinho.php');
    exit;
}

// Feche a conexão com o banco de dados
mysqli_close($con);
?>
