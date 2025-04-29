<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Curso extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'sigla', 'total_horas', 'nivel_id'];

    public function alunos(){
        return $this->hasMany(Aluno::class);
    }

    public function nivel(){
        return $this->belongsTo(Nivel::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
