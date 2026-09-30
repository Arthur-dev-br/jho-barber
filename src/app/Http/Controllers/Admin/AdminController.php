<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Servicos;
use App\Models\Categoria;
use App\Models\Venda;

class AdminController extends Controller{
   
    public function dashboard(){

        //Quantidade total de Clientes ATIVOS
        $qtdeClientes = Cliente::where('status_cliente', 'ATIVO')->count();

         //Quantidade total de Serviços ATIVOS
        $qtdeServicos = Servicos::where('status_servicos', 'ATIVO')->count();

        //Quantidade total de Produtos ATIVOS
        $qtdeProdutos = Produto::where('status_produto', 'ATIVO')->count();
        //Valor total de Vendas
        $valorTotalVendas = Venda::where('status_venda', 'FINALIZADA')->sum('valor_total_venda');


        // Produtos ativos por categoria ativa 
        $graficoCategorias = Categoria::where('status_categoria', 'ATIVO')
            ->withCount(['produtos' => function ($consulta) {
                $consulta->where('status_produto', 'ATIVO');
            }])
            ->orderByDesc('produtos_count')
            ->pluck('produtos_count', 'nome_categoria');


        return view('admin.dashboard', compact('qtdeClientes','qtdeServicos','qtdeProdutos','valorTotalVendas', 'graficoCategorias'));

    }

} // FIM DA CLASS