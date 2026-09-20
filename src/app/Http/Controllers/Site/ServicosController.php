<?php

namespace App\Http\Controllers\Site;

Use App\Http\Controllers\Controller;

class ServicosController extends Controller
{
    public function sobre(){
        return view('site.servicos.servicos');
    }
}