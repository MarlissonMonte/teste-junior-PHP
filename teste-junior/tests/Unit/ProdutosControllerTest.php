<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Produto;
use App\Http\Controllers\ProdutosController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\Request;

class ProdutosControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testRegistrarProduto()
    {
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

        $data = [
            'NomeProduto' => 'Produto Teste',
            'CodBarras' => '123456789',
            'ValorUnitario' => 10.99,
        ];

        $response = $this->post(route('registrar_produto'), $data);

        $response->assertStatus(302); 
        $this->assertDatabaseHas('produtos', $data); 
    }
    public function testCriacaoProduto()
    {
        $response = $this->get('/produto/novo');

        $response->assertStatus(200)
            ->assertViewIs('produtos.criacao_produto');
    }

    public function testVerProduto()
    {
        $produto = Produto::factory()->create(); 

        $response = $this->get(route('ver_produto', ['id_produto' => $produto->id_produto]));

        $response->assertStatus(200);
        $response->assertViewIs('produtos.visualizacao_produto');
        $response->assertViewHas('produto', $produto);
    }
    public function testEditarProduto()
    {
    $produto = Produto::factory()->create();

    $response = $this->get(route('editar_produto', ['id_produto' => $produto->id_produto]));
    $response->assertStatus(200);
    $response->assertViewIs('produtos.editar_produto');

    $response->assertSee($produto->NomeProduto);
    $response->assertSee($produto->CodBarras);
    $response->assertSee($produto->ValorUnitario);
}
    public function testVerTodosProdutos()
    {
        Produto::factory(5)->create();

        $response = $this->get('/produtos');

        $response->assertStatus(200)
            ->assertViewIs('produtos.todos_produtos');
    }
    public function testExcluirProduto()
    {
        $produto = Produto::factory()->create();

        $response = $this->get("/produto/excluir/{$produto->id_produto}");

        $response->assertStatus(200)
            ->assertViewIs('produtos.confimar_exclusao')
            ->assertViewHas('produto', $produto);
    }


}
