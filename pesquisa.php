<!DOCTYPE html>
<html lang="pt-BR">
<body>
    <?php include('navbar.php'); ?>
    <!-- O restante do conteúdo da página -->
</body>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Pesquisa</h1>
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
    
    <section id="formulario-pesquisa">
        <h2>Pesquisar Produtos</h2>
        <form action="pesquisar.php" method="get">
            <input type="text" name="q" id="q" placeholder="Digite sua pesquisa" required>
            <button type="submit">Pesquisar</button>
        </form>
    </section>

    <section id="resultados-pesquisa">
        <h2>Resultados da Pesquisa</h2>
        <?php
        // Verifique se há resultados da pesquisa e exiba-os aqui
        if (isset($_GET['q']) && !empty($_GET['q'])) {
            $pesquisa = $_GET['q'];

            // Execute a consulta no banco de dados e exiba os resultados
            // Substitua isso com a lógica real de pesquisa e resultados
            echo "<p>Resultados para: \"$pesquisa\"</p>";

            // Exemplo de resultados
            echo "<ul>";
            echo "<li>Produto 1</li>";
            echo "<li>Produto 2</li>";
            echo "<li>Produto 3</li>";
            echo "</ul>";
        } else {
            echo "<p>Nenhum resultado encontrado.</p>";
        }
        ?>
    </section>
   <footer>
        <?php include('navbar_inferior.php'); ?>
        </footer>
</body>
</html>
