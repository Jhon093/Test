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
        <h1>Checkout</h1>
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
    
    <section id="informacoes-entrega">
        <h2>Informações de Entrega</h2>
        <form action="processar_pedido.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" required>
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="cidade" required>
            <label for="estado">Estado:</label>
            <input type="text" name="estado" id="estado" required>
            <label for="cep">CEP:</label>
            <input type="text" name="cep" id="cep" required>
        </form>
    </section>

    <section id="opcoes-pagamento">
        <h2>Opções de Pagamento</h2>
        <label for="cartao-credito">
            <input type="radio" name="pagamento" id="cartao-credito" value="cartao-credito"> Cartão de Crédito
        </label>
        <label for="paypal">
            <input type="radio" name="pagamento" id="paypal" value="paypal"> PayPal
        </label>
        <!-- Adicione mais opções de pagamento conforme necessário -->

        <h2>Resumo do Pedido</h2>
        <!-- Exiba os itens do carrinho e o total do pedido aqui -->
        
        <label for="codigo-desconto">Código de Desconto:</label>
        <input type="text" name="codigo-desconto" id="codigo-desconto">
    </section>
    
    <button id="finalizar-pedido" type="submit">Finalizar Pedido</button>
    
    </form>
    <footer>
    
        <?php include('navbar_inferior.php'); ?>
       
    </footer>
</body>
</html>
