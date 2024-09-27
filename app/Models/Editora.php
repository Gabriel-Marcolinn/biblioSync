<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    //trazer as informações do banco
    //tabela
    protected $table = 'editoras';
    //campos
    protected $fillable = ['nome','CNPJ'];
}
