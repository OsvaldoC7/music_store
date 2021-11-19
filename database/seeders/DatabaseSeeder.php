<?php

namespace Database\Seeders;

use App\Models\Articulo;
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
            'utype'=>'ADM',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name'=>'Osvaldo',
            'email'=>'osva.cruz@gmail.com',
            'password'=>Hash::make('123456789'),
            'email_verified_at' => now(),
        ]);

        User::factory(10)->create();

        /* Creando los generos */
        $this->call([
            GeneroSeeder::class
        ]);

        /* Creando articulos */
        Articulo::factory(10)->create();
        $this->call([
            ArticuloSeeder::class
        ]);

        /* Creadondo ArticuloGenero tabla pivote */
        $this->call([
            ArticuloGeneroSeeder::class
        ]);

    }
}
