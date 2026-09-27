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
        Schema::create('tbl_historia_jho', function (Blueprint $table) {
            $table->integer('id_historia_jho', true);
            $table->string('imagem_historia_jho', 45);
            $table->text('sobre_historia_jho');
            $table->string('status_historia_jho', 10);
            $table->dateTime('data_criacao_historia_jho')->useCurrent();
            $table->dateTime('data_atualizacao_historia_jho')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_historia_jho');
    }
};
