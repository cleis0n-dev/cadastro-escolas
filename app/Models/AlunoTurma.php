<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoTurma extends Model
{
    use HasFactory;

    protected $table = 'aluno_turmas';
    protected $fillable = ['id','id_aluno','id_turma','id_escola'];
    public $timestamps = true;
}
