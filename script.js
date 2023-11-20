document.addEventListener("DOMContentLoaded", function () {
    const addToCartButtons = document.querySelectorAll(".add-to-cart-button");

    addToCartButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            const productId = button.getAttribute("data-product-id");
            const productName = button.getAttribute("data-product-name");
            const productPrice = button.getAttribute("data-product-price");

            // Aqui, você pode adicionar o produto ao carrinho (por exemplo, usando uma matriz JavaScript) ou enviar uma solicitação AJAX para o servidor para gerenciar o carrinho.
            // Exemplo de adicionar o produto a uma matriz:
            const product = {
                id: productId,
                name: productName,
                price: parseFloat(productPrice),
            };
            carrinho.push(product);

            // Atualize a interface do carrinho (número de itens no carrinho, valor total, etc.).
            atualizarCarrinhoInterface();
        });
    });

    function atualizarCarrinhoInterface() {
        // Atualize a interface do carrinho, como o número de itens no carrinho e o valor total.
    }
});

// JavaScript para adicionar produtos ao carrinho
function adicionarAoCarrinho(id_produto, nome_produto, preco_produto) {
    var quantidade = parseInt(document.querySelector('.produto input[name="quantidade_produto"]').value);

    // Envie um pedido AJAX para o arquivo PHP de adição ao carrinho
    // Passando os parâmetros id_produto, nome, preco e quantidade
    // Certifique-se de que o arquivo PHP adicionar_ao_carrinho.php esteja configurado para receber esses parâmetros
    // Você pode usar a função fetch() ou uma biblioteca JavaScript como jQuery.ajax() para fazer isso
}

