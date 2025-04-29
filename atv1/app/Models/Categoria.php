<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Categoria extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'maximo_horas', 'curso_id'];

    public function cursos(){
        return $this->hasMany(Curso::class);
    }
}
