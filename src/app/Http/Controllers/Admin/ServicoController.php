<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Servico;

class ServicoController extends Controller
{
   
    public function index()
    {
        $listaServico =Servico::orderByDesc('id_servicos')->get();

        return view('admin.servico.index', compact('listaServico'));
    }
}