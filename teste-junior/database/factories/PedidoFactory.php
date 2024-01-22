<?php

namespace Database\Factories;

use App\Models\Pedido as Pedido;
use App\Models\Client as Client;
use App\Models\Produto as Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    protected $model = Pedido::class;

    public function definition(): array
    {
        $client_id = Client::pluck('id_client')->toArray();
        $produto_id = Produto::pluck('id_produto')->toArray();

        return [
            'StatusPedido'    => $this->faker->randomElement(['pedente', 'pago', 'cancelado']), 
            'Dtpedido'        => $this->faker->dateTimeBetween('-2 year', 'now'),
            'Quantidade'      => $this->faker->numberBetween(1, 10),

            'id_client'       => $this->faker->randomElement($client_id),
            'id_produto'      => $this->faker->randomElement($produto_id),
        ];
    }
}