<!DOCTYPE html> 
<html lang="pt-BR">
<link rel="stylesheet" href="style.css">


<header> 

<div class="logo">
        <?php  
$caminho_imagem = 'img/LOGO11.jpg';
$largura = 220; // Largura desejada em pixels
$altura = 200; // Altura desejada em pixels
echo '<img src="' . $caminho_imagem . '" width="' . $largura . '" height="' . $altura . '" alt="logo">';
?>

</div>

    <div class="botoes-bottom">
        
          
            <a href="login.php" class="custom-btn btn-1">Login 
            <a href="cadastro.php" class="custom-btn btn-1">Cadastrar</a>
        </div> 

        



</header>
<body>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cupcake</title>
    
    <header>
        <h1>Cupcake Mania</h1>
        
         
        


         <ul>
                <a href="index.php" class="custom-btn btn-1">Inicio</a>
                <a href="produto.php" class="custom-btn btn-1">Produtos</a>
                <a href="contato.php" class="custom-btn btn-1">Contato</a>
                <a href="carrinho.php" class="custom-btn btn-1">Carrinho</a>

               
            </ul>
       
    </header>
</body>


</html>