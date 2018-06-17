<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{
    protected $table = 'platos';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}