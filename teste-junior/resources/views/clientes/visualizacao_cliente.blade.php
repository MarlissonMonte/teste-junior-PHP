<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Visualização do Cliente</title>
    <link rel="stylesheet" href="{{asset('assets/css/clientes/visualizacao_cliente.css')}}">

    </head>
    <body>      
        <label for=""> NomeCliente </label> <br />
        <input type="text" name="NomeCliente" value="{{ $cliente->NomeCliente }}"> <br />

        <label for=""> CPF </label> <br />
        <input type="text" name="CPF" value="{{ $cliente->CPF }}"> <br />

        <label for=""> Email </label> <br />
        <input type="text" name="Email" value="{{ $cliente->Email }}"> <br />

        <a href="{{ route('pagina_inicial') }}"><button class="voltar_cliente" >Voltar</button></a>

    </body>
    </html>