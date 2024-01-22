

function searchData() {
    // Obtém o valor da barra de pesquisa
    var searchTerm = document.getElementById('pesquisar').value.toLowerCase();
    
    // Obtém todos os elementos com a classe 'produto-item'
    var produtos = document.getElementsByClassName('produto-item');

    // Itera sobre os produtos e verifica se o termo de pesquisa está presente no nome, no código de barras ou no ID
    for (var i = 0; i < produtos.length; i++) {
        var produto = produtos[i];
        var idProduto = produto.getElementsByTagName('p')[0].innerText.toLowerCase();
        var nomeProduto = produto.getElementsByTagName('h2')[0].innerText.toLowerCase();
        var codBarras = produto.getElementsByTagName('p')[1].innerText.toLowerCase();

        // Verifica se o termo de pesquisa está presente no nome, no código de barras ou no ID
        if (idProduto.includes(searchTerm) || nomeProduto.includes(searchTerm) || codBarras.includes(searchTerm)) {
            produto.style.display = 'block'; // Exibe o produto
        } else {
            produto.style.display = 'none'; // Oculta o produto
        }
    }
}
