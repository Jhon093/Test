<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
</head>

<header>
    <?php include('navbar.php'); ?>
    <!-- O restante do conteúdo da página -->
</header>

<?php
// Conexão com o banco de dados
include 'conexao.php';

// Consulta para obter todos os produtos
$sql = "SELECT  * FROM produtos1";
$result = mysqli_query($con, $sql);

echo '<h1>Produtos</h1>';
echo '<table>';
echo '<tr><th>Nome</th><th>Descrição</th><th>Preço</th><th>Quantidade Disponível</th><th>Ação</th></tr>';

while ($produto = mysqli_fetch_assoc($result)) {
    $produto_id = $produto['id'];

    // Consulta para obter a quantidade disponível
    $quantidade_disponivel = $produto['quantidade'];

    echo '<tr>';
    echo '<td>' . $produto['nome'] . '</td>';
    echo '<td>' . $produto['descricao'] . '</td>';
    echo '<td>R$ ' . number_format($produto['preco'], 2) . '</td>';
    echo '<td>' . $quantidade_disponivel . '</td>';
    echo '<td>';

    if ($quantidade_disponivel > 0) {
        echo '<form action="add_to_cart.php" method="get">';
        echo '<input type="hidden" name="produto_id" value="' . $produto_id . '">';
        echo '<input type="submit" value="Adicionar ao Carrinho">';
        echo '</form>';
    } else {
        echo 'Produto Indisponível';
    }

    echo '</td>';
    echo '</tr>';
}

echo '</table>';

// Feche a conexão com o banco de dados
mysqli_close($con);
?>


<body>




    <section id="avaliacao" style="text-align: center;">>
        <h2>Avaliações de Clientes</h2>
        <div class="avaliacao">
            <h3>Cliente 1</h3>
            <p class="comentario">Ótimo produto! Chegou no prazo e atendeu às minhas expectativas.</p>
            <div class="classificacao">
                Classificação:
                <span class="estrela">&#9733;</span>
                <span class="estrela">&#9733;</span>
                <span class="estrela">&#9733;</span>
                <span class="estrela">&#9733;</span>
                <span class="estrela">&#9734;</span>
            </div>
        </div>
        
        <div class="avaliacao">
            <h3>Cliente 2</h3>
            <p class="comentario">Produto de qualidade, recomendo!</p>
            <div class="classificacao">
                Classificação:
                <span class="estrela">&#9733;</span>
                <span class="estrela">&#9733;</span>
                <span class="estrela">&#9733;</span>
                <span class="estrela">&#9733;</span>
                <span class="estrela">&#9733;</span>
            </div>
        </div>
        <!-- Adicione mais avaliações conforme necessário -->
    </section>
    
    
</body>


<footer>
        <?php include('navbar_inferior.php'); ?>
    </footer>

</html>
