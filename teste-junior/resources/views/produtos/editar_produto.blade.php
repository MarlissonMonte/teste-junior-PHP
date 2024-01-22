<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Edição do Produto</title>
    <link rel="stylesheet" href="{{asset('assets/css/produtos/editar_produto.css')}}">
    </head>
    <body>      
            <form action="{{ route('editar_produto',['id_produto' => $produto->id_produto] ) }}" method="POST">
                @csrf

                <label for=""> NomeProduto </label> <br />
                <input type="text" name="NomeProduto"  value="{{ $produto->NomeProduto }}"> <br />

                <label for=""> CodBarras </label> <br />
                <input type="text" name="CodBarras" value="{{ $produto->CodBarras }}">  <br />

                <label for=""> ValorUnitario </label> <br />
                <input type="text" name="ValorUnitario"value="{{ $produto->ValorUnitario }}">  <br />

                <button class="salvar_edicao">Salvar Edição</button>
            </form>
            <a href="{{ route('pagina_inicial') }}"><button class="voltar_produto">Voltar</button></a>
    </body>
    </html>