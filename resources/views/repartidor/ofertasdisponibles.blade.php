@extends('layouts.dashboard')

@section('content')
<script>
    function GenerarMapa(Olat,Olong,Dlat,Dlong,Nmap) {
        for(let i = 0; i < 3; i++){
            var map = L.map("map"+Nmap+"_"+i).
            setView([40.42, -3.00],
            5);
            
            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
        L.control.scale().addTo(map);
        var routeControl=L.Routing.control({
        waypoints: [
            L.latLng(Olat, Olong),
            L.latLng(Dlat, Dlong)
        ],
        show:false
        });
        routeControl.addTo(map)
        routeControl.on('routesfound', function(e) {
        var routes = e.routes;
        var summary = routes[0].summary;
        $('#km'+Nmap).text(Math.trunc(summary.totalDistance / 1000)+" KM");
        $('#horas'+Nmap).text(Math.round(summary.totalTime / 3600)+" Horas");
        });
        }
    }
</script>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="border-dark border-bottom pb-3 my-4">Ofertas disponibles</h1>  
        </div>
    </div>
</div>

<div class="container pb-4">
    <div class="row ">
        <div class="col ">
            @foreach($ofertasdispo as $oferta)
            <?php
                $calle = $oferta->calleorigen;
                $calledestino = $oferta->calledestino;
            ?>
                <div class="blog-slider mt-4 mb-4">
                    <div class="blog-slider__wrp swiper-wrapper">
                        <div class="blog-slider__item swiper-slide">
                            <div class="blog-slider__img" id="map{{$oferta->id}}_0"></div>
                            <div class="blog-slider__content">
                                <span class="blog-slider__code">{{$oferta->created_at->format('d F Y')}}</span>
                                <div class="blog-slider__title">
                                    <h2>Lorem Ipsum</h2>
                                    <h6 id="km{{$oferta->id}}"></h6>
                                    <h6 id="horas{{$oferta->id}}"></h6>
                                </div>
                                <div class="blog-slider__text">{{$oferta->desc}} </div>
                                <a href="/repartidor/aceptaroferta/{{$oferta->id}}" class="blog-slider__button">ACEPTAR</a>
                            </div>
                        </div>
                        <div class="blog-slider__item swiper-slide">
                            <div class="blog-slider__img" id="map{{$oferta->id}}_1"></div>
                            <div class="blog-slider__content">
                                <span class="blog-slider__code">{{$oferta->created_at->format('d F Y')}}</span>
                                <div class="blog-slider__title">Origen</div>
                                <div class="blog-slider__text">{{substr($calle->TVIA,0, 1)}}/ {{$calle->NVIA}} , {{$calle->cpostal->CP}} , {{$calle->cpostal->poblacion->NENTSI50}}</div>

                                <a href="/repartidor/aceptaroferta/{{$oferta->id}}" class="blog-slider__button">ACEPTAR</a>
                            </div>
                        </div>
                        
                        <div class="blog-slider__item swiper-slide">
                        <div class="blog-slider__img" id="map{{$oferta->id}}_2"></div>
                        <div class="blog-slider__content">
                            <span class="blog-slider__code">{{$oferta->created_at->format('d F Y')}}</span>
                            <div class="blog-slider__title">Destino</div>  
                            <div class="blog-slider__text">{{substr($calledestino->TVIA,0, 1)}}/ {{$calledestino->NVIA}} , {{$calledestino->cpostal->CP}} , {{$calledestino->cpostal->poblacion->NENTSI50}}</div>
                            <a href="/repartidor/aceptaroferta/{{$oferta->id}}" class="blog-slider__button">ACEPTAR</a>
                        </div>
                        </div>   
                    </div>
                    <div class="blog-slider__pagination"></div>
                    </div>
                </div>
                <script>GenerarMapa("{{$oferta->latO}}","{{$oferta->lonO}}","{{$oferta->latD}}","{{$oferta->lonD}}","{{$oferta->id}}");</script>
            @endforeach
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.blog-slider', {
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
      }
    });
</script>
@endsection
