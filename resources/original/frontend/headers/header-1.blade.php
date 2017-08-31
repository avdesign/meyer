<header id="header" class=" variant typeheader-1">
            <!-- HEADER TOP -->
            @include('frontend.headers.parts.header-top-1')

    <!-- HEADER CENTER -->
    <div class="header-middle compact-hidden">
        <div class="container">
            <div class="row">
                <!-- LOGO -->
                <div class="navbar-logo col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="logo">
                        <a href="#">
                            <img src="{{url('assets/frontend/theme/meyer-calcados/images/logo/logo2.png')}}" title="Meyer Calçados" alt="Meyer Calçados" />
                        </a>

                    </div>
                </div>

                @include('frontend.headers.parts.search-top-1')

                <div class="middle-right col-lg-3 col-md-4 col-sm-6 col-xs-8">
                    <div class="signin-w font-title hidden-sm hidden-xs">
                        <ul class="signin-link">
                            <!-- VISITANTE -->
                            <li><a href="{{ route('login') }}">Login / Cadastro</a></li>

                            <!-- LOGADO 
                            <li><a href="#">Sair</a></li>
                            -->
                        </ul>
                        <div class="hidden-sm hidden-xs welcome-msg"> Bem vindo </div>
                    </div>

                    <div class="shopping_cart">
                        @include('frontend.headers.parts.cart-top-1')
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- HEADER BOTTOM -->
    @include('frontend.headers.menu-top-1')

</header>