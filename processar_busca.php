<?php
// Inclua a conexão com o banco de dados
include 'conexao.php';

if ($con->connect_error) {
    die("Erro na conexão: " . $con->connect_error);
}

// Processar a consulta de pesquisa
if (isset($_GET['termo_pesquisa'])) {
    $termo_pesquisa = $_GET['termo_pesquisa'];
    $sql = "SELECT * FROM produtos WHERE nome_produto LIKE '%$termo_pesquisa%'";
    $resultado = $con->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Pesquisa</title>
</head>
<body>
    <h1>Resultado da Pesquisa</h1>

    <?php
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            echo "<p>Nome: " . $row['nome_produto'] . "</p>";
            echo "<p>Descrição: " . $row['descricao_produto'] . "</p>";
            echo "<p>Preço: $" . $row['preco_produto'] . "</p>";
            echo "<p>Categoria: " . $row['categoria_produto'] . "</p>";
            echo "<a href='adicionar_ao_carrinho.php?id=" . $row['id_produto'] . "'>Adicionar ao Carrinho</a>"; // Adicione este link
            echo "<hr>";
        }
    } else {
        echo "Nenhum resultado encontrado.";
    }
    ?>

</body>
</html>
