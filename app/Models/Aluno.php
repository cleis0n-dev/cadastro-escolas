<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $table='alunos';
    protected $fillable = ['nome','telefone','email','dt_nascimento','genero'];
    public $timestamps = true;
}
