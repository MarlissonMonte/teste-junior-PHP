<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    protected $model = Produto::class;

    public function definition(): array
    {
        return [
            'NomeProduto'    => $this->faker->unique()->word(),
            'CodBarras'      => $this->faker->unique()->numerify('##########'),
            'ValorUnitario'  => $this->faker->randomFloat(2, 1, 1000), 
        ];
    }
}
