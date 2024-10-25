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
        Schema::create('item_emprestimos', function (Blueprint $table) {
            $table->id();
            $table->integer('quantidade');
            $table->bigInteger('livro_id');
            $table->bigInteger('emprestimo_id');
            $table->timestamps();

            $table->foreign('livro_id')->references('id')->on('livros');
            $table->foreign('emprestimo_id')->references('id')->on('emprestimos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_emprestimos');
    }
};
