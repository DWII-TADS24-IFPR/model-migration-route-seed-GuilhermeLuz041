<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Comprovante extends Model
{
    use SoftDeletes;

    protected $fillable = ['horas', 'atividade', 'categoria_id', 'aluno_id'];

    public function aluno(){
        return $this->belongsTo(Aluno::class);
    }
}
