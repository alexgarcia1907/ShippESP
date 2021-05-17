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
                                    <textarea name="desc" id="desc" cols="30" rows="3" class="text-center form-control @error('desc') is-invalid @enderror"></textarea>
                                    @error('desc')<div id="tascaFeedback" class="invalid-feedback">La descripción no puede estar vacía.</div>@enderror
                                    </div>
                                </div>
                            <div class="row mt-5">
                                                        
                                <!--  Escoger origen  -->
                                <div class="col-6">
                                    <h2 class="border-dark border-bottom">Origen</h2>
                                    <div class="form-group align-items-center row">
                                        <label for="id" class="col-sm-4 col-form-label">Comunidad Autónoma:</label>
                                        <div class="col-sm-8 text-left">
                                        <select name="comunidad" id="comunidad" class="custom-select w-75 @error('comunidad') is-invalid @enderror">
                                        @error('comunidad')<div id="tascaFeedback" class="invalid-feedback"></div>@enderror
                                            <option disabled selected value="">Selecciona...</option>
                                            @foreach($comunidades as $comunidad)
                                            <option value="{{$comunidad->CCOM}}">{{ $comunidad->COM }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div id="showprov" class="form-group align-items-center row">
                                    
                                    </div>
                                    <div id="showmun" class="form-group align-items-center row">
                                    
                                    </div>
                                    <div id="showpob" class="form-group align-items-center row">
                                    
                                    </div>
                                    <div id="showcp" class="form-group align-items-center row">
                                        
                                    </div>
                                    <div id="showcalles" class="form-group align-items-center row">
                                        
                                    </div>
                                </div>
                                <!--  Escoger destino  -->
                                <div class="col-6">
                                    <h2 class="border-dark border-bottom">Destino</h2>
                                    <div class="form-group align-items-center row">
                                        <label for="id" class="col-sm-4 col-form-label">Comunidad Autónoma:</label>
                                        <div class="col-sm-8 text-left">
                                        <select name="comunidaddest" id="comunidaddest" class="custom-select w-75 @error('comunidaddest') is-invalid @enderror">
                                        @error('comunidaddest')<div id="tascaFeedback" class="invalid-feedback"></div>@enderror
                                            <option disabled selected value="">Selecciona...</option>
                                            @foreach($comunidades as $comunidad)
                                            <option value="{{$comunidad->CCOM}}">{{ $comunidad->COM }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div id="showprovdest" class="form-group align-items-center row">
                                    
                                    </div>
                                    <div id="showmundest" class="form-group align-items-center row">
                                    
                                    </div>
                                    <div id="showpobdest" class="form-group align-items-center row">
                                    
                                    </div>
                                    <div id="showcpdest" class="form-group align-items-center row">
                                        
                                    </div>
                                    <div id="showcallesdest" class="form-group align-items-center row">
                                        
                                    </div>
                                </div>
                            </div>
                            

                                <div class="form-group text-center botoedit">
                                    <button type="submit" class="btn" style="background-color:#EAD017">
                                        Crear oferta
                                    </button>
                                </div>
                            </form>
                        </div> 
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/locations.js')}}"></script>    
@endsection