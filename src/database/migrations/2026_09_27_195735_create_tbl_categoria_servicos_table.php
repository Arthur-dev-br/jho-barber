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
        Schema::create('tbl_categoria_servicos', function (Blueprint $table) {
            $table->integer('id_categoria_servicos', true);
            $table->string('nome_categoria_servicos', 45);
            $table->string('status_categoria_servicos', 10);
            $table->dateTime('data_criacao_categoria_servicos')->useCurrent();
            $table->dateTime('data_atualizacao_categoria_servicos')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_categoria_servicos');
    }
};
