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
        Schema::create('tbl_depoimento', function (Blueprint $table) {
            $table->integer('id_depoimento', true);
            $table->integer('id_cliente')->nullable();
            $table->text('descricao_depoimento');
            $table->integer('nota_depoimento');
            $table->string('servico_depoimento', 50)->nullable();
            $table->string('link_depoimento');
            $table->string('status_depoimento', 10);
            $table->dateTime('data_criacao_depoimento')->useCurrent();
            $table->dateTime('data_atualizacao_depoimento')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_depoimento');
    }
};
