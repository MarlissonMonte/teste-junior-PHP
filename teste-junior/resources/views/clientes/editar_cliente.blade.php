<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Edição do Cliente</title>
    <link rel="stylesheet" href="{{asset('assets/css/clientes/editar_cliente.css')}}">

    </head>
    <body>      
            <form action="{{ route('editar_cliente',['id_client' => $cliente->id_client] ) }}" method="POST">
                @csrf
                <label for=""> NomeCliente </label> <br />
                <input type="text" name="NomeCliente" value="{{ $cliente->NomeCliente }}"> <br />

                <label for=""> CPF </label> <br />
                <input type="text" name="CPF" value="{{ $cliente->CPF }}"> <br />

                <label for=""> Email </label> <br />
                <input type="text" name="Email" value="{{ $cliente->Email }}"> <br />

                <button class="salvar_cliente">Salvar Edição</button>
            </form>
            <a href="{{ route('pagina_inicial') }}"><button class="voltar_cliente" >Voltar</button></a>

    </body>
    </html>