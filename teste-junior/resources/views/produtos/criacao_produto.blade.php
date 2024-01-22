<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criacao Produto</title>
    <link rel="stylesheet" href="{{asset('assets/css/produtos/criacao_produto.css')}}">
 
</head>
<body>      
    <form action="{{ route('registrar_produto') }}" method="POST">
        @csrf
        
        <label for=""> NomeProduto </label> <br />
        <input type="text" name="NomeProduto" > <br />

        <label for=""> CodBarras </label> <br />
        <input type="text" name="CodBarras"> <br />

        <label for=""> ValorUnitario </label> <br />
        <input type="text" name="ValorUnitario"> <br />


        <button class="salvar_produto"> Salvar </button> 
        
    </form>

    <div class="button-container">
        <a href="{{ route('pagina_inicial') }}"><button class="voltar_produto">Voltar</button></a>
    </div>
</body>
</html>