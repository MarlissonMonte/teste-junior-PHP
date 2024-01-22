<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Database\QueryException;


class ClientesController extends Controller{
    public function criacaoCliente(){
        return view("clientes.criacao_cliente");
    }
    public function registrarCliente(Request $request) {
        
        $cliente = Client::create([
            'NomeCliente' =>$request->NomeCliente,
            'CPF' =>$request->CPF,
            'Email' =>$request->Email, 

        ]);
        return redirect()->route('pagina_inicial')->with('success', "Cliente $cliente->NomeCliente criado com sucesso! 🎉");
    }
    public function verCliente($id){
        $cliente = Client::findOrFail($id);
        return view('clientes.visualizacao_cliente', ['cliente'=>$cliente]);
    }
    public function verTodosClientes() {
        $clientes = Client::all();
    
        if ($clientes->isEmpty()) {
            return view('clientes.sem_clientes');
        }
    
        return view('clientes.todos_clientes', ['clientes' => $clientes]);
    } 
    public function editarCliente($id) {
        $cliente = Client::findOrFail($id);
        return view('clientes.editar_cliente', ['cliente'=>$cliente]);
    } 
    public function editarTodosClientes() {
        $clientes = Client::all();
    
        if ($clientes->isEmpty()) {
            return view('clientes.sem_clientes');
        }
    
        return view('clientes.editar_todos_clientes', ['clientes' => $clientes]);
    }
    
    
    public function salvarCliente(Request $request, $id) {
        $cliente = Client::findOrFail($id);
        $cliente->update([
            'NomeCliente'=>$request->NomeCliente,
            'CPF' =>$request->CPF,
            'Email' =>$request->Email,
            ]);
            
        return redirect()->route('pagina_inicial')->with('success', "Cliente $cliente->NomeCliente foi atualizado com sucesso! 🎉");
    }
    public function excluirCliente($id) {
        $cliente = Client::findOrFail($id);
        return view('clientes.confimar_exclusao_cliente', ['cliente' => $cliente]);
    } 
    public function excluirTodosClientes() {
        $clientes = Client::all();
    
        if ($clientes->isEmpty()) {
            return view('clientes.sem_clientes');
        }
    
        return view('clientes.excluir_todos_clientes', ['clientes' => $clientes]);
    }  
    
    public function salvarExclusaoCliente($id) {
        try {
            $cliente = Client::findOrFail($id);
            $cliente->delete();
    
            return redirect()->route('pagina_inicial')->with('success', "Cliente $cliente->NomeCliente foi excluído com sucesso! 🎉");
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
    
            if ($errorCode == 1451) {
                return redirect()->back()->withErrors(['error' => 'Não é possível excluir este cliente, pois existem registros dependentes na tabela de pedidos.']);
            }
    
            return redirect()->back()->withErrors(['error' => 'Erro ao excluir o cliente.']);
        }
    }
}
