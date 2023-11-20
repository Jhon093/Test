<!DOCTYPE html>
<html>
<html lang="pt-BR">

<body> 
    <?php include('navbar.php'); ?>
    
</body>

<head>
    <meta charset="UTF-8">
    <title>Cadastrr</title>
</head>

        
<body>

    <h2>Cadastro de Cliente</h2>
    <div class= "cadastrousuario">
    <form method="post" action="processar_cadastro.php">
    <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" required><br>

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" required><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" name="data_nascimento" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <label for="sexo">Opção Sexual:</label>
        <select name="sexo">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select><br>

        <label for="apelido">Nome que Deseja ser Chamado:</label>
        <input type="text" name="apelido" required><br>

        <label for="telefone_celular">Número de Telefone Celular:</label>
        <input type="tel" name="telefone_celular" required><br>

        <label for="telefone_fixo">Número de Telefone Fixo:</label>
        <input type="tel" name="telefone_fixo"><br>

        
        <input type="submit" value="Cadastrar">
    </form>
</div>
<footer>
    
        <?php include('navbar_inferior.php'); ?>
       
    </footer>
</body>
</html>
