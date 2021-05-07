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

            <a href="{{action('App\Http\Controllers\UserController@index')}}" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed mr-1">{{ __('Usuarios') }}</span><span class="badge badge-light">{{$numusers}}</span>
                </div>
            </a>

            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                
            </li>
            <a href="#" data-toggle="sidebar-colapse" class="list-group-item list-group-item-action d-flex align-items-center">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                    <span id="collapse-text" class="menu-collapsed">{{ __('Minimitza') }}</span>
                </div>
            </a>
            <!-- Logo -->
            <li class="list-group-item logo-separator d-flex justify-content-center">
                <img src="/img/OlivarLogo1.png" alt="">
            </li>
        </ul><!-- List Group END-->
    </div><!-- sidebar-container END -->