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
        Schema::create('tbl_horario_e_local', function (Blueprint $table) {
            $table->integer('id_horario_e_local', true);
            $table->string('dia_horario_e_local', 20)->nullable();
            $table->time('hora_abertura_horario_e_local')->nullable();
            $table->time('hora_fechamento_horario_e_local')->nullable();
            $table->text('localizacao_maps_horario_e_local');
            $table->dateTime('data_criacao_horario_e_local')->useCurrent();
            $table->dateTime('data_atualizacao_depoimento')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_horario_e_local');
    }
};
