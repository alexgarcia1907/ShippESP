<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;
use App\Models\User;
use App\Models\Comunidade;
use Illuminate\Support\Facades\Auth;

class EmpresaController extends Controller
{

    /**
     * Apply Middleware except show view
     */
    public function __construct()
    {
        $this->middleware(['auth', 'empresa']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comunidades = Comunidade::all();
        return view('empresa.index' , array('comunidades' => $comunidades));
    }

    public function showOfertas()
    {
        dd(Auth::user()->id);
        $ofertas = Oferta::where('empresa_id' , Auth::user()->id)->get();
        dd($ofertas);
        return view('empresa.ofertas' , array('ofertas' => $ofertas));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $oferta = new Oferta;
        $validated = $this->validateOferta($request);

        $oferta->desc = $validated["desc"];
        $oferta->origen_id = $validated["calle"];
        $oferta->destino_id = $validated["calledest"];
        $oferta->empresa_id = Auth::user()->id;

        $oferta->save();
        return redirect('/empresa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail(Auth::id());
        $ofertas = $user->ofertasempresa;

        return view('empresa.ofertas' , array('ofertas' => $ofertas));
        dd($ofertas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validateOferta(Request $request)
    {
        return $validated = $request->validate([
            "desc" => "required",
            "comunidad" => "required",
            "comunidaddest" => "required",
            "provincia" => "required",
            "provinciadest" => "required",
            "municipio" => "required",
            "municipiodest" => "required",
            "poblacion" => "required",
            "poblaciondest" => "required",
            "cpostal" => "required",
            "cpostaldest" => "required",
            "calle" => "required",
            "calledest" => "required",
            "calle" => "required",
            "calledest" => "required"
        ]);
    }
}
