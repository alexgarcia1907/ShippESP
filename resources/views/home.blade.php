
@extends('layouts.app')
@section('content')
<link href="{{ asset('css/portada.css') }}" rel="stylesheet">

        <div id="carouselExampleIndicators" class="carousel slide" data-interval="4000" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active">
              <div class="carousel-caption d-md-block">
                <h2 class="display-4">Shipp<span style="color: yellow;">ESP</span></h2>
                <p class="lead">This is a description for the first slide.</p>        
                <section id="section07" class="demo">
                  <a id="scrollportada" href="#section08"><span></span><span></span><span></span>Scroll</a>
              </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item">
              <div class="carousel-caption d-md-block">
                <h2 class="display-4">Shipp<span style="color:#EAD017">ESP</span></h2>
                <p class="lead">This is a description for the first slide.</p>        
                <section id="section07" class="demo">
                  <a id="scrollportada" ><span></span><span></span><span></span>Scroll</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
       </div>
       <div class="container-fluid" style="margin-bottom: 3rem;">
          <div class="row">
            <div class="col">
              <div id="section08" class="py-3">
                <h1 class="text-center">A QUE NOS DEDICAMOS?</h1>
                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="text-center">
                            <p class="icon fa-4x fa fa-code" style="color:#EAD017"></p>
                        </div>
                        <p class="text-center" style="font-weight:bold;">Lorem ipsum</p>
                        <hr style="width:50%">
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis tellus ac tortor vulputate efficitur. Suspendisse a auctor enim, at posuere ante. Nullam efficitur ex in quam scelerisque, ac varius erat elementum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis tellus ac tortor vulputate efficitur. Suspendisse a auctor enim, at posuere ante. Nullam efficitur ex in quam scelerisque, ac varius erat elementum.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <p class="icon fa-4x fa fa-code" style="color:#EAD017"></p>
                        </div>
                        <p class="text-center" style="font-weight:bold;">Lorem ipsum</p>
                        <hr style="width:50%">
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis tellus ac tortor vulputate efficitur. Suspendisse a auctor enim, at posuere ante. Nullam efficitur ex in quam scelerisque, ac varius erat elementum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis tellus ac tortor vulputate efficitur. Suspendisse a auctor enim, at posuere ante. Nullam efficitur ex in quam scelerisque, ac varius erat elementum.</p>
                    </div>
                    <div class="col-md-4">
                        <div class="text-center">
                            <p class="icon fa-4x fa fa-code" style="color:#EAD017"></p>
                        </div>
                        <p class="text-center" style="font-weight:bold;">Lorem ipsum</p>
                        <hr style="width:50%">
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis tellus ac tortor vulputate efficitur. Suspendisse a auctor enim, at posuere ante. Nullam efficitur ex in quam scelerisque, ac varius erat elementum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis tellus ac tortor vulputate efficitur. Suspendisse a auctor enim, at posuere ante. Nullam efficitur ex in quam scelerisque, ac varius erat elementum.</p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection