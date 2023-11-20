<!DOCTYPE html>
<html lang="pt-BR">
<body>
    <?php include('navbar.php'); ?>
    <!-- O restante do conteúdo da página -->
</body>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>
    <header>
        <h1>Confirmação de Pedido</h1>
        <nav>
         
        <div class="botoes-bottom">
            <a href="login.php" class="botao"><i class="fas fa-sign-in-alt"></i></a>
            <div class="barra-vertical"></div>
            <a href="cadastro.php" class="botao"><i class="fas fa-user-plus"></i></a>
    
        </div> 
         
         <ul>
                <li><a href="index.php"><i class="fas fa-home"></i></a></li>
                <li><a href="produto.php"><i class="fas fa-shopping-bag"></i></a></li>
                <li><a href="promoção.php"><i class="fas fa-tags"></i></a></li>
                <li><a href="contato.php"><i class="fas fa-envelope"></i></a></li>
                <li><a href="carrinho.php"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </nav>
    </header>
    
    <section id="detalhes-pedido">
        <h2>Detalhes do Pedido</h2>
        <p>Número do Pedido: #12345</p>
        <p>Data do Pedido: <?php echo date("d/m/Y"); ?></p>
    </section>

    <section id="informacoes-entrega">
        <h2>Informações de Entrega</h2>
        <p>Nome: Nome do Cliente</p>
        <p>Endereço: Endereço de Entrega</p>
        <p>Cidade: Cidade de Entrega</p>
        <p>Estado: Estado de Entrega</p>
        <p>CEP: CEP de Entrega</p>
    </section>

    <section id="resumo-pedido">
        <h2>Resumo do Pedido</h2>
        <table>
            <tr>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço Unitário</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>Produto 1</td>
                <td>2</td>
                <td>$199,99</td>
                <td>$399,98</td>
            </tr>
            <!-- Adicione mais linhas para outros produtos conforme necessário -->
        </table>
        <p>Total do Pedido: $399,98</p>
    </section>

    <section id="instrucoes-acompanhamento">
        <h2>Instruções sobre o Acompanhamento do Pedido</h2>
        <p>Seu pedido foi registrado com sucesso. Você receberá um e-mail de confirmação com os detalhes do pedido em breve.</p>
        <p>Para acompanhar o status do seu pedido, faça login na sua conta ou utilize o número do pedido fornecido.</p>
    </section>
    
    <footer>
    
        <?php include('navbar_inferior.php'); ?>
       
    </footer>
</body>
</html>
