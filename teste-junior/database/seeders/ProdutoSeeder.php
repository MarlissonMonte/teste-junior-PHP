<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
         // Excluir todos os registros
        Produto::query()->delete();

        Produto::factory(10)->create();
    }
}
