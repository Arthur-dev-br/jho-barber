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
        Schema::create('tbl_produto', function (Blueprint $table) {
            $table->integer('id_produto', true);
            $table->string('nome_produto', 45);
            $table->integer('id_categoria');
            $table->string('imagem_produto', 45);
            $table->double('preco_produto')->nullable();
            $table->string('descricao_produto', 100);
            $table->string('status_produto', 10);
            $table->dateTime('data_criacao_produto')->useCurrent();
            $table->dateTime('data_atualizacao_produto')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_produto');
    }
};
