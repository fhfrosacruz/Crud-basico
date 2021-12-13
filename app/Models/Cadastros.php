<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastros extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable =['nome', 'cpf','descricao', 'valor'];
}
