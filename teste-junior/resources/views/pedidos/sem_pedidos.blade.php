<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/pedidos/sem_pedidos.css') }}">
    <title>Nenhum Pedido Disponível</title>
</head>
<body>      
    <h1>Nenhum Pedido Disponível &#128549; </h1>
    <p>Desculpe, mas no momento não há nenhum pedido registrado. Volte para registrar </p>
    <a href="{{ route('pagina_inicial') }}"><button class="voltar_visualizacao">Voltar</button></a>
</body>
</html>
