<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Oferta;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();
Route::resource('users',\App\Http\Controllers\UserController::class);
Route::resource('empresa',\App\Http\Controllers\EmpresaController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/politica-de-cookies', 'App\Http\Controllers\HomeController@cookies');
Route::get('/aviso-legal', 'App\Http\Controllers\HomeController@avisolegal');
Route::get('/politica-de-privacidad', 'App\Http\Controllers\HomeController@politicaprivacidad');

Route::get('admin' , [App\Http\Controllers\HomeController::class, 'admin']);
Route::get('/ofertas', [App\Http\Controllers\AdminController::class, 'getOfertas']);
Route::get('/ofertas/disponibles', [App\Http\Controllers\RepartidorController::class, 'ofertasDisponibles']);

Route::get('login/google', 'App\Http\Controllers\socialLogin@redirectGoogle');
Route::get('login/google/callback', 'App\Http\Controllers\socialLogin@CallbackGoogle');

Route::get('/download', function () {
    $users = User::all();
    return response()->xml(['users' => $users->toArray()]);
});

Route::get('/download/ofertas', function () {
    $ofertas = Oferta::all();
    return response()->xml(['ofertas' => $ofertas->toArray()]);
});