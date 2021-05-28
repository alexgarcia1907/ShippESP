<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;
use App\Models\User;
use App\Models\Comunidade;
use Illuminate\Support\Facades\Auth;

class RepartidorController extends Controller
{
    /**
     * Funcion que devuelve las ofertas disponibles para mostrar al repartidor.
     *
     * @return void
     */
    public function ofertasDisponibles(){

        $ofertasdisponibles = Oferta::where('estado', 'pendiente')->get();

        return view('repartidor.ofertasdisponibles' , array("ofertasdispo" => $ofertasdisponibles));
    }

    /**
     * Funcion que se ejcuta al aceptar una oferta como repartidor.
     *
     * @param [int] $id
     * @return void
     */
    public function aceptarOferta($id){

        $oferta = Oferta::findOrFail($id);
        $oferta->repartidor_id = Auth::user()->id;
        $oferta->estado = 'reparto';
        $oferta->save();

        return redirect('/ofertas/disponibles');
    }

    /**
     * Funcion que muestra las ofertas del repartidor.
     *
     * @param [type] $id
     * @return void
     */
    public function show($id)
    {
        $user = User::findOrFail(Auth::id());
        $ofertas = $user->ofertasrepartidor;

        return view('repartidor.ofertasasignadas' , array('ofertas' => $ofertas));
    } 

    /**
     * Funcion que se ejecuta al pasar una oferta a entregada.
     *
     * @param [type] $id
     * @return void
     */
    public function entregarOferta($id){
        $user = User::findOrFail(Auth::id());

        $oferta = Oferta::findOrFail($id);
        $oferta->estado = 'entregado';

        $oferta->save();
        
        return redirect('/repartidor/{id}')->with('id',$user);
    }


}
