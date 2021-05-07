@extends('admin.index')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="border-dark border-bottom pb-3 my-4">{{ __("Editar") }} {{$user->name}}</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card my-0 text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link link-light" href="/users">{{ __("Usuarios") }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true" href="#">{{ __("Editar") }}</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    
                            <form class="ml-5 mr-5" method="POST" action="{{action('App\Http\Controllers\UserController@update', $user->id)}}" enctype = "multipart/form-data">
                            {{ method_field('PUT')}}
                            {{ csrf_field() }}
                            <br>
                                <div class="form-group row">
                                    <label for="id" class="col-sm-2 col-form-label">Número ID:</label>
                                    <div class="col-sm-10">
                                    <input readonly value="{{$user->id}}" type="text" name="id" id="id" class="text-center form-control @error('id') is-invalid @enderror">
                                        @error('id')<div id="tascaFeedback" class="invalid-feedback">El id no pot estar buit!</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="id" class="col-sm-2 col-form-label">Nombre:</label>
                                    <div class="col-sm-10">
                                    <input value="{{$user->name}}" type="text" name="name" id="name" class="text-center form-control @error('name') is-invalid @enderror">
                                    @error('name')<div id="tascaFeedback" class="invalid-feedback">El nom no pot estar buit!</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="id" class="col-sm-2 col-form-label">Email:</label>
                                    <div class="col-sm-10">
                                    <input value="{{$user->email}}" type="text" name="email" id="email" class="text-center form-control @error('email') is-invalid @enderror">
                                    @error('email')<div id="tascaFeedback" class="invalid-feedback">email no correcte!</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="border-dark border-bottom pb-1 my-4 col-12"> 
                                        <label for="rol">Rol del usuario</label>
                                    </div>
                                    
                                    @foreach($roles as $rol)
                                    <div class="form-check">
                                        <input @if(($user->role->desc) == ($rol->desc)) checked @endif class="form-check-input" type="radio" name="role" id="exampleRadios1" value={{$rol->id}}>
                                        <label style="text-transform:capitalize!important;" class="form-check-label" for="exampleRadios1">
                                        {{$rol->desc}}                               
                                        </label>
                                    </div>
                                    @endforeach
            
                                </div>
                                <br>
                                <div class="form-group text-center botoedit">
                                    <button type="submit" class="btn btn-primary">
                                        Editar usuario
                                    </button>
                                    <a type="submit" class="btn btn-primary bot" href="/users">Atrás</a>
                                </div>
                            </form>
                         </div>
                   
            </div>
        </div>
    </div>
</div>

@stop
