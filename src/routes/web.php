<?php

use App\Http\Controllers\Site\ProdutoController;
use App\Http\Controllers\Site\ContatoController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\SobreController;
use App\Http\Controllers\Site\GaleriaController;
use App\Http\Controllers\Site\ServicosController;


use App\Http\Controllers\Admin\AdminController;


use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ClienteController as AdminClienteController;
use App\Http\Controllers\Admin\ProdutoController as AdminProdutoController;
use App\Http\Controllers\Admin\DepoimentoController;
use App\Http\Controllers\Admin\GaleriaController as AdminGaleriaController;
use App\Http\Controllers\Admin\CategoriaServicosController;
use App\Http\Controllers\Admin\ServicosController as AdminServicosController;
use App\Http\Controllers\Admin\UsuarioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');

Route::get('/produto', [ProdutoController::class, 'produto'])->name('produto');
Route::get('/produto/categoria/{idCategoria}', [ProdutoController::class, 'produto'])->name('produto.categoria');

Route::get('/galeria', [GaleriaController::class, 'galeria'])->name('galeria');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

Route::get('/servicos', [ServicosController::class, 'servicos'])->name('servicos');




//Estrutura para a área administrativa
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');



    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    // CRUD BANNER
    Route::get('/banner', [BannerController::class, 'index'])->name('admin.banner.index'); //Lista Banner
    Route::post('/banner', [BannerController::class, 'store'])->name('admin.banner.store');// Cadastrar Banner
    Route::get('/banner/{id}/editar', [BannerController::class, 'edit'])->name('admin.banner.edit');//Abrir o form de Editar banner
    //Quer que você mude tudo, senão dará erro
    Route::put('/banner/{id}', [BannerController::class, 'update'])->name('admin.banner.update');//Atualizar Banner 
    //Permite você mudar só um valor
    Route::patch('/banner/{id}/status', [BannerController::class, 'status'])->name('admin.banner.status');//Ativar o Desativar Banner

    // CRUD GALERIA
   Route::get('admin/galeria', [AdminGaleriaController::class, 'index'])->name('admin.galeria.index'); //Lista Galeria

    // CRUD PRODUTO
    Route::get('admin/produto', [AdminProdutoController::class, 'index'])->name('admin.produto.index');//Lista Produto

    
    /*
    |--------------------------------------------------------------------------
    | CRUD CLIENTE
    |--------------------------------------------------------------------------
    */

    //Lista Cliente
    Route::get('admin/cliente', [AdminClienteController::class, 'index'])->name('admin.cliente.index');

    // Cadastrar cliente
    Route::post('/cliente', [AdminClienteController::class, 'store'])
            ->name('admin.cliente.store');

    // Editar cliente
    // Route::get('/cliente/{id}/editar', [ClienteController::class, 'edit'])
    //     ->name('admin.cliente.edit');

    // Atualizar cliente
    Route::put('/cliente/{id}', [AdminClienteController::class, 'update'])
            ->name('admin.cliente.update');

    // Ativar / desativar cliente
    Route::patch('/cliente/{id}', [AdminClienteController::class, 'status'])
            ->name('admin.cliente.status');



    // CRUD LINHA DO TEMPO

    // CRUD NEWSLETTER

    // CRUD CATEGORIA


Route::get('/admin/categoria',[CategoriaController::class, 'index'])->name('admin.categoria.index');

Route::get('/admin/cliente',[AdminClienteController::class, 'index'])->name('admin.cliente.index');

Route::get('/admin/depoimento',[DepoimentoController::class, 'index'])->name('admin.depoimento.index');

Route::get('/admin/servicos', [AdminServicosController::class, 'index'])->name('admin.servicos.index');

Route::get('/admin/categoria_servicos',[CategoriaServicosController::class, 'index'])->name('admin.categoria_servicos.index');

Route::get('/usuario', [UsuarioController::class, 'index']) ->name('admin.usuario.index');


