<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Client;
use App\Http\Controllers\ClientesController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientesControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testCriacaoCliente()
    {
        $response = $this->get(route('criacao_cliente'));

        $response->assertStatus(200);
        $response->assertViewIs('clientes.criacao_cliente');
    }

    public function testRegistrarCliente()
    {
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);

        $data = [
            'NomeCliente' => 'Cliente Teste',
            'CPF' => '12345678901',
            'Email' => 'cliente@teste.com',
        ];

        $response = $this->post(route('registrar_cliente'), $data);

        $response->assertStatus(302); 
        $this->assertDatabaseHas('clients', $data);
    }

    public function testVerCliente()
    {
        $cliente = Client::factory()->create();

        $response = $this->get(route('ver_cliente', ['id_client' => $cliente->id_client]));

        $response->assertStatus(200);
        $response->assertViewIs('clientes.visualizacao_cliente');
        $response->assertViewHas('cliente', $cliente);
    }

    public function testVerTodosClientes()
    {
        $clientes = Client::factory()->count(3)->create();

        $response = $this->get(route('ver_todos_clientes'));

        $response->assertStatus(200);
        $response->assertViewIs('clientes.todos_clientes');
        $response->assertViewHas('clientes', $clientes);
    }

    public function testEditarCliente()
    {
        $cliente = Client::factory()->create();

        $response = $this->get(route('editar_cliente', ['id_client' => $cliente->id_client]));

        $response->assertStatus(200);
        $response->assertViewIs('clientes.editar_cliente');
        $response->assertViewHas('cliente', $cliente);
    }

    public function testEditarTodosClientes()
    {
        $clientes = Client::factory()->count(3)->create();

        $response = $this->get(route('editar_todos_clientes'));

        $response->assertStatus(200);
        $response->assertViewIs('clientes.editar_todos_clientes');
        $response->assertViewHas('clientes', $clientes);
    }

    public function testExcluirCliente()
    {
        $cliente = Client::factory()->create();

        $response = $this->get(route('excluir_cliente', ['id_client' => $cliente->id_client]));

        $response->assertStatus(200);
        $response->assertViewIs('clientes.confimar_exclusao_cliente');
        $response->assertViewHas('cliente', $cliente);
    }

    public function testExcluirTodosClientes()
    {
        $clientes = Client::factory()->count(3)->create();

        $response = $this->get(route('excluir_todos_clientes'));

        $response->assertStatus(200);
        $response->assertViewIs('clientes.excluir_todos_clientes');
        $response->assertViewHas('clientes', $clientes);
    }

}
