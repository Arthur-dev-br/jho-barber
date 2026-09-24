<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Servicos extends Model{

    protected $table = 'tbl_servicos';
    protected $primaryKey = 'id_servicos';

    public $timestamps = true;

    protected $fillable = [
        'titulo_servicos',
        'nome_servicos',
        'descricao_servicos',
        'valor_servicos', 
        'imagem_servicos',
        'status_servicos'
    ];
}