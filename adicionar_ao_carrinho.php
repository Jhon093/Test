<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["id"])) {
    $produto_id = $_GET["id"];
    
// Consulta SQL para inserir o item na tabela 'carrinho'
if (isset($_POST['id'])) {
    $produto_id = $_POST['produto_id'];

    // Verifique se o carrinho já existe na sessão
    if (!isset($_SESSION['carrinho.php'])) {
        $_SESSION['carrinho.php'] = array();
    }

    // Adicione o ID do produto ao carrinho
    $_SESSION['carrinho.php'][] = $produto_id;}}

header("location: produto.php");
exit();
?>