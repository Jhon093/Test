<?php
// Inclua a conexão com o banco de dados
include 'conexao.php';

// Inicialize a sessão (se aplicável)
session_start();

if (isset($_GET['produto_id'])) {
    $produto_id = $_GET['produto_id'];
    $quantidade = 1; // Você pode ajustar a quantidade conforme necessário

    // Verifique se o produto já está no carrinho
    if (isset($_SESSION['carrinho'][$produto_id])) {
        $_SESSION['carrinho'][$produto_id] += $quantidade;
    } else {
        $_SESSION['carrinho'][$produto_id] = $quantidade;
    }

    // Agora, diminua a quantidade disponível na tabela "produto1" no banco de dados
    $sql = "UPDATE produtos1 SET quantidade = quantidade - $quantidade WHERE id = $produto_id";
    mysqli_query($con, $sql);

    // Redirecione de volta para a página de produtos (produto.php) ou exiba uma mensagem de confirmação
    header('Location: produto.php');
    exit;
} else {
    // Redirecione para a página de produtos (produto.php) se os parâmetros não estiverem definidos
    header('Location: produto.php');
    exit;
}

// Feche a conexão com o banco de dados
mysqli_close($con);
?>
