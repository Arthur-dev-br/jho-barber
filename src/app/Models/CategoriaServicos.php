<?php

namespace App\Models;
use App\Models\Servicos;
use Illuminate\Database\Eloquent\Model;

class CategoriaServicos extends Model{

    protected $table = 'tbl_categoria_servicos';

    protected $primaryKey = 'id_categoria_servicos';


    const  CREATED_AT = 'data_criacao_categoria_servicos';
    const  UPDATED_AT = 'data_atualizacao_categoria_servicos';

    protected $fillable = [
        'nome_categoria_servicos',
        'status_categoria_servicos'
    ];

    // Um Cliente pode possuir muitos depoimentos.

    // hasMany -> tem muitos
    // Belongsto -> pertence a

    public function servicos(){
        return $this->hasMany(Servicos::class, 'id_categoria_servicos', 'id_categoria_servicos');
    }


}