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
        Schema::create('tbl_servicos', function (Blueprint $table) {
            $table->integer('id_servicos', true);
            $table->integer('id_categoria_servicos')->nullable()->index('fk_servicos_categoria');
            $table->string('nome_servicos', 50);
            $table->string('descricao_servicos');
            $table->double('valor_servicos');
            $table->string('imagem_servicos', 45);
            $table->string('status_servicos', 10);
            $table->dateTime('data_criacao_servicos')->useCurrent();
            $table->dateTime('data_atualizacao_servicos')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_servicos');
    }
};
