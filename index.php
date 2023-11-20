<!DOCTYPE html>
<html lang="pt-BR">
<meta name="viewport" content="width=device-width, initial-scale=1">

<header>

        <?php include('navbar.php'); ?>

</header>
<body>

<h3>
        
            <form method="get" action="processar_busca.php">
            <input type="text" name="termo_pesquisa" placeholder="Buscar...">
            <input type="submit"  value="Pesquisar"  class="custom-botao botao-1" >
       

</h3>
        <h1>Olá, seja muito bem vindo a nossa loja!</h1>

        <br>Tem cadastro? <a href="login.php" class="custom-botao botao-1">Clique Aqui</a> </br>
            
        
        <br>Não tem? <a href="cadastro.php" class="custom-botao botao-1">Clique aqui</a></br>
                
            <h2>Venha conhecer nossa loja!!</h2>

   


        <main>
    
        <div class="flip-container">
            <div class="flipper">
                <div class="front">
                    <img src="img/nossahistoria.jpeg" alt="Como Começamos?" />
                </div>
                <div class="back">
                    <p>
                        Na Cupcake Mania, nossa história é doce, assim como nossos cupcakes! Fundada em 2010, nossa jornada começou com uma paixão por criar deliciosas obras de arte comestíveis. Desde então, dedicamos nossos esforços a aperfeiçoar as receitas, experimentar novos sabores e encantar nossos clientes com cada mordida.
                        
                    </p>
                </div>
            </div>
        </div>
    

    </main>
   
   
    
   
    
</body>
<footer>

        <?php include('navbar_inferior.php'); ?>
    
</footer>
</html>
