<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory {

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articulo::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->words(2, true),
            'artista'=>$this->faker->name(),
            'lanzamiento'=>$this->faker->date(),
            'descripcion'=>$this->faker->paragraph(),
            'cantidad'=>$this->faker->randomNumber(3, false),
            'precio'=>$this->faker->randomFloat(2, 10, 1500),
            'codigo'=>'codigo_preuba',
            'foto_ruta'=>'1.jpg',
            'foto'=>'1.jpg'
        ];
    }
}
