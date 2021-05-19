@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="border-dark border-bottom pb-3 my-4">Mis ofertas de trabajo</h1>  
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card text-center m-0">
                <div class="card-body">
                    <table class="table table-striped" id="tableofertas">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Descripción</th>
                                <th>Origen</th>
                                <th>Destino</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach( $ofertas as $key => $oferta )
                            <tr>
                                <td>{{$oferta->id}}</td>
                                <td>{{$oferta->desc}}</td>
                                <td>{{$oferta->calleorigen->NVIA}}</td>
                                <td style="text-transform:capitalize;">{{$oferta->calledestino->NVIA}}</td>
                                <td>
                                    @if($oferta->estado == 'pendiente')
                                    <i class="fa fa-clipboard-list fa-2x" data-toggle="tooltip" data-placement="right" title="Pendiente"></i>
                                    @elseif($oferta->estado == 'reparto')
                                    <i class="fa fa-dolly fa-2x" style="color:#EAD017" data-toggle="tooltip" data-placement="right" title="En reparto"></i>
                                    @elseif($oferta->estado == 'entregado')
                                    <i class="fa fa-clipboard-check fa-2x text-success" data-toggle="tooltip" data-placement="right" title="Entregado"></i>
                                    @endif
                                </td>
                                <!--<td class="text-center">
                                    @if($oferta->estado == 'entregado')
                                        <a style="pointer-events: none;opacity: 0.5;" type="submit" class="btn btn-warning ediprodu" href="/ofertas/{{ $oferta->id }}/edit">Editar</a>
                                    @else
                                        <a type="submit" class="btn btn-warning ediprodu" href="/ofertas/{{ $oferta->id }}/edit">Editar</a>
                                    @endif
                                </td>-->
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
        $('#tableofertas').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
        }
    } );
    })

</script>
@endsection