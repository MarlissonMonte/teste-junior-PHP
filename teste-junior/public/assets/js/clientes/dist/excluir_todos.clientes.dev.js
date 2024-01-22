"use strict";

function searchData() {
  // Obtém o valor da barra de pesquisa
  var searchTerm = document.getElementById('pesquisar').value.toLowerCase(); // Obtém todos os elementos com a classe 'cliente-item'

  var clientes = document.getElementsByClassName('cliente-item'); // Itera sobre os clientes e verifica se o termo de pesquisa está presente no nome, no CPF ou no email

  for (var i = 0; i < clientes.length; i++) {
    var cliente = clientes[i];
    var idCliente = cliente.getElementsByTagName('p')[0].innerText.toLowerCase();
    var nomeCliente = cliente.getElementsByTagName('h2')[0].innerText.toLowerCase();
    var cpfCliente = cliente.getElementsByTagName('p')[1].innerText.toLowerCase();
    var emailCliente = cliente.getElementsByTagName('p')[2].innerText.toLowerCase(); // Verifica se o termo de pesquisa está presente no nome, no CPF ou no email

    if (idCliente.includes(searchTerm) || nomeCliente.includes(searchTerm) || cpfCliente.includes(searchTerm) || emailCliente.includes(searchTerm)) {
      cliente.style.display = 'block'; // Exibe o cliente
    } else {
      cliente.style.display = 'none'; // Oculta o cliente
    }
  }
}
//# sourceMappingURL=excluir_todos.clientes.dev.js.map
