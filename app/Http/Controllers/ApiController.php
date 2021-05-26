<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Comunidade;
use App\Models\Provincia;
use App\Models\Municipio;
use App\Models\Poblacione;
use App\Models\Cpostale;
use App\Models\Calle;

class ApiController extends Controller
{
    
    /**
     * Funcion que me devuelve los usuarios y los roles para mostrarlos en el crud de admin.
     *
     * @return void
     */
    public function getUsers(){
        return ["users" => User::all(), "rols" => Role::all()];
    }

    /**
     * Funcion que elimina el usuario seleccionado en el crud de admin.
     *
     * @param [int] $id
     * @return void
     */
    public function deleteUser($id){
        User::destroy($id);
        return redirect()->action('App\Http\Controllers\UserController@index');
    }

    /**
     * Función que me devuelve las provincias de la comunidad pasada por parámetro.
     *
     * @param [int] $id
     * @param Request $request
     * @return void
     */
    public function getProvincias($id, Request $request){
        $param = $request->id;
        return view('location.provincias',["provincias" => Provincia::where('CCOM',$id)->get(), "param" => $param]);
    }

    /**
     * Función que me devuelve los municipios de la província pasada por parámetro.
     *
     * @param [int] $id
     * @param Request $request
     * @return void
     */
    public function getMunicipios($id, Request $request){
        $param = $request->id;
        return view('location.municipios',["municipios" => Municipio::where('CPRO',$id)->get(), "param" => $param]);
    }

    /**
     * Funcion que me devuelve las poblaciones del municipio pasado por parámetro.
     *
     * @param [int] $id
     * @param Request $request
     * @return void
     */
    public function getPoblaciones($id, Request $request){
        $param = $request->id;

        $idmin = ($id * 10000000);
        $idmax = ($id * 10000000) + 9999999;
        return view('location.poblaciones',["poblaciones" => Poblacione::where("CPOB", ">=" , $idmin)->where('CPOB', '<=', $idmax)->get(), "param" => $param]);
    }

    /**
     * Función que me devuelve los codigos postales de una poblacion pasada por parámetro.
     *
     * @param [int] $id
     * @param Request $request
     * @return void
     */
    public function getPostales($id, Request $request){
        $param = $request->id;
    
        return view('location.cpostals',["cpostales" => Cpostale::where("CPOB",$id)->get(), "param" => $param]);
    }

    /**
     * Función que me devuelve las calles que pertenecen al codigo postal pasado por parámetro.
     *
     * @param [int] $id
     * @param Request $request
     * @return void
     */
    public function getCalles($id, Request $request){
        $param = $request->id;

        return view('location.calles',["calles" => Calle::where("IDPostal",$id)->get(), "param" => $param]);
    }

}