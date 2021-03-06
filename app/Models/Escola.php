<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;

    protected $table = 'escolas';
    protected $fillable =[
        'id','nome','endereço'
    ];
    public $timestamps = true;
}
