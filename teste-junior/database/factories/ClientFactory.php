<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition(): array
    {
        return [
            'NomeCliente'    => $this->faker->firstName(),
            'CPF'      => $this->faker->unique()->numerify('###########'), 
            'Email'  => $this->faker->unique()->freeEmail(), 
        ];
    }
}

