<?php

namespace Database\Seeders;

use App\Models\Articulo;
use Illuminate\Database\Seeder;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Articulo::create([
            'nombre'=>'Ultraviolence',
            'artista'=>'Lana Del Rey',
            'lanzamiento'=>'2014-06-14',
            'descripcion'=>'Ultraviolence es el tercer álbum de estudio de la cantante y compositora estadounidense Lana Del Rey y el segundo de manera oficial, lanzado el 13 de junio de 2014 en Alemania, los Países Bajos y Suiza mientras que en Norteamérica fue el 17 de ese mismo mes a través del sello discográfico Polydor Records e Interscope Records.',
            'cantidad'=>959,
            'precio'=>799,
            'foto_ruta'=>'Covers/Ultraviolence.jpg',
            'foto'=>'Subida por mi',
            'codigo'=>'Subido por mi'
        ]);
        Articulo::create([
            'nombre'=>'Future Nostalgia',
            'artista'=>'Dua Lipa',
            'lanzamiento'=>'2020-03-27',
            'descripcion'=>'Future Nostalgia es el segundo álbum de estudio de la cantante británica Dua Lipa. Fue lanzado el 27 de marzo de 2020 por el sello discográfico Warner Records.',
            'cantidad'=>789,
            'precio'=>599,
            'foto_ruta'=>'Covers/FutureNostalgia.jpg',
            'foto'=>'Subida por mi',
            'codigo'=>'Subido por mi'
        ]);
        Articulo::create([
            'nombre'=>'SOUR',
            'artista'=>'Olivia Rodrigo',
            'lanzamiento'=>'2021-05-21',
            'descripcion'=>'Sour (estilizado en mayúsculas; en español, Agrio) es el primer álbum de estudio de la cantautora estadounidense Olivia Rodrigo, publicado el 21 de mayo de 2021 a través de la discográfica Geffen Records.',
            'cantidad'=>849,
            'precio'=>500,
            'foto_ruta'=>'Covers/SOUR.jpg',
            'foto'=>'Subida por mi',
            'codigo'=>'Subido por mi'
        ]);
        Articulo::create([
            'nombre'=>'1989',
            'artista'=>'Taylor Swift',
            'lanzamiento'=>'2014-10-27',
            'descripcion'=>'1989 es el quinto álbum de estudio de la cantante y compositora estadounidense Taylor Swift, lanzado el 27 de octubre de 2014 a través del sello discográfico Big Machine Records.',
            'cantidad'=>1989,
            'precio'=>1989,
            'foto_ruta'=>'Covers/1989.jpg',
            'foto'=>'Subida por mi',
            'codigo'=>'Subido por mi'
        ]);
        Articulo::create([
            'nombre'=>'Lover',
            'artista'=>'Taylor Swift',
            'lanzamiento'=>'2019-08-23',
            'descripcion'=>'Lover es el séptimo álbum de estudio de la cantante y compositora estadounidense Taylor Swift. Fue lanzado el 23 de agosto de 2019 a través de Republic Records.',
            'cantidad'=>1989,
            'precio'=>1989,
            'foto_ruta'=>'Covers/Lover.jpg',
            'foto'=>'Subida por mi',
            'codigo'=>'Subido por mi'
        ]);
        Articulo::create([
            'nombre'=>"folklore",
            'artista'=>'Taylor Swift',
            'lanzamiento'=>'2020-07-24',
            'descripcion'=>"Folklore es el octavo álbum de estudio de la cantautora estadounidense Taylor Swift. Fue un álbum sorpresa, lanzado a través de Republic Records el 24 de julio de 2020, once meses después de su predecesor, Lover (2019).",
            'cantidad'=>1989,
            'precio'=>1989,
            'foto_ruta'=>'Covers/folklore.jpg',
            'foto'=>'Subida por mi',
            'codigo'=>'Subido por mi'
        ]);
        Articulo::create([
            'nombre'=>"Red (Taylor's Version)",
            'artista'=>'Taylor Swift',
            'lanzamiento'=>'2021-11-12',
            'descripcion'=>"Red (Taylor's Version) es el segundo álbum regrabado de la cantante y compositora estadounidense Taylor Swift, lanzado el 12 de noviembre de 2021 a través de Republic Records.",
            'cantidad'=>1989,
            'precio'=>1989,
            'foto_ruta'=>'Covers/RedTV.jpg',
            'foto'=>'Subida por mi',
            'codigo'=>'Subido por mi'
        ]);
    }
}
