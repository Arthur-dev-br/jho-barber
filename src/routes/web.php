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
use App\Http\Controllers\Admin\CategoriaServicosController;
use App\Http\Controllers\Admin\ClienteController as AdminClienteController;
use App\Http\Controllers\Admin\ProdutoController as AdminProdutoController;
use App\Http\Controllers\Admin\DepoimentoController;
use App\Http\Controllers\Admin\GaleriaController as AdminGaleriaController;
use App\Http\Controllers\Admin\MensagemController;
use App\Http\Controllers\Admin\ServicosController as AdminServicosController;
use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');
 
Route::get('/produto', [ProdutoController::class, 'produto'])->name('produto');
Route::get('/produto/categoria/{idCategoria}', [ProdutoController::class, 'produto'])->name('produto.categoria');
 
Route::get('/galeria', [GaleriaController::class, 'galeria'])->name('galeria');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');


Route::get('/servicos', [ServicosController::class,'servicos'])->name('servicos');
Route::get('/servicos/categoriaservicos/{idCategoriaServicos}', [ServicosController::class, 'servicos'])->name('servicos.categoria_servicos');

// Formulários do site (limite de 5 envios por minuto para evitar spam)
Route::post('/contato', [ContatoController::class, 'store'])->middleware('throttle:5,1,contato')->name('contato.store');

 /*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
|
| O middleware guest permite acessar estas rotas somente quando o usuário NÃO está autenticado.
|
*/

// Rotas públicas de autenticação
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.auth');
});

// Área administrativa (só logado)
Route::middleware('auth')->group(function () {

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Atalho: /dashboard redireciona para o painel
    Route::redirect('/dashboard', '/admin/dashboard');

    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

        // CRUD BANNER
        Route::get('/banner', [BannerController::class, 'index'])->name('admin.banner.index');
        Route::post('/banner', [BannerController::class, 'store'])->name('admin.banner.store');
      //  Route::get('/banner/{id}/editar', [BannerController::class, 'edit'])->name('admin.banner.edit');
        Route::put('/banner/{id}', [BannerController::class, 'update'])->name('admin.banner.update');
        Route::patch('/banner/{id}/status', [BannerController::class, 'status'])->name('admin.banner.status');

        // CRUD GALERIA
        Route::get('/galeria', [AdminGaleriaController::class, 'index'])->name('admin.galeria.index');
        Route::post('/galeria', [GaleriaController::class, 'store'])->name('admin.galeria.store');
        Route::put('/galeria/{id}', [GaleriaController::class, 'update'])->name('admin.galeria.update');
        Route::patch('/galeria/{id}', [GaleriaController::class, 'status'])->name('admin.galeria.status');

        // CRUD PRODUTO
        Route::get('/produto', [AdminProdutoController::class, 'index'])->name('admin.produto.index');

        // CRUD CLIENTE
        Route::get('/cliente', [AdminClienteController::class, 'index'])->name('admin.cliente.index');
        Route::post('/cliente', [AdminClienteController::class, 'store'])->name('admin.cliente.store');
        Route::put('/cliente/{id}', [AdminClienteController::class, 'update'])->name('admin.cliente.update');
        Route::patch('/cliente/{id}', [AdminClienteController::class, 'status'])->name('admin.cliente.status');

        // MENSAGENS
        Route::get('/mensagem', [MensagemController::class, 'index'])->name('admin.mensagem.index');
        Route::patch('/mensagem/{id}', [MensagemController::class, 'status'])->name('admin.mensagem.status');

        // Demais listagens
        Route::get('/categoria', [CategoriaController::class, 'index'])->name('admin.categoria.index');
        Route::get('/depoimento', [DepoimentoController::class, 'index'])->name('admin.depoimento.index');
        Route::get('/servicos', [AdminServicosController::class, 'index'])->name('admin.servicos.index');
        Route::get('/categoria_servicos', [CategoriaServicosController::class, 'index'])->name('admin.categoria_servicos.index');
        Route::get('/usuario', [UsuarioController::class, 'index'])->name('admin.usuario.index');
    });
});