@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Perfil d'usuari
                </div>
                <div class="card-body">
                    <form method="POST" action="{{action('App\Http\Controllers\UserController@updateProfile', $user->id)}}" enctype="multipart/form-data">
                        {{ method_field('PUT')}}
                        {{ csrf_field() }}

                        <div class="form-group my-3">
                            <label for="email">Email:</label>
                            <div>{{$user->email}}</div>
                        </div>

                        <div class="form-group my-3">
                            <label for="name">Nom d'usuari:</label>
                            <input value="{{$user->name}}" type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror">
                            @error('name')<div id="tascaFeedback" class="invalid-feedback">El nom és un camp obligatori!</div>@enderror
                        </div>

                        <div class="form-group my-3">
                            <label for="old_password">Contrassenya:</label>
                            <input value="" type="password" name="old_password" id="old_password" class=" form-control @error('old_password') is-invalid @enderror">
                            @error('old_password')<div id="tascaFeedback" class="invalid-feedback">Si canvies la contrassenya és un camp obligatori!</div>@enderror
                        </div>

                        <div class="form-group my-3">
                            <label for="new_password">Nova contrassenya:</label>
                            <input value="" type="password" name="new_password" id="new_password" class=" form-control @error('new_password') is-invalid @enderror">
                            @error('new_password')<div id="tascaFeedback" class="invalid-feedback">Si canvies la contrassenya és un camp obligatori!</div>@enderror
                        </div>

                        <div class="form-group my-3">
                            <label for="new_password_confirm">Confirmar nova contrassenya:</label>
                            <input value="" type="password" name="new_password_confirm" id="new_password_confirm" class="form-control @error('new_password_confirm') is-invalid @enderror">
                            @error('new_password_confirm')<div id="tascaFeedback" class="invalid-feedback">Si canvies la contrassenya és un camp obligatori!</div>@enderror
                        </div>

                        <div class="form-group text-center botoedit my-3">
                            <button type="submit" class="btn btn-primary bot">
                                Editar
                            </button>
                            <a type="submit" class="btn btn-primary bot" href="/">Tornar enrere</a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card my-5">
                <div class="card-header text-center">
                    Providers
                </div>
                <div class="card-body">
                    @foreach( $providers as $key => $provider )
                    <div class="my-3">{{$provider->provider_name}}</div>
                    @endforeach
                </div>
            </div>

            <div class="card mt-5">
                <div class="card-header text-center">
                    Comandes
                </div>
                <div class="card-body">
                    @foreach( $orders as $key => $order )
                    <div class="my-3">Comanda feta el {{\Carbon\Carbon::createFromTimeString($order->created_at)->isoFormat('D-MM-Y')}} <a class="btn btn-primary" href="/basket/order/{{$order->id}}">Veure</a></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop