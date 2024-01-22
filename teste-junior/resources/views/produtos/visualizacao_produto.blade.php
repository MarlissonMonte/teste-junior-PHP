<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/produtos/visualizacao_produto.css')}}">
    <title>Formulario Visualização do Produto</title>
    </head>
    <body>      

            <label for=""> NomeProduto </label> <br />
            <input type="text" name="NomeProduto"  value="{{ $produto->NomeProduto }}"> <br />

            <label for=""> CodBarras </label> <br />
            <input type="text" name="CodBarras" value="{{ $produto->CodBarras }}">  <br />

            <label for=""> ValorUnitario </label> <br />
            <input type="text" name="ValorUnitario"value="{{ $produto->ValorUnitario }}">  <br />


            <a href="{{ route('pagina_inicial') }}"><button class="voltar_visualizacao">Voltar</button></a>

            
    </body>
    </html>