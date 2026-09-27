<?php

namespace App\Http\Controllers\Site;

Use App\Http\Controllers\Controller;
use App\Models\Sobre;

class SobreController extends Controller
{
    public function sobre(){
        return view('site.sobre.sobre');
    }
}