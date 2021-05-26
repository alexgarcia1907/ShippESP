<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Role;
use App\Models\Provincia;
use App\Models\Municipio;
use App\Models\Poblacione;
use App\Models\Cpostale;
use App\Models\Calle;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user', 'App\Http\Controllers\ApiController@getUsers');
Route::get('/user/{id}/delete' , 'App\Http\Controllers\ApiController@deleteUser');
Route::get('/comunidad/{id}/provincias', 'App\Http\Controllers\ApiController@getProvincias');
Route::get('/provincia/{id}/municipios', 'App\Http\Controllers\ApiController@getMunicipios');
Route::get('/municipio/{id}/poblaciones', 'App\Http\Controllers\ApiController@getPoblaciones');
Route::get('/poblacion/{id}/cpostales', 'App\Http\Controllers\ApiController@getPostales');
Route::get('/cpostal/{id}/calles', 'App\Http\Controllers\ApiController@getCalles');
