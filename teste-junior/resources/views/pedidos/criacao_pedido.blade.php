<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criacao Pedido</title>
    <link rel="stylesheet" href="{{asset('assets/css/pedidos/criacao_pedido.css')}}">
</head>
<body>      
    <form action="{{ route('criacao_pedido') }}" method="POST">
        @csrf
        <label for=""> idProduto </label> <br />
        <input type="text" name="idProduto"> <br />

        <label for=""> idCliente </label> <br />
        <input type="text" name="idClient"> <br />

        <label for=""> Quantidade</label> <br />
        <input type="text" name="Quantidade"> <br />
    
        <select name="StatusPedido" id="StatusPedido">
        <label for=""> StatusPedido</label> <br />
        <option value="aberto"> aberto</option>
        <option value="pago"> pago</option>
        <option value="cancelado"> cancelado</option>
        </select>
        <br />
        <button class="salvar_criacao"> Salvar </button>
    </form>
    <a href="{{ route('pagina_inicial') }}"><button class="voltar_pedido"> Voltar</button></a>

</body>
</html>