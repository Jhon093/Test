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
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$url_imagem = $_POST["foto"];

// Inserir os dados no banco de dados
$sql = "INSERT INTO produtos1 (nome, descricao, preco, quantidade, foto) VALUES (?, ?, ?, ?, ?)";
$stmt = $con->prepare($sql);
$stmt->bind_param("ssdss", $nome, $descricao, $preco, $quantidade, $url_imagem);

if ($stmt->execute()) {
    echo "Produto adicionado com sucesso! Estamos lhe retornando para a página anterior...";
    header("refresh:3;url=adicionar_produto.php?confirmacao=");
} else {
    echo "Erro ao adicionar o produto: " . $stmt->error;
}

// Fechar a conexão com o banco de dados
$stmt->close();
$con->close();
?>
