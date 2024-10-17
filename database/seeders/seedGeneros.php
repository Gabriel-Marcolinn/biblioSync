<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genero;
use Illuminate\Support\Str;

class seedGeneros extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generos = 15;
        for ($i=0; $i < $generos; $i++) { 
            Genero::create([
                'descricao'=>Str::random(10)
            ]);
        }        
    }
}
