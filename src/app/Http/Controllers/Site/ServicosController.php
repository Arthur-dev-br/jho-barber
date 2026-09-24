<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Servicos;

class ServicosController extends Controller
{
    public function servicos()
    {
        $servicos = Servicos::where('status_servicos', 'ATIVO')
            ->orderByDesc('id_servicos')
            ->get();

        return view('site.servicos.servicos', compact('servicos'));
    }
}