@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="border-dark border-bottom pb-3 my-4">{{ __("Usuari") }} {{$user->name}}:</h1>
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
                            <a class="nav-link link-light" href="/users">{{ __("Usuaris") }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-light" href="/users/{{ $user->id }}/edit">{{ __("Editar") }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true" href="#">{{ __("Comandes") }}</a>
                        </li>
                    </ul>
                </div>
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Client</th>
                            <th>Dia que es va fer</th>
                            <th>Preu total</th>
                            <th>Nº de plats demanats</th>
                            <th>Accions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach( $orders as $key => $order )
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->user->name}}</td>
                            <td>{{$order->date}}</td>
                            <td>{{$order->total}} €</td>
                            <td>{{$order->quantity}}</td>
                            <td>
                                <a type="submit" class="btn btn-primary most" href="/order/{{$order->id}}">Mostrar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@stop
