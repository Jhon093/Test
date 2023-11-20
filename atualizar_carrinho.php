<?php
// Inclua a conexão com o banco de dados
include 'conexao.php';

// Inicialize a sessão (se aplicável)
session_start();

if (isset($_POST['quantidade']) && is_array($_POST['quantidade'])) {
    foreach ($_POST['quantidade'] as $produto_id => $nova_quantidade) {
        // Verifique se a nova quantidade é válida (maior ou igual a 1)
        $nova_quantidade = max(1, $nova_quantidade);

        // Atualize a quantidade no carrinho
        if (isset($_SESSION['carrinho'][$produto_id])) {
            $_SESSION['carrinho'][$produto_id] = $nova_quantidade;
        }
    }
}

// Redirecione de volta para a página do carrinho
header('Location: carrinho.php');
exit;

// Feche a conexão com o banco de dados
mysqli_close($con);
?>
