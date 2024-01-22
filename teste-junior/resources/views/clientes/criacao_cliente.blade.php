<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cliente</title>
    <link rel="stylesheet" href="{{asset('assets/css/clientes/criacao_cliente.css')}}">

</head>
<body>      
    <form action="{{ route('registrar_cliente') }}" method="POST" >
        @csrf
        <label for=""> NomeCliente </label> <br />
        <input type="text" name="NomeCliente"> <br />

        <label for=""> CPF </label> <br />
        <input type="text" name="CPF" > <br />

        <label for=""> Email </label> <br />
        <input type="text" name="Email"> <br />

        <button class="salvar_criacao"> Salvar </button>
    </form>
    <a href="{{ route('pagina_inicial') }}"><button class="voltar_cliente" >Voltar</button></a>

</body>
</html>