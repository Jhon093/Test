<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifique se o formulário de pagamento foi enviado

    // Valide os dados do formulário
    $pagamento = $_POST['pagamento'];
    if ($pagamento !== 'debito' && $pagamento !== 'credito' && $pagamento !== 'pix') {
        // Opção de pagamento inválida
        die("Opção de pagamento inválida. <a href='carrinho.php'>Voltar ao Carrinho</a>");
    }

    // Neste ponto, você deve implementar a lógica de processamento de pagamento
    // Dependendo da opção de pagamento escolhida, você pode integrar com um serviço de pagamento
    // ou criar sua própria lógica de processamento de pagamento

    // Após o processamento bem-sucedido, você pode exibir uma mensagem de confirmação e limpar o carrinho
    unset($_SESSION['carrinho']);
    echo "Pagamento processado com sucesso! Obrigado pela sua compra.";
} else {
    // Se alguém tentar acessar esta página diretamente sem enviar o formulário, redirecione para o carrinho
    header('Location: carrinho.php');
}
?>
