<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Pedido;
use App\Models\Client;
use Illuminate\Http\Request;

class PedidosControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testCriacaoPedido()
    {
        $response = $this->get(route('criacao_pedido'));
    
        $response->assertStatus(200);
        $response->assertViewIs('pedidos.criacao_pedido');
    }
 
}