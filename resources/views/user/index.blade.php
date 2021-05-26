@extends('admin.index')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            
            <h1 class="border-dark border-bottom pb-3 my-4">Gestión de usuarios <a class="btn btn-secondary float-right" download="Usuarios.xml" href="/download/users"><i class="fa fa-download"> </i> Descargar Usuarios</a></h1>  
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card text-center m-0">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true" href="#">Usuarios</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">  
                <div id="app">
                    <example-component></example-component>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
