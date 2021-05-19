@extends('layouts.app')

@section('content')
<link href="{{ asset('css/auth.css') }}" rel="stylesheet">
<div class="container central">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card verificas">
                <div class="card-header">{{ __('Verifica el teu correu electrònic') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Enviat un nou enllaç de verificació a la vostra adreça de correu electrònic.') }}
                        </div>
                    @endif

                    {{ __('Abans de continuar, consulteu el vostre correu electrònic per obtenir un enllaç de verificació.') }}
                    {{ __('Si no heu rebut el correu electrònic') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline ver">{{ __('tornar a enviar correu de verificació') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
