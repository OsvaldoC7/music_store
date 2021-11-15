<?php

namespace Database\Seeders;

use App\Models\Articulo;
use App\Models\Genero;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        
        User::create([
            'name'=>'Admin',
            'email'=>'admin.admin@admin.admin',
            'password'=>Hash::make('123456789'),
            'utype'=>'ADM'
        ]);

        User::create([
            'name'=>'Osvaldo',
            'email'=>'osva.6cruz@gmail.com',
            'password'=>Hash::make('123456789')
        ]);

        User::factory(10)->create();
        Articulo::factory(10)->create();

        /* Creando los generos */
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
