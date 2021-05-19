<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;

class RepartidorController extends Controller
{
    public function ofertasDisponibles(){

        $ofertasdisponibles = Oferta::where('estado', 'pendiente')->get();

        return view('repartidor.ofertasdisponibles' , array("ofertasdispo" => $ofertasdisponibles));
    }
}
