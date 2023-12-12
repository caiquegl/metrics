<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\Metrics\Calendario as CalendarioMetrics;
use App\Livewire\Pages\Metrics\StartPoints as StartPointsMetrics;
use App\Livewire\Pages\Metrics\Login as LoginMetrics;
use App\Livewire\Pages\Metrics\Workspace as WorkspaceMetrics;
use App\Livewire\Pages\Metrics\Performance as PerformanceMetrics;
use App\Livewire\Pages\Metrics\Produtos as ProdutosMetrics;
use App\Livewire\Pages\Metrics\Home as HomeMetrics;
use App\Livewire\Components\Metrics\SiderbarMobile as SiderbarMobileMetrics;

use App\Livewire\Pages\Living\Home as HomeLiving;
use App\Livewire\Pages\Living\Campaign as CampaignLiving;
use App\Livewire\Pages\Living\Clients as ClientsLiving;
use App\Livewire\Pages\Living\ClientsEdit as ClientsLivingEdit;
use App\Livewire\Pages\Living\Login as LoginLiving;
use App\Livewire\Pages\Living\Apps as AppsLiving;


use App\Http\Controllers\MailLayout as MailLiving;
use App\Http\Controllers\FileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', [MailLayout::class, 'show']);

Route::get('/storage/uploads/{filename}', [FileController::class, 'show']);


Route::prefix('/metrics')->group(function () {
    Route::get('/', LoginMetrics::class)->name('login');

    Route::middleware(['middleware' => 'auth:metrics'])->group(function () {
        Route::get('/home', HomeMetrics::class);

        Route::get('/workspace', WorkspaceMetrics::class);
        Route::get('/produtos', ProdutosMetrics::class);

        Route::get('/performance', PerformanceMetrics::class);

        Route::get('/calendario', CalendarioMetrics::class);

        Route::get('/start-points', StartPointsMetrics::class);
        Route::get('/component', SiderbarMobileMetrics::class);

        Route::get('/sidebar', function () {
            return view('layouts.sidebar');
        });

        Route::get('/chart', function () {
            return view('layouts.chart');
        });
        Route::get('/card', function () {
            return view('layouts.card');
        });
    });
});


Route::prefix('/living')->group(function () {
    Route::get('/', LoginLiving::class)->name('loginLiving');
    Route::get('/qrcode_scan/{uuid}', [MailLiving::class,'show'])->name('mailliving');
    Route::middleware(['middleware' => 'authMetrics:web'])->group(function () {
        Route::get('/login', LoginLiving::class)->name('loginl');

        Route::get('/apps', AppsLiving::class)->name('apps');

        Route::get('/home', HomeLiving::class)->name('home');

        Route::get('/campaign', CampaignLiving::class)->name('campaign');
        Route::get('/list-campaign', CampaignLiving::class)->name('list-campaign');
        Route::get('/edit-campaign/{id}', CampaignLiving::class)->name('edit-campaign');
        
        Route::get('/clients', ClientsLiving::class)->name('clients');
        Route::get('/edit-clients/{id}', ClientsLivingEdit::class)->name('edit-clients');
        Route::get('/new-clients', ClientsLiving::class)->name('new-clients');
    });
});
