<!DOCTYPE html>
<html lang="pt-BR">

<body>
    <?php include('navbar.php'); ?>
</body>

<body>
   
<h2>Entre em Contato</h2>
    

<form id="contato-form" action="salvar_contato.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" required></textarea>
        
        <button type="submit" id="enviar">Enviar</button>
    </form>

    



    
    <section id="informacoes-contato">
        <h2>Informações de Contato</h2>
        <p>Endereço: Rua 11 </p>
        <p>Cidade: Queimados</p>
        <p>Estado: Rio de Janeiro</p>
        <p>CEP: 26323-528</p>
        <p>Email: cupcakeencantado@gmail.com</p>
    </section>

    

    <footer>
    
    <?php include('navbar_inferior.php'); ?>
   
</footer>
</body>
</html>
