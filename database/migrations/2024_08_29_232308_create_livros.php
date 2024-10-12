<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->date('data_lancamento');
            $table->string('autor');
            $table->string('localizacao');
            $table->bigInteger('genero');
            $table->bigInteger('editora');
            $table->timestamps();

            $table->foreign('genero')->references('id')->on('generos');
            $table->foreign('editora')->references('id')->on('editoras');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
