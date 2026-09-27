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
        Schema::create('tbl_agendamento', function (Blueprint $table) {
            $table->integer('id_agendamento', true);
            $table->string('tutorial_agendamento');
            $table->string('imagem_agendamento', 65);
            $table->string('link_agendamento');
            $table->dateTime('data_criacao_agendamento')->useCurrent();
            $table->dateTime('data_atualizacao_agendamento')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_agendamento');
    }
};
