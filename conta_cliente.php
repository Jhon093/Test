<!DOCTYPE html>
<html lang="pt-BR">
<body>
    <?php include('navbar.php'); ?>
    <!-- O restante do conteúdo da página -->
</body>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>

</head>
<body>
    <header>
        <h1>Minha Conta</h1>
   
    
    <section id="detalhes-conta">
        <h2>Detalhes da Conta</h2>
        <p>Nome: Nome do Cliente</p>
        <p>Email: email@cliente.com</p>
        <!-- Adicione mais informações da conta conforme necessário -->
    </section>

    <section id="historico-pedidos">
        <h2>Histórico de Pedidos</h2>
        <table>
            <tr>
                <th>Número do Pedido</th>
                <th>Data do Pedido</th>
                <th>Status do Pedido</th>
                <th>Total do Pedido</th>
            </tr>
            <tr>
                <td>#12345</td>
                <td>01/01/2023</td>
                <td>Processando</td>
                <td>$199,99</td>
            </tr>
            <!-- Adicione mais linhas para outros pedidos conforme necessário -->
        </table>
    </section>

    <section id="atualizar-informacoes">
        <h2>Atualizar Informações da Conta</h2>
        <form action="atualizar_informacoes.php" method="post">
            <label for="nome">Novo Nome:</label>
            <input type="text" name="nome" id="nome">
            <label for="nova-senha">Nova Senha:</label>
            <input type="password" name="nova-senha" id="nova-senha">
            <button type="submit">Atualizar Informações</button>
        </form>
    </section>
    
    <footer>
    
    <?php include('navbar_inferior.php'); ?>
   
</footer>
</body>
</html>
