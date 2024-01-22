<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use Carbon\Carbon;


class PedidosController extends Controller{
    
    public function criacaoPedido(){
        return view("pedidos.criacao_pedido");
    }
    public function registrarPedido(Request $request) {
        
        if ($request->filled('id_produto')) {
            $pedido = Pedido::create([
                'StatusPedido' => $request->StatusPedido,
                'Quantidade' => $request->Quantidade,
                'Dtpedido' => Carbon::now(),
                'id_produto' => $request->id_produto,
                'id_client' => $request->id_client,
            ]);
    
            return redirect()->route('pagina_inicial')->with('success', "Pedido $pedido->id_pedido criado com sucesso! 🎉");
        } else {
            
            return redirect()->back()->with('error', "O campo 'id_produto' não pode ser nulo.");
        }
    }
    public function verPedido($id){
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.visualizacao_pedido', ['pedido'=>$pedido]);
    }
    public function verTodosPedidos() {
        $pedidos = Pedido::all();
    
        if ($pedidos->isEmpty()) {
            return view('pedidos.sem_pedidos');
        }
    
        return view('pedidos.todos_pedidos', ['pedidos' => $pedidos]);
    } 
    public function editarPedido($id) {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.editar_pedido', ['pedido'=>$pedido]);
    }
    
    public function editarTodosPedidos() {
        $pedidos = Pedido::all();
    
        if ($pedidos->isEmpty()) {
            return view('pedidos.sem_pedidos');
        }
    
        return view('pedidos.editar_todos_pedidos', ['pedidos' => $pedidos]);
    }
    public function salvarPedido(Request $request, $id) {
        $pedido = Pedido::findOrFail($id);
        $pedido->update([
            //'NumeroPedido'=>$request->NumeroPedido,
            'StatusPedido' =>$request->StatusPedido,
            'Quantidade' =>$request-> Quantidade
            ]);
            
        return redirect()->route('pagina_inicial')->with('success', "Pedido $pedido->id_pedido foi atualizado com sucesso! 🎉");
    }
    public function excluirPedido($id) {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.confimar_exclusao_pedido', ['pedido' => $pedido]);
    }   
    public function excluirTodosPedidos() {
        $pedidos = Pedido::all();
    
        if ($pedidos->isEmpty()) {
            return view('pedidos.sem_pedidos');
        }
    
        return view('pedidos.excluir_todos_pedidos', ['pedidos' => $pedidos]);
    }
    public function salvarExclusaoPedido($id) {
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

    return redirect()->route('pagina_inicial')->with('success', "Pedido $pedido->id foi excluido com sucesso! 🎉");
    }
}

