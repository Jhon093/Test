<!DOCTYPE html>
<html lang="pt-BR">
<meta name="viewport" content="width=device-width, initial-scale=1">

<header>

        <?php include('navbar.php'); ?>

</header>
<body>
<?php
// Inclua a conexão com o banco de dados
include 'conexao.php';

// Inicialize a sessão (se aplicável)
session_start();

if (isset($_SESSION['carrinho'])) {
    echo '<h1>Carrinho de Compras</h1>';
    echo '<form action="atualizar_carrinho.php" method="post">'; // Use POST para atualizar a quantidade

    echo '<table>';
    
    $total = 0;

    foreach ($_SESSION['carrinho'] as $produto_id => $quantidade) {
        // Consulte o banco de dados para obter informações sobre o produto
        $sql = "SELECT * FROM produtos1 WHERE id = $produto_id";
        $result = mysqli_query($con, $sql);
        $produto = mysqli_fetch_assoc($result);

        $preco_total = $produto['preco'] * $quantidade;
        $total += $preco_total;

        echo '<tr>';
        echo '<td>' . $produto['nome'] . '</td>';
        echo '<td>';
        echo '<input type="number" name="quantidade[' . $produto_id . ']" value="' . $quantidade . '" min="1">';
        echo '</td>';
        echo '<td>R$ ' . number_format($produto['preco'], 2) . '</td>';

        echo '<td><a href="remover_do_carrinho.php?produto_id=' . $produto_id . '">Excluir</a></td>';
        echo '</tr>';
    }

    echo '</table>';
    echo '<p>Total: R$ ' . number_format($total, 2) . '</p>';
    echo '<input type="submit" value="Atualizar Carrinho">';
    echo '</form>';
} else {
    echo '<p>O carrinho está vazio.</p>';
}

// Feche a conexão com o banco de dados
mysqli_close($con);
?>
</body>
<footer>

<?php include('navbar_inferior.php'); ?>

</footer>
</html>