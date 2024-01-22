<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Edição do Pedido</title>
    <link rel="stylesheet" href="{{asset('assets/css/pedidos/editar_pedido.css')}}">
    </head>
    <body>      
            <form action="{{ route('editar_pedido',['id_pedido' => $pedido->id_pedido] ) }}" method="POST">
                @csrf

                <!-- <label for=""> NumeroPedido </label> <br />
                <input type="text" name="NumeroPedido"  value="{{ $pedido->NumeroPedido }}"> <br /> -->

                <label for=""> Quantidade</label> <br />
                <input type="text" name="Quantidade" value="{{ $pedido->Quantidade }}">  <br />

                <select name="StatusPedido" id="StatusPedido">
                    <label for=""> StatusPedido</label> <br />
                    <option value="aberto"> aberto</option>
                    <option value="pago"> pago</option>
                    <option value="cancelado"> cancelado</option>
                 </select>
                 <button class="salvar_pedido">Salvar Edição</button>
            </form>
            
            <a href="{{ route('pagina_inicial') }}"><button class="voltar_pedido">Voltar</button></a>
    </body>
    </html>