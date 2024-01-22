<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusao do Produto</title>
    <link rel="stylesheet" href="{{asset('assets/css/produtos/confirmar_exclusao.css')}}">
    </head>
    <body>   
            @if(session('error'))
                <div class="alert-alert-danger">
                    {{ session('error') }}
                </div>
            @endif   
            <form action="{{ route('excluir_produto',['id_produto' => $produto->id_produto] ) }}" method="POST">
                @csrf
                <label for=""> Deseja mesmo excluir o Produto a seguir ? </label> <br />
                <input type="text" name="NumeroPedido" value="{{ $produto->id_produto }}"> <br />


                <button class="confirmar_exclusao_produto"> Sim </button>
            </form>
            <a href="{{ route('pagina_inicial') }}"><button class="voltar_produto">Voltar</button></a>
    </body>
    </html>