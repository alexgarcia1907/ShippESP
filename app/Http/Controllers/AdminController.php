<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;

class AdminController extends Controller
{
    
    /**
     * Funcion que devuelve todas las ofertas para el crud de admin.
     *
     * @return void
     */
    public function getOfertas(){

        $ofertas = Oferta::all();

        return view('admin.ofertas', array('ofertas' => $ofertas));
    }

}
