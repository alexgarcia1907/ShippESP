<!-- Sidebar -->
<div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>{{ __('MENÚ PRINCIPAL') }}</small>
            </li>
            <!-- /END Separator -->

        @auth
            @if (\Auth::user()->role->desc == 'admin')
            <a href="/admin" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-home fa-fw mr-3"></span>
                    <span class="menu-collapsed">{{ __('Inicio') }}</span>
                </div>
            </a>
            <a href="{{action('App\Http\Controllers\UserController@index')}}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed mr-1">{{ __('Usuarios') }} <span class="badge badge-light"> {{$numusers}}</span></span>
                </div>
            </a>
            <a href="{{action('App\Http\Controllers\AdminController@getOfertas')}}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed mr-1">{{ __('Ofertas') }} <span class="badge badge-light"> {{$numofertasadmin}}</span></span>
                </div>
            </a>

            @elseif (\Auth::user()->role->desc == 'empresa')
            <a href="{{action('App\Http\Controllers\EmpresaController@index')}}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-shipping-fast fa-fw mr-3"></span>
                    <span class="menu-collapsed mr-1">{{ __('Crear Oferta') }}</span><span class="badge badge-light"></span>
                </div>
            </a>
            <a href="/empresa/{{\Auth::id()}}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-boxes fa-fw mr-3"></span>
                    <span class="menu-collapsed mr-1">{{ __('Mis Ofertas') }} <span class="badge badge-light"> {{$numofertas}} </span> </span>
                </div>
            </a>
            @elseif (\Auth::user()->role->desc == 'repartidor')
            <li>
                <a href="/ofertas/disponibles" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-dolly-flatbed fa-fw mr-3"></span>
                        <span class="menu-collapsed mr-1">{{ __('Ofertas Disponibles') }} <span class="badge badge-light"> {{$numofertasdisponibles}}</span> </span>
                    </div>
                </a>
            </li>
            @endif
        

            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
            </li>
            <li>
                <a href="{{ url('/users' )}}/{{\Auth::id()}}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-user fa-fw mr-3"></span>
                        <span class="menu-collapsed mr-1">{{ __('Mi Cuenta') }}</span><span class="badge badge-light"></span>
                    </div>
                </a>
            </li>
            <li>
               <div> 
                    <a class="list-group-item list-group-item-action d-flex align-items-center" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <span class="fa fa-sign-out-alt mr-3"></span>
                        <span class="menu-collapsed mr-1">{{ __('Salir') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>     
        @endauth
        <li>
            <a href="#" data-toggle="sidebar-colapse" class="list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-angle-double-left mr-3" aria-hidden="true"></span>
                    <span id="collapse-text" class="menu-collapsed">{{ __('Minimiza') }}</span>
                </div>
            </a>
        </li>
    </ul><!-- List Group END-->
</div><!-- sidebar-container END -->