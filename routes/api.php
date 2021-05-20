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

Route::get('/user', function(){
    return ["users" => User::all(), "rols" => Role::all()];
});

Route::get('/user/{id}/delete' , function($id,Request $request){
    User::destroy($id);
    return redirect()->action('App\Http\Controllers\UserController@index');
});

Route::get('/comunidad/{id}/provincias', function($id, Request $request){
    $param = $request->id;
    return view('location.provincias',["provincias" => Provincia::where('CCOM',$id)->get(), "param" => $param]);
});

Route::get('/provincia/{id}/municipios', function($id, Request $request){
    $param = $request->id;
    return view('location.municipios',["municipios" => Municipio::where('CPRO',$id)->get(), "param" => $param]);
});

Route::get('/municipio/{id}/poblaciones', function($id, Request $request){
    $param = $request->id;

    $idmin = ($id * 10000000);
    $idmax = ($id * 10000000) + 9999999;
    return view('location.poblaciones',["poblaciones" => Poblacione::where("CPOB", ">=" , $idmin)->where('CPOB', '<=', $idmax)->get(), "param" => $param]);
});

Route::get('/poblacion/{id}/cpostales', function($id, Request $request){
    $param = $request->id;
    return view('location.cpostals',["cpostales" => Cpostale::where("CPOB",$id)->get(), "param" => $param]);
});

Route::get('/cpostal/{id}/calles', function($id, Request $request){
    $param = $request->id;

    return view('location.calles',["calles" => Calle::where("IDPostal",$id)->get(), "param" => $param]);
});
