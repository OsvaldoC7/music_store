<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model {

    use HasFactory;
    //use SoftDeletes;

    protected $fillable = [
        'user_id',
        'articulo_id',
        'comentario'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function articulo() {
        return $this->belongsTo(Articulo::class);
    }

}
