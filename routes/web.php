

<?php
use Illuminate\Http\Controllers\Client;
use Illuminate\Http\Controllers\User;
use Illuminate\Http\Controllers\PieceProduct;
use Illuminate\Http\Controllers\OrderService;
use Illuminate\Http\Controllers\Service;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->get('/abaut', function () {
        return Inertia::render('Abaut');
})->name('Abaut');


Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');


Route::get('/clients', [App\Http\Controllers\ClientController::class, 'index'])->name('clients.index');
Route::get('/client/create', [App\Http\Controllers\ClientController::class, 'create'])->name('client.create');
Route::post('/client', [App\Http\Controllers\ClientController::class, 'store'])->name('client.store');

Route::get('/pieces', [App\Http\Controllers\PieceProductController::class, 'index'])->name('pieces.index');


Route::get('/order', [App\Http\Controllers\OrderServiceController::class, 'index'])->name('order.index');

Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service.index');
