<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusao do Pedido</title>
    <link rel="stylesheet" href="{{asset('assets/css/pedidos/confimar_exclusao_pedido.css')}}">
    </head>
    <body>      
            <form action="{{ route('excluir_pedido',['id_pedido' => $pedido->id_pedido] ) }}" method="POST">
                @csrf
                <label for=""> Deseja mesmo excluir o Pedido a seguir ? </label> <br />
                <input type="text" name="NumeroPedido" value="{{ $pedido->id_pedido }}"> <br />


                <button class="confirmar_exclusao_pedido"> Sim </button>
            </form>
            <a href="{{ route('pagina_inicial') }}"><button class="voltar_pedido">Voltar</button></a>
    </body>
    </html>