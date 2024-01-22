"use strict";

function searchData() {
  // Obtém o valor da barra de pesquisa
  var searchTerm = document.getElementById('pesquisar').value.toLowerCase(); // Obtém todos os elementos com a classe 'pedido-item'

  var pedidos = document.getElementsByClassName('pedido-item'); // Itera sobre os pedidos e verifica se o termo de pesquisa está presente no número do pedido, quantidade, status ou data/hora

  for (var i = 0; i < pedidos.length; i++) {
    var pedido = pedidos[i];
    var idPedido = pedido.getElementsByTagName('p')[0].innerText.toLowerCase();
    var numeroPedido = pedido.getElementsByTagName('h2')[0].innerText.toLowerCase();
    var quantidadePedido = pedido.getElementsByTagName('p')[1].innerText.toLowerCase();
    var statusPedido = pedido.getElementsByTagName('p')[2].innerText.toLowerCase();
    var dataHoraPedido = pedido.getElementsByTagName('p')[3].innerText.toLowerCase(); // Verifica se o termo de pesquisa está presente no número do pedido, quantidade, status ou data/hora

    if (idPedido.includes(searchTerm) || numeroPedido.includes(searchTerm) || quantidadePedido.includes(searchTerm) || statusPedido.includes(searchTerm) || dataHoraPedido.includes(searchTerm)) {
      pedido.style.display = 'block'; // Exibe o pedido
    } else {
      pedido.style.display = 'none'; // Oculta o pedido
    }
  }
}
//# sourceMappingURL=todos_pedidos.dev.js.map
