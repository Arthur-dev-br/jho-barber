<?php

namespace App\Models;
use App\Models\Categoria;

use Illuminate\Database\Eloquent\Model;

Class Produto extends Model{

    protected $table = 'tbl_produto';
    protected $primaryKey = 'id_produto';
    public $timestamps = false;

    protected $fillable = [
        'nome_produto',
        'id_categoria',
        'imagem_produto',
        'preco_produto',
        'descricao_produto',
        'status_produto',
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria', 'id_categoria');
    }
}