<!DOCTYPE html>
<html>
<html lang="pt-BR">

<body>
    <h1>Adicionar Novo Produto</h1>
    <form action="processar_formulario.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" rows="4" required></textarea><br>

        <label for="preco">Preço R$:</label>
        <input type="number" id="preco" name="preco" required><br>

        <label for="quantidade">Disponibilidade:</label>
        <input type="number" min="1" max="1000" id="quantidade" name="quantidade" required><br>

        <label for="tempo_preparo">Tempo de preparo:</label>
        <input type="time" id="tempo_preparo" name="tempo_preparo" required><br>

        <label for="foto">URL da Imagem:</label>
        <input type="file" id="foto" name="foto" required><br>

        <input type="submit" value="Adicionar Produto">
    </form>
</body>
</html>
