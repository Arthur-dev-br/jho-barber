<?php

namespace App\Models;
use App\Models\CategoriaServicos;


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

     public function categoria_servicos(){
        return $this->belongsTo(CategoriaServicos::class, 'id_categoria_servicos', 'id_categoria_servicos');
    }
}