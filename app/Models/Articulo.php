<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model {

    use HasFactory;

    protected $fillable = [
                            'nombre',
                            'artista',
                            'codigo', 
                            'lanzamiento',
                            'descripcion',
                            'cantidad',
                            'precio',
                            'foto_ruta',
                            'foto'
                        ];

    public function generos() {

        return $this->belongsToMany(Genero::class);

    }

    public function getNombreArtistaAttribute() {
        return $this->nombre . ' - ' . $this->artista;
    }

    public function setCodigoAttribute($codigo) {
        return $this->attributes['codigo'] = $codigo[0] . strtolower($this->attributes['nombre'][0]) . strtolower($this->attributes['artista'][0]) . time();
    }

}
