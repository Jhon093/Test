<?php
// Inclua a conexão com o banco de dados
include 'conexao.php'; 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];
        
    
        // Verifique a conexão
        if ($con->connect_error) {
            die("Erro de conexão com o banco de dados: " . $con->connect_error);
        }
        
        // Inserir os dados no banco de dados
        $sql = "INSERT INTO contatos (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";
        if ($con->query($sql) === TRUE) {
            $confirmacao = "Obrigado por entrar em contato. Sua solicitação foi enviada com sucesso.";
        } else {
            $confirmacao = "Erro ao salvar o contato: " . $con->error;
        }
        
        // Feche a conexão com o banco de dados
        $con->close();
        echo "Sua solicitação foi concluída com sucesso. Em até 48 horas será respondida. Estamos te redirecionando a página principal...";
        // Redirecionar o usuário de volta para a página de contato com a mensagem de confirmação após três segundos
        header("refresh:3;url=contato.php?confirmacao=" . urlencode($confirmacao));
        exit;
    }
    ?>
    