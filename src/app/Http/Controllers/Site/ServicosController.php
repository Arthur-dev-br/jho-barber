<?php

namespace App\Http\Controllers\Site;

Use App\Http\Controllers\Controller;
use App\Models\CategoriaServicos;
use App\Models\Servicos;

class ServicosController extends Controller
{
    public function servicos(?int $idCategoriaServicos = null){
        $listaCategoriaServicos = CategoriaServicos::where('status_categoria_servicos', 'ATIVO')
        ->orderBy('nome_categoria_servicos')
        ->get();

        // SE NENHUMA CATEGORIA ESTIVER NA URL, (SE NÃO CLICOU EM NENHUM BOTÃO)
        if($idCategoriaServicos == null){
            $categoriaSelecionada = $listaCategoriaServicos->first();
        }
        else
        {
            $categoriaSelecionada = $listaCategoriaServicos->firstWhere('id_categoria_servicos', $idCategoriaServicos);

        }


        // caso não tenha a categoria

        abort_if($categoriaSelecionada === null, 404, 'Categoria não encontrada');

        // buscar somente os produtos relacionado a categoria



        $listaServicos = Servicos::where('status_servicos', 'ATIVO')
        ->orderBy('nome_servicos')
        ->get();

        $servicos = Servicos::query()
        ->where('id_categoria_servicos', $categoriaSelecionada->id_categoria_servicos)
        ->where('status_servicos', 'ATIVO')
        ->orderBy('nome_servicos')
        ->get();

        

        return view('site.servicos.servicos', compact('listaCategoriaServicos', 'listaServicos', 'servicos', 'categoriaSelecionada'));
    }
}