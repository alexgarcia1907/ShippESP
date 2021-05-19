<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin(){
        return view('admin.index');
    }

    public function avisolegal(){
        return view('legal.aviso');
    }

    public function politicaprivacidad(){
        return view('legal.politicaprivacidad');
    }

    public function cookies(){
        return view('legal.cookies');
    }

}
