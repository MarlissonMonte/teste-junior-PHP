<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller{
    public function criacaoproduto() {
        return view('produtos.criacao_produto');
    }
    public function registrarProduto(Request $request) {
        
        $produto = Produto::create([
            'NomeProduto' =>$request->NomeProduto,
            'CodBarras' =>$request->CodBarras,
            'ValorUnitario' =>$request->ValorUnitario, 
            //'Quantidade' =>$request-> Quantidade

        ]);
        return redirect()->route('pagina_inicial')->with('success', "Produto $produto->NomeProduto criado com sucesso! 🎉");
    }
    public function verProduto($id){
        $produto = Produto::findOrFail($id);
        return view('produtos.visualizacao_produto', ['produto'=>$produto]);
    }
    public function verTodosProdutos() {
        $produtos = Produto::all();
    
        if ($produtos->isEmpty()) {
            return view('produtos.sem_produtos');
        }
    
        return view('produtos.todos_produtos', ['produtos' => $produtos]);
    }    
    
    
    public function editarProduto($id) {
        $produto = Produto::findOrFail($id);
        return view('produtos.editar_produto', ['produto'=>$produto]);
        
    }
    public function editarTodosProdutos() {
        $produtos = Produto::all();
    
        if ($produtos->isEmpty()) {
            return view('produtos.sem_produtos');
        }
    
        return view('produtos.editar_todos_produtos', ['produtos' => $produtos]);
    }
    public function salvarProduto(Request $request, $id) {
        $produto = Produto::findOrFail($id);
        $produto->update([
            'NomeProduto' =>$request->NomeProduto,
            'CodBarras' =>$request->CodBarras,
            'ValorUnitario' =>$request->ValorUnitario,
            //'Quantidade' =>$request-> Quantidade
            ]);
            
        return redirect()->route('pagina_inicial')->with('success', "Produto $produto->NomeProduto editado com sucesso! 🎉");
    }
    public function excluirProduto($id) {
        $produto = Produto::findOrFail($id);
        return view('produtos.confimar_exclusao', ['produto' => $produto]);
    }   
    public function excluirTodosProdutos() {
        $produtos = Produto::all();
    
        if ($produtos->isEmpty()) {
            return view('produtos.sem_produtos');
        }
    
        return view('produtos.excluir_todos_produtos', ['produtos' => $produtos]);
    }
    public function salvarExclusao($id) {
        $produto = Produto::findOrFail($id);
    
        $numPedidosRelacionados = \Illuminate\Support\Facades\DB::table('pedidos')->where('id_produto', $produto->id_produto)->count();

        if ($numPedidosRelacionados > 0) {
            return redirect()->back()->with('error', "Não é possível excluir o produto $produto->NomeProduto porque existem pedidos relacionados a ele.");
        }

        $produto->delete();

        return redirect()->route('pagina_inicial')->with('success', "Produto $produto->NomeProduto foi excluído com sucesso! 🎉");
    }
    public function excluirItens(Request $request)
    {
        $ids = $request->input('ids');

        try {
            // Excluir os produtos com os IDs fornecidos
            Produto::whereIn('id_produto', $ids)->delete();

            return response()->json(['success' => true, 'message' => 'Itens excluídos com sucesso']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Erro ao excluir itens']);
        }
    }
    
}
