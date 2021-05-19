@extends('layouts.dashboard')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
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
                <div class="blog-slider mt-4 mb-4">
                    <div class="blog-slider__wrp swiper-wrapper">
                        <div class="blog-slider__item swiper-slide">
                        <div class="blog-slider__img">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759872/kuldar-kalvik-799168-unsplash.jpg" alt="">
                        </div>
                        <div class="blog-slider__content">
                            <span class="blog-slider__code">{{$oferta->created_at->format('d F Y')}}</span>
                            <div class="blog-slider__title">Lorem Ipsum Dolor</div>
                            <div class="blog-slider__text">{{$oferta->desc}} </div>
                            <a href="#" class="blog-slider__button">ACEPTAR</a>
                        </div>
                        </div>
                        <div class="blog-slider__item swiper-slide">
                        <div class="blog-slider__img">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759871/jason-leung-798979-unsplash.jpg" alt="">
                        </div>
                        <div class="blog-slider__content">
                            <span class="blog-slider__code">{{$oferta->created_at->format('d F Y')}}</span>
                            <div class="blog-slider__title">Origen</div>
                            <?php
                            $calle = $oferta->calleorigen;
                            ?>
                            <div class="blog-slider__text">{{substr($calle->TVIA,0, 1)}}/ {{$calle->NVIA}} , {{$calle->cpostal->CP}} , {{$calle->cpostal->poblacion->NENTSI50}}</div>

                            <a href="#" class="blog-slider__button">ACEPTAR</a>
                        </div>
                        </div>
                        
                        <div class="blog-slider__item swiper-slide">
                        <div class="blog-slider__img">
                            <img src="https://res.cloudinary.com/muhammederdem/image/upload/v1535759871/alessandro-capuzzi-799180-unsplash.jpg" alt="">
                        </div>
                        <div class="blog-slider__content">
                            <span class="blog-slider__code">{{$oferta->created_at->format('d F Y')}}</span>
                            <div class="blog-slider__title">Destino</div>
                            <?php
                            $calledestino = $oferta->calledestino;
                            ?>
                            <div class="blog-slider__text">{{substr($calledestino->TVIA,0, 1)}}/ {{$calledestino->NVIA}} , {{$calledestino->cpostal->CP}} , {{$calledestino->cpostal->poblacion->NENTSI50}}</div>
                            <a href="#" class="blog-slider__button">ACEPTAR</a>
                        </div>
                        </div>   
                    </div>
                    <div class="blog-slider__pagination"></div>
                    </div>
                </div>
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
