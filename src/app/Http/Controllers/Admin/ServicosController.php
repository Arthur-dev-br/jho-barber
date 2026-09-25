<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Servicos;

class ServicosController extends Controller
{
   
    public function index()
    {
        
        $listaServicos = Servicos::with('categoria_servicos')
            ->orderByDesc('servicos')
            ->get();


        return view('admin.servicos.index', compact('listaServicos'));
    }
}