<?php

namespace App\Http\Controllers\Site;

Use App\Http\Controllers\Controller;

class ServicosController extends Controller
{
    public function servicos(){
        return view('site.servicos.servicos');
    }
}