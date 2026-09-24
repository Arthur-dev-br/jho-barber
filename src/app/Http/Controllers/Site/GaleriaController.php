<?php

namespace App\Http\Controllers\Site;

Use App\Http\Controllers\Controller;
use App\Models\Galeria;

class GaleriaController extends Controller
{
    public function index(){

        $listaGaleria = Galeria::where('status_galeria', 'ATIVO')->get();

        return view('site.galeria.galeria',compact('listaGaleria'));
    }
}