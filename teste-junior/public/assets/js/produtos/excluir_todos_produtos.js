

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

function excluirSelecionados() {
    var checkboxes = document.querySelectorAll('.selecionar-produto:checked');
    
    var idsSelecionados = Array.from(checkboxes).map(function(checkbox) {
        return checkbox.dataset.id;
    });

    // Aqui você pode fazer uma requisição para excluir os itens no backend usando Ajax
    // Exemplo usando fetch:
    fetch('/excluir-itens', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ ids: idsSelecionados }),
    })
    .then(response => response.json())
    .then(data => {
        console.log('Itens excluídos:', data);
        // Aqui você pode atualizar a interface ou fazer outras ações necessárias após a exclusão
    })
    .catch(error => {
        console.error('Erro ao excluir itens:', error);
    });
}
