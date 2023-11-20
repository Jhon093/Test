<?php
$host = "localhost"; // Nome do host do banco de dados
$usuario = "root"; // Nome de usuário do banco de dados
$senha = ""; // Senha do banco de dados
$banco = ""; // Nome do banco de dados

// Conectar ao banco de dados
$con = new mysqli($host, $usuario, $senha, $banco);

// Verificar a conexão
if ($con->connect_error) {
    die("Falha na conexão com o banco de dados: " . $con->connect_error);
}
?>
