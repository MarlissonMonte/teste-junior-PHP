<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/produtos/excluir_todos_produtos.css') }}">
    <title>Todos os Produtos</title>
</head>
<body>      

    <h1>Todos os Produtos</h1>
    <h2>Selecione qual produto deseja excluir!</h2>

    <div class="box_search" style="margin-bottom: 20px;">
    <input type="search" style="width: 100%;" placeholder="pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
</svg>
        </button>
    </div>

    @foreach ($produtos as $produto)
        <div class="produto-item">
            <p># {{ $produto->id_produto }}</p>
            <input type="checkbox" class="selecionar-produto" data-id="{{ $produto->id_produto }}">
            <a href="{{ route('excluir_produto', ['id_produto' => $produto->id_produto]) }}">
                <h2>{{ $produto->NomeProduto }}</h2>
            </a>
            <p>Código de Barras: {{ $produto->CodBarras }}</p>
            <p>Valor Unitário: {{ $produto->ValorUnitario }}</p>
        </div>
    @endforeach

    <a href="{{ route('pagina_inicial') }}"><button class="voltar_visualizacao">Voltar</button></a>
    <button onclick="excluirSelecionados()" class="excluir_selecionados">Excluir Selecionados</button>
    <script src="{{ asset('assets/js/produtos/excluir_todos_produtos.js') }}"></script>
</body>
</html>
