<?php

// Inclua a conexão com o banco de dados
include 'conexao.php';




if ($con->connect_error) {
    die("Erro na conexão com o banco de dados: " . $con->connect_error);
}
$con  = new mysqli($host, $usuario, $senha, $banco);

if ($con->connect_error) {
    die("Conexão falhou: " . $con->connect_error);
}

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$data_nascimento = $_POST['data_nascimento'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_BCRYPT); // Hash da senha
$sexo = $_POST['sexo'];
$apelido = $_POST['apelido'];
$telefone_celular = $_POST['telefone_celular'];
$telefone_fixo = $_POST['telefone_fixo'];

$sql = "INSERT INTO usuarios (nome, cpf, endereco, data_nascimento, email, senha, sexo, apelido, telefone_celular, telefone_fixo)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $con->prepare($sql);
$stmt->bind_param("ssssssssss", $nome, $cpf, $endereco, $data_nascimento, $email, $senha, $sexo, $apelido, $telefone_celular, $telefone_fixo);

if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar usuário: " . $stmt->error;
}
header("Location: login.php");
exit();
$stmt->close();
$con->close();
?>