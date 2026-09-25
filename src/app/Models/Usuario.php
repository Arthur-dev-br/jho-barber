<?php

namespace App\Models;

use illuminate\Database\Eloquent\Model;

Class Usuario extends Model{

protected $table = 'tbl_usuarios';
protected $primaryKey = 'id_usuario';

public $timestamps = true;

const CREATE_AT = 'data_criacao_usuarios';
const UPDATE_AT = 'data_atualizacao_usuarios';

// fillable é os campos q pode alterar 
protected $fillable = [
    'nome_usuarios',
    'email_usuarios',
    'senha_usuarios',
    'foto_usuarios',
    'nivel_usuarios',
    'status_usuarios',
];

}
