<?php
// Inclua a conexão com o banco de dados
include 'conexao.php';

// Inicialize a sessão (se ainda não estiver)
session_start();

// Verifique se o carrinho não está vazio
if (empty($_SESSION['carrinho'])) {
    header('Location: carrinho.php'); // Redirecione de volta para o carrinho se estiver vazio
    exit;
}

// Lógica para criar um pedido com base nos itens no carrinho (insira no banco de dados)

// ...

// Limpe o carrinho após a finalização da compra
$_SESSION['carrinho'] = array();

// Exiba uma mensagem de confirmação ou detalhes do pedido

// ...

// Feche a conexão com o banco de dados
mysqli_close($con);
?>
