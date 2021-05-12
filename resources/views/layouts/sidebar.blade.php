<!-- Sidebar -->
<div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>{{ __('MENÚ PRINCIPAL') }}</small>
            </li>
            <!-- /END Separator -->

            <a class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-home fa-fw mr-3"></span>
                    <span class="menu-collapsed">{{ __('Inici') }}</span>
                </div>
            </a>
        @auth
            @if (\Auth::user()->role->desc == 'admin')
            <a href="{{action('App\Http\Controllers\UserController@index')}}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed mr-1">{{ __('Usuarios') }}</span><span class="badge badge-light">{{$numusers}}</span>
                </div>
            </a>

            @elseif (\Auth::user()->role->desc == 'empresa')
            <a href="{{action('App\Http\Controllers\EmpresaController@index')}}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-shipping-fast fa-fw mr-3"></span>
                    <span class="menu-collapsed mr-1">{{ __('Ofertas') }}</span><span class="badge badge-light"></span>
                </div>
            </a>
            @endif
        

            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
            </li>

            <div>
                
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <span id="collapse-icon" class="fa fa-sign-out-alt mr-3"></span>
                    {{ __('Salir') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        @endauth
            <a href="#" data-toggle="sidebar-colapse" class="list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-angle-double-left mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed">{{ __('Minimiza') }}</span>
                </div>
            </a>
            <!-- Logo -->
            <li class="list-group-item logo-separator d-flex justify-content-center">
                <img src="/img/OlivarLogo1.png" alt="">
            </li>
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->