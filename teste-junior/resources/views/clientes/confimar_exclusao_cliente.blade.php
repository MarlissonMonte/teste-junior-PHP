<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclusao do Cleinte</title>
    <link rel="stylesheet" href="{{asset('assets/css/clientes/confimar_exclusao_cliente.css')}}">

    </head>
    <body>      
                @if($errors->any())
                <div class="alert-alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('excluir_cliente',['id_client' => $cliente->id_client] ) }}" method="POST">
                @csrf
                <label for=""> Deseja mesmo excluir o Cliente a seguir ? </label> <br />
                <input type="text" name="NomeCliente" value="{{ $cliente->NomeCliente }}"> <br />


                <button class="confirmar_exclusao" > Sim </button>
            </form>
            <a href="{{ route('pagina_inicial') }}"><button class="voltar_cliente">Voltar</button></a>

    </body>
    </html>