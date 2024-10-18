<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $table = 'livros';
    protected $fillable = ['titulo','data_lancamento','autor','localizacao','genero_id','editora_id','sinopse'];

    public function editora(){
        return $this->belongsTo(Editora::class);
    }

    public function genero(){
        return $this->belongsTo(Genero::class);
    }
}
