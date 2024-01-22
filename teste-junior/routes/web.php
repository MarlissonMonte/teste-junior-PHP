<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $successMessage = session('success');

    return view('pagina_inicial', ['successMessage' => $successMessage]);
})->name('pagina_inicial');


//Rotas Produtos 

Route::get('/produto/novo', 'App\Http\Controllers\ProdutosController@criacaoproduto')->name('criacao_produto');
Route::post('/produto/novo', 'App\Http\Controllers\ProdutosController@registrarProduto')->name('registrar_produto');

Route::get('/produto/ver/{id_produto}','App\Http\Controllers\ProdutosController@verProduto')->name('ver_produto');
Route::get('/produtos', 'App\Http\Controllers\ProdutosController@verTodosProdutos')->name('ver_todos_produtos');


Route::get('/produto/editar/{id_produto}','App\Http\Controllers\ProdutosController@editarProduto')->name('editar_produto');
Route::get('/produtos/editar', 'App\Http\Controllers\ProdutosController@editarTodosProdutos')->name('editar_todos_produtos');
Route::post('/produto/editar/{id_produto}','App\Http\Controllers\ProdutosController@salvarProduto')->name('editar_produto');

Route::get('/produto/excluir/{id_produto}','App\Http\Controllers\ProdutosController@excluirProduto');
Route::get('/produtos/excluir', 'App\Http\Controllers\ProdutosController@excluirTodosProdutos')->name('excluir_todos_produtos');
Route::post('/produto/excluir/{id_produto}','App\Http\Controllers\ProdutosController@salvarExclusao')->name('excluir_produto');

Route::post('/produtos/excluir-itens', 'App\Http\Controllers\ProdutosController@excluirItens')->name('excluir_itens');

//Rotas Clientes 

Route::get('/cliente/novo', 'App\Http\Controllers\ClientesController@criacaoCliente')->name('criacao_cliente');
Route::post('/cliente/novo', 'App\Http\Controllers\ClientesController@registrarCliente')->name('registrar_cliente');

Route::get('/cliente/ver/{id_client}','App\Http\Controllers\ClientesController@verCliente')->name('ver_cliente');
Route::get('/clientes', 'App\Http\Controllers\ClientesController@verTodosClientes')->name('ver_todos_clientes');


Route::get('/cliente/editar/{id_client}','App\Http\Controllers\ClientesController@editarCliente')->name('editar_cliente');  
Route::get('/cliente/editar', 'App\Http\Controllers\ClientesController@editarTodosClientes')->name('editar_todos_clientes');
Route::post('/cliente/editar/{id_client}','App\Http\Controllers\ClientesController@salvarCliente')->name('editar_cliente'); 

Route::get('/cliente/excluir/{id_client}','App\Http\Controllers\ClientesController@excluirCliente');
Route::get('/cliente/excluir', 'App\Http\Controllers\ClientesController@excluirTodosClientes')->name('excluir_todos_clientes');
Route::post('/cliente/excluir/{id_client}','App\Http\Controllers\ClientesController@salvarExclusaoCliente')->name('excluir_cliente');


//Rotas Pedidos

Route::get('/pedido/novo', 'App\Http\Controllers\PedidosController@criacaoPedido')->name('criacao_pedido');
Route::post('/pedido/novo', 'App\Http\Controllers\PedidosController@registrarPedido')->name('registrar_pedido');

Route::get('/pedido/ver/{id_pedido}','App\Http\Controllers\PedidosController@verPedido')->name('ver_pedido');
Route::get('/pedidos', 'App\Http\Controllers\PedidosController@verTodosPedidos')->name('ver_todos_pedidos');

Route::get('/pedido/editar/{id_pedido}','App\Http\Controllers\PedidosController@editarPedido')->name('editar_pedido');  
Route::get('/pedido/editar', 'App\Http\Controllers\PedidosController@editarTodosPedidos')->name('editar_todos_pedidos');
Route::post('/pedido/editar/{id_pedido}','App\Http\Controllers\PedidosController@salvarPedido')->name('editar_pedido'); 

Route::get('/pedido/excluir/{id_pedido}','App\Http\Controllers\PedidosController@excluirPedido');
Route::get('/pedido', 'App\Http\Controllers\PedidosController@excluirTodosPedidos')->name('excluir_todos_pedidos');
Route::post('/pedido/excluir/{id_pedido}','App\Http\Controllers\PedidosController@salvarExclusaoPedido')->name('excluir_pedido');







