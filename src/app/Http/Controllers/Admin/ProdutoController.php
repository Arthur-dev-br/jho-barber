<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // Listar todos os produtos cadastrados
    public function index()
    {
        $listaProduto = Produto::orderByDesc('id_produto')->get();

        return view('admin.produto.index', compact('listaProduto'));
    }
}