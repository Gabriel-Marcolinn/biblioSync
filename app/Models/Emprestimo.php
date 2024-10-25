<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    protected $table = 'emprestimos';
    protected $fillable = ['data_retirada','data_devolucao','cliente_id','multa','atraso'];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function itemEmprestimo()
    {
        return $this->hasMany(ItemEmprestimo::class, 'emprestimo_id');
    }
}
