<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ProductComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Models\Articulo;
use App\Models\Genero;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('plantilla.index');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// GitHub
Route::get('/auth/github/redirect', function () {
    return Socialite::driver('github')->redirect();
});

// GitHub
Route::get('/auth/github/callback', function () {
    $githubUser = Socialite::driver('github')->user();
    
    $user = User::firstOrCreate(
        [
            'provider_id'=>$githubUser->getId(),
        ],
        [
            'email'=>$githubUser->getEmail(),
            'name'=>$githubUser->getName(),
            'password'=>Hash::make($githubUser->getName()),
            'provider_id'=>$githubUser->getId(),
        ],
    );

    auth()->login($user, true);

    return redirect('articulos');
    
});

// User dashboard
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

// Adimin dashboard
Route::middleware(['auth:sanctum', 'verified', 'authAdmin'])->group(function() {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});

// Articulos y comentarios
Route::resource('articulos', 'App\Http\Controllers\ArticuloController')->middleware('auth');
Route::resource('comentarios', 'App\Http\Controllers\ComentarioController')->middleware('auth');

// Filtrar por genero
Route::get('articulos/genero/{genero}', function(Genero $genero){
    $generos = Genero::all();
    $articulos = $genero->articulos;
    
    return view('livewire.shop-component', compact('articulos','generos'));
})->name('articulos.articulos_genero');

// Inicio
Route::get('/', function() {
    $articulos = Articulo::all();
    return view('livewire.home-component', compact('articulos'));
    
})->name('index');
