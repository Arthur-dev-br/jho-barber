<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoriaServicos;
use App\Models\Servicos;

class CategoriaServicosController extends Controller
{
    // Listar todos as categorias cadastradas
    public function index()
    {
        $listaCategoriaServicos = CategoriaServicos::orderByDesc('id_categoria_servicos')->get();

        return view('admin.categoria_servicos.index', compact('listaCategoriaServicos'));
    }
}