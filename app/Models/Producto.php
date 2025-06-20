<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $with = ['Categoria'];
    public function Categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function Medida(){
        return $this->belongsTo(Medida::class);
    }
    public function Marca(){
        return $this->belongsTo(Marca::class);
    }

}
