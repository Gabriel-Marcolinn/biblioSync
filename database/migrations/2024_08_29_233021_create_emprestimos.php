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
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->date('data_retirada')->nullable();
            $table->date('data_devolucao')->nullable();
            $table->double('multa')->nullable();
            $table->integer('atraso')->nullable();
            $table->double('multaDiaria');
            $table->bigInteger('cliente');
            $table->timestamps();

            $table->foreign('cliente')->references('id')->on('clientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprestimos');
    }
};
