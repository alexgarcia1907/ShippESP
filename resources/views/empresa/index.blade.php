@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="border-dark border-bottom pb-3 my-4">Crea una oferta de trabajo</h1>  
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card my-0 text-center">
                <div class="card-body">
                            <form class="ml-5 mr-5" method="POST" action="{{action('App\Http\Controllers\EmpresaController@store')}}" enctype = "multipart/form-data">
                            {{ method_field('POST')}}
                            {{ csrf_field() }}
                            <br>
                                <div class="form-group row">
                                    <label for="id" class="col-sm-2 col-form-label">Descripción:</label>
                                    <div class="col-sm-10">
                                    <textarea name="desc" id="desc" cols="30" rows="5" class="text-center form-control @error('name') is-invalid @enderror"></textarea>
                                    @error('desc')<div id="tascaFeedback" class="invalid-feedback">La descripció no pot estar buida.</div>@enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="id" class="col-sm-2 col-form-label">Comunidad Autónoma:</label>
                                    <div class="col-sm-10">
                                    <select name="comunidad" id="comunidad">
                                        <option disabled selected value=""></option>
                                        @foreach($comunidades as $comunidad)
                                        <option value="{{$comunidad->CCOM}}">{{ $comunidad->COM }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                </div>
                                <div id="showprov" class="form-group row">
                                    
                                </div>
                                <div id="showmun" class="form-group row">
                                    
                                </div>
                                <div id="showpob" class="form-group row">
                                    
                                </div>
                                <div id="showcp" class="form-group row">
                                    
                                </div>
                                <div id="showcalles" class="form-group row">
                                    
                                </div>
                                
                                <div class="form-group text-center botoedit">
                                    <button type="submit" class="btn btn-primary">
                                        Crear oferta
                                    </button>
                                    <a type="submit" class="btn btn-primary bot" href="/ofertas">Atrás</a>
                                </div>
                            </form>
                        </div> 
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/locations.js')}}"></script>    
@endsection