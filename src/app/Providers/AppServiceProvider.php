<?php

namespace App\Providers;

use App\Models\Depoimento;
use App\Models\Contato;
use App\Models\Categoria;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // carregar um submenu da categoria
        View::composer('partials.site.topo', function ($view) {
            
            $categoriaMenu = Categoria::query()
            ->where('status_categoria', 'ATIVO')
            ->orderBy('nome_categoria')
            ->get();

            $view->with('categoriaMenu', $categoriaMenu);

            
        });

        //Topo do admin: mensagens novas e notificações
        View::composer('partials.admin.topo', function ($view){

            //Mensagens do site ainda não lidas (as 3 mais recentes no menu)
            $qtdeMensagensNovas = Contato::where('status_contato', 'NOVO')->count();

            $mensagensNovas = Contato::where('status_contato', 'NOVO')
            ->orderByDesc('data_criacao_contato')
            ->limit(3)
            ->get();

            //Notificações: o que está esperando alguma ação (some quando é resolvido)
            $notificacoes = [];

            if ($qtdeMensagensNovas > 0) {
                $notificacoes[] = [
                    'icone' => 'bi-envelope-fill',
                    'texto' => $qtdeMensagensNovas . ($qtdeMensagensNovas === 1 ? ' mensagem nova' : ' mensagens novas'),
                    'quando' => Contato::where('status_contato', 'NOVO')->max('data_criacao_contato'),
                    'link' => route('admin.mensagem.index', ['status' => 'novo']),
                ];
            }

             $qtdeDepoimentos = Depoimento::where('status_depoimento', 'PENDENTE')->count();

            if ($qtdeDepoimentos > 0) {
                $notificacoes[] = [
                    'icone' => 'bi-chat-quote-fill',
                    'texto' => $qtdeDepoimentos . ($qtdeDepoimentos === 1 ? ' depoimento para aprovar' : ' depoimentos para aprovar'),
                    'quando' => Depoimento::where('status_depoimento', 'PENDENTE')->max('data_criacao_depoimento'),
                    'link' => route('admin.depoimento.index'),
                ];
            }

            //Número do sino = soma de tudo que está pendente
            $qtdeNotificacoes = $qtdeMensagensNovas + $qtdeDepoimentos;

            $view->with(compact('qtdeMensagensNovas', 'mensagensNovas', 'notificacoes', 'qtdeNotificacoes'));

        });
        
    }
}
