<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="{{asset('assets/css/pagina_inicial.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    
    @if ($successMessage)
        <div style="color: green;">{{ $successMessage }}</div>
    @endif

    <header>
        <h1>Bem-vindo</h1>
        <p class="header_p">Escolha a opção desejada!</p>
    </header>


// CRUD COMPRA
    <section id="todos-crud-section"> 
    <section id="crud-produto-section">
        <label for="crud-produto-options" class="crud_produto_text"> <i class="bi bi-bag-check"></i> CRUD PRODUTO</label>
        <ul id="crud-produto-options-list">
            <a href="{{ route('criacao_produto') }}"><button class="criar_produto"> <i class="bi bi-pencil-square"></i> Criar Produto</button></a>
            <a href="{{ route('ver_todos_produtos')}}"><button class="ver_produto"> <i class="bi bi-eye-fill"></i> Ver Produto</button></a>
            <a href="{{ route('editar_todos_produtos') }}"><button class="editar_produto"> <i class="bi bi-pencil-square"></i> Editar Produto</button></a>
            <a href="{{ route('excluir_todos_produtos') }}"><button class="excluir_produto"> <i class="bi bi-trash3-fill"></i>  Excluir Produto </button></a>
        </ul>
</section>


// CRUD CLIENTE
    <section id="crud-cliente-section"> 
        <label for="crud-cliente-options" class="crud_cliente_text" > <i class="bi bi-person-add"></i> CRUD CLIENTE</label>
        <ul id="crud-cliente-options-list">
            <a href="{{ route('criacao_cliente') }}"><button class="criar_cliente"> <i class="bi bi-pencil-square"></i> Criar Cliente</button></a>
            <a href="{{ route('ver_todos_clientes') }}"><button class="ver_cliente"> <i class="bi bi-eye-fill"></i> Ver Cliente</button></a>
            <a href="{{ route('editar_todos_clientes') }}"><button class="editar_cliente"> <i class="bi bi-pencil-square"></i> Editar Cliente</button></a>
            <a href="{{ route('excluir_todos_clientes') }}"><button class="excluir_cliente"> <i class="bi bi-trash3-fill"></i> Excluir Cliente</button></a>



//CRUD PEDIDO
</section>
        
    <section id="crud-pedidos-compra-section">
        <label for="crud-pedidos-compra-options" class="crud_pedido_text"> <i class="bi bi-cart-check"></i> CRUD DE PEDIDO DE COMPRA</label>
        <ul id="crud-pedidos-options-list">
            <a href="{{ route('criacao_pedido') }}"><button class="criar_pedido"> <i class="bi bi-pencil-square"></i> Criar pedido</button></a>
            <a href="{{ route('ver_todos_pedidos') }}"><button class="ver_pedido"> <i class="bi bi-eye-fill"></i> Ver Pedido</button></a>
            <a href="{{ route('editar_todos_pedidos') }}"><button class="editar_pedido"> <i class="bi bi-pencil-square"></i> Editar Pedido</button></a>
            <a href="{{ route('excluir_todos_pedidos') }}"><button class="excluir_pedido"> <i class="bi bi-trash3-fill"></i> Excluir Pedido</button></a>


</section>
</section>
    
</body>
</html>
