<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ItemEmprestimo extends Model
{
    protected $table = 'item_emprestimos';
    protected $fillable = ['quantidade','livro_id','emprestimo_id'];

    public function livro()
    {
        return $this->belongsTo(Livro::class);
    }
}
