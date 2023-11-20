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
        <h1>Categoria de Produtos</h1>
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
    
    <section id="filtro-e-ordenacao">
        <h2>Filtros e Ordenação</h2>
        <div class="filtro">
            <h3>Filtrar por:</h3>
            <label for="marca">Marca:</label>
            <select name="marca" id="marca">
                <option value="marca1">Marca 1</option>
                <option value="marca2">Marca 2</option>
                <!-- Adicione mais opções de marca conforme necessário -->
            </select>
            <label for="tamanho">Tamanho:</label>
            <select name="tamanho" id="tamanho">
                <option value="pequeno">Pequeno</option>
                <option value="medio">Médio</option>
                <option value="grande">Grande</option>
                <!-- Adicione mais opções de tamanho conforme necessário -->
            </select>
            <!-- Adicione mais filtros conforme necessário -->
            <button id="aplicar-filtro">Aplicar Filtro</button>
        </div>
        <div class="ordenacao">
            <h3>Ordenar por:</h3>
            <label for="ordem">Ordem:</label>
            <select name="ordem" id="ordem">
                <option value="preco-crescente">Preço Crescente</option>
                <option value="preco-decrescente">Preço Decrescente</option>
                <option value="popularidade">Popularidade</option>
                <option value="avaliacoes">Avaliações</option>
            </select>
        </div>
    </section>

    <section id="produtos">
        <h2>Produtos</h2>
        <div class="produto">
            <img src="produto1.jpg" alt="Produto 1">
            <h3
