<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;
use App\Models\User;
use App\Models\Comunidade;
use Illuminate\Support\Facades\Auth;

class RepartidorController extends Controller
{
    public function ofertasDisponibles(){

        $ofertasdisponibles = Oferta::where('estado', 'pendiente')->get();

        return view('repartidor.ofertasdisponibles' , array("ofertasdispo" => $ofertasdisponibles));
    }

    public function aceptarOferta($id){

        $oferta = Oferta::findOrFail($id);
        $oferta->repartidor_id = Auth::user()->id;
        $oferta->estado = 'reparto';
        $oferta->save();

        return redirect('/ofertas/disponibles');
    }

    public function show($id)
    {
        $user = User::findOrFail(Auth::id());
        $ofertas = $user->ofertasrepartidor;

        return view('repartidor.ofertasasignadas' , array('ofertas' => $ofertas));
    } 

    public function entregarOferta($id){
        $oferta = Oferta::findOrFail($id);
        $oferta->estado = 'entregado';

        $oferta->save();
        return redirect('/ofertas/disponibles');
    }


}
