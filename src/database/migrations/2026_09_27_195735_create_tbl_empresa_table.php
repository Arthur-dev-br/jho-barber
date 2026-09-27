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
        Schema::create('tbl_empresa', function (Blueprint $table) {
            $table->integer('id_empresa', true);
            $table->string('telefone_empresa', 14);
            $table->string('endereco_empresa', 65);
            $table->string('email_empresa', 80);
            $table->string('redes_sociais_empresa', 50);
            $table->string('whatsapp_empresa', 50);
            $table->string('facebook_empresa', 50);
            $table->string('instagram_empresa', 50);
            $table->string('status_empresa_info', 10);
            $table->dateTime('data_criacao_empresa_info')->useCurrent();
            $table->dateTime('data_atualizacao_empresa_info')->useCurrentOnUpdate()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_empresa');
    }
};
