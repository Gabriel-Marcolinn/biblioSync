<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Editora;
use Illuminate\Support\Str;
class seedEditoras extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $editoras = 15;
        for ($i=0; $i < $editoras; $i++) { 
            Editora::create([
                'nome'=>Str::random(10),
                'CNPJ'=>Str::random(20)
            ]);
        }        
    }
}
