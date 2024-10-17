<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Illuminate\Support\Str;

class seedClientes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clientes = 15;
        for ($i=0; $i < $clientes; $i++) { 
            Cliente::create([
                'nome'=>Str::random(10),
                'CPF'=>Str::random(20),
                'email'=>Str::random(15),
                'telefone'=>Str::random(10)
            ]);
        }        
    }
}
