<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    public $table = "genres";
    public $timestamps = "false";
    public $guarded = [];

    public function pelicula() {
        return $this->hasMany("App\Pelicula","genre_id");
    }
}
