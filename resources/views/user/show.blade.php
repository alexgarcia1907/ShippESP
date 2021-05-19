@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="border-dark border-bottom pb-3 my-4">{{ __("Mi Cuenta") }}</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin:auto;">
            <div class="row well well-white mini-profile-widget bootdey.com p-4">
                <div class="col-md-4 mt-3">
                    <div class="image-container">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="avatar img-responsive" alt="avatar">
                    </div>  
                </div>
                <div class="col-md-8 justify-content-center mt-3"> 
                    <div class="details">
                        <h4 class="font-weight-bold" style="text-transform: capitalize;">{{Auth::user()->name}}</h4>
                        <hr> 
                        <div><h5 class="font-weight-bold">Rol: <span class="font-weight-normal" style="text-transform: capitalize;">{{Auth::user()->role->desc}}</span></h5></div>
                        <div><h5 class="font-weight-bold">Email: <span class="font-weight-normal">{{Auth::user()->email}}</span></h5></div>
                        <div><h5 class="font-weight-bold">Cuenta activa des de: <span class="font-weight-normal">{{Auth::user()->created_at->format('d/m/Y')}}</span></h5></div>

                        <p class="mt-2"> 
                            <a href="javascript:void(0);" class="btn btn-blue">
                                <i class="fa fa-facebook fa-fw"></i>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-info">
                                <i class="fa fa-twitter fa-fw"></i>
                            </a>
                            <a href="javascript:void(0);" class="btn btn-red">
                                <i class="fa fa-google-plus fa-fw"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>

@stop