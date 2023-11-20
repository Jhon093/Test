<!DOCTYPE html>
<html lang="pt-BR">

<?php
// Inclua a conexão com o banco de dados
include 'conexao.php';

// Verificar se a conexão foi bem-sucedida
if ($con->connect_error) {
    die("Falha na conexão: " . $con->connect_error);
}

// Recuperar os dados do formulário
$nome = $_POST["nome_produto"];
$preco = $_POST["preco_produto"];
$disponibilidade = $_POST["quantidade_disponivel"];
$url_imagem = $_POST["imagem_produto"];

// Inserir os dados no banco de dados
$sql = "INSERT INTO carrinho (produto_carrinho, preco_carrinho, quantidade_carrinho, imagem_carrinho) VALUES (?, ?, ?, ?)";
$stmt = $con->prepare($sql);
$stmt->bind_param("ssdssss", $nome, $preco, $disponibilidade, $url_imagem);

if ($stmt->execute()) {
    echo "Produto adicionado com sucesso ao carrinho! Estamos lhe retornando para a página anterior...";
    header("refresh:3;url=produto.php?confirmacao=");
} else {
    echo "Erro ao adicionar o produto no carrinho: " . $stmt->error;
}

// Fechar a conexão com o banco de dados
$stmt->close();
$con->close();
?>