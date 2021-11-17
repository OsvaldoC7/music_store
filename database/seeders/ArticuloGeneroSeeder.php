<?php

namespace Database\Seeders;

use App\Models\ArticuloGenero;
use Illuminate\Database\Seeder;

class ArticuloGeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticuloGenero::create([
            'articulo_id'=>1,
            'genero_id'=>rand(1, 10)
        ]);
        ArticuloGenero::create([
            'articulo_id'=>2,
            'genero_id'=>rand(1, 10)
        ]);
        ArticuloGenero::create([
            'articulo_id'=>3,
            'genero_id'=>rand(1, 10)
        ]);
        ArticuloGenero::create([
            'articulo_id'=>4,
            'genero_id'=>rand(1, 10)
        ]);
        ArticuloGenero::create([
            'articulo_id'=>5,
            'genero_id'=>rand(1, 10)
        ]);
        ArticuloGenero::create([
            'articulo_id'=>6,
            'genero_id'=>rand(1, 10)
        ]);
        ArticuloGenero::create([
            'articulo_id'=>7,
            'genero_id'=>rand(1, 10)
        ]);
        ArticuloGenero::create([
            'articulo_id'=>8,
            'genero_id'=>rand(1, 10)
        ]);
        ArticuloGenero::create([
            'articulo_id'=>9,
            'genero_id'=>rand(1, 10)
        ]);
        ArticuloGenero::create([
            'articulo_id'=>10,
            'genero_id'=>rand(1, 10)
        ]);
    }
}
