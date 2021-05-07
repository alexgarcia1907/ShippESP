<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Role;

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
    //return User::all();
});

Route::get('/user/{id}/delete' , function($id,Request $request){
    User::destroy($id);
    return redirect()->action('App\Http\Controllers\UserController@index');
});
