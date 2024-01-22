<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Visualização do Pedido</title>
    <link rel="stylesheet" href="{{asset('assets/css/pedidos/visualizacao_pedido.css')}}">
    </head>
    <body>      

            <!-- <label for=""> NumeroPedido </label> <br /> 
            <input type="text" name="NumeroPedido"  value="{{ $pedido->NumeroPedido }}"> <br /> -->

            <label for=""> Quantidade</label> <br />
            <input type="text" name="Quantidade" value="{{ $pedido->Quantidade }}">  <br />

            <label for=""> Statuspedido </label> <br />
            <input type="text" name="Statuspedido"  value="{{ $pedido->StatusPedido }}"> <br />

            <a href="{{ route('pagina_inicial') }}"><button class="voltar_pedido">Voltar</button></a>

            
    </body>
    </html>