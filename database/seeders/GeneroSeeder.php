<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genero::create([
            'nombre_genero'=>'Pop'
        ]);
        Genero::create([
            'nombre_genero'=>'Country'
        ]);
        Genero::create([
            'nombre_genero'=>'Rock'
        ]);
        Genero::create([
            'nombre_genero'=>'Electro'
        ]);
        Genero::create([
            'nombre_genero'=>'Folk'
        ]);
        Genero::create([
            'nombre_genero'=>'Indie'
        ]);
        Genero::create([
            'nombre_genero'=>'Clasica'
        ]);
        Genero::create([
            'nombre_genero'=>'Jazz'
        ]);
        Genero::create([
            'nombre_genero'=>'R&B'
        ]);
        Genero::create([
            'nombre_genero'=>'Metal'
        ]);
    }
}
