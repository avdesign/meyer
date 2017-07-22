@extends('frontend.layout.template-1')
@push('meta')
    <meta property="og:image:width" content="450" />
    <meta property="og:image:height" content="298" />
@endpush

@push('css')
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_countdown/css/style.css')}}">
@endpush
@push('scripts')
    <script src="{{url('assets/frontend/js/avd_home_slider/js/owl.carousel.js')}}"></script>
@endpush
@push('head')
<script>
    var avdJson = {!! json_encode([
        "cart_url" => url('carrinho/'),
        "cart_info" => route('cart.info'),
        "cart_popup" => route('cart.popup'),
        "token" => csrf_token()
    ]) !!};
</script>
    <link href="{{url('categoria/nome-categoria')}}" rel="canonical" />
@endpush

@push('body')
<body class="account-login ltr res layout-1">
@endpush
@section('content')   
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
            <li><a href="{{url('minha/conta')}}">Conta</a></li>
            <li><a href="{{route('login')}}">Login</a></li>
        </ul>
        <div class="row">
            <div id="content" class="col-sm-9">
                @include('frontend.popups.groups-1')
                <div class="row">
                    <div class="col-sm-6">
                        <div class="well col-sm-12">
                            <h2>Cliente novo</h2>
                            <p><strong>Faça seu Cadastro</strong></p>
                            <p>Ao criar uma conta, você será capaz de fazer compras mais rápido, estar atualizado sobre o status de um pedido, e acompanhar os pedidos que você já fez.</p>
                            <a href="#">Continue</a></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="well col-sm-12">
                            <h2>Já sou Clienter</h2>
                            <p><strong>Entre com seus dados abaixo:</strong></p>
                            <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="control-label" for="input-email">E-Mail Address</label>
                                    <input type="text" name="email" value="{{ old('email') }}" placeholder="Seu Email" id="input-email" class="form-control" required autofocus/>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="control-label" for="input-password">Senha</label>
                                    <input type="password" name="password" value="" placeholder="Senha" id="input-password" class="form-control" required/>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    
                                    <a href="{{ route('password.request') }}"> Esqueceu a Senha? </a>
                                </div>

                                <input type="submit" value="Login" class="btn btn-primary pull-left" />

                            </form>

                            <column id="column-login" class="col-sm-8 pull-right">
                                <div class="row">

                                    <div class="social_login pull-right" id="so_sociallogin">
                                        <a href="#" class="btn btn-social-icon btn-sm btn-facebook"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></a>

                                        <a href="#/TwitterLogin" class="btn btn-social-icon btn-sm btn-twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></a>

                                        <a href="https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=#" class="btn btn-social-icon btn-sm btn-google-plus"><i class="fa fa-google fa-fw" aria-hidden="true"></i></a>

                                        <a href="#/LinkedinLogin" class="btn btn-social-icon btn-sm btn-linkdin"><i class="fa fa-linkedin fa-fw" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </column>

                        </div>
                    </div>
                </div>
            </div>
            <aside class="col-md-3 col-sm-12  col-xs-12 content-aside right_column sidebar-offcanvas">
                <span id="close-sidebar" class="fa fa-times"></span>
                <div class="module">
                    <h3 class="modtitle"><span>Account</span></h3>
                    <div class="module-content custom-border">
                        <ul class="list-box">
                            <li><a href="{{ route('login') }}">Login</a> / <a href="#">Register</a></li>
                            <li><a href="#">Esqueci a Senha</a></li>
                            <li><a href="#">Minha Conta</a></li>
                            <li><a href="#">Endereço de Entrega</a></li>
                            <li><a href="#">Lista de Desejo</a></li>
                            <li><a href="#">Histórico de Pedidos</a></li>
                            <li><a href="#">Pagamentos Recorrentes</a></li>
                            <li><a href="#">Pontos e Recompensas</a></li>
                            <li><a href="#">Devoluções</a></li>
                            <li><a href="#">Transações</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <style>
        @media(max-width:991px) {
            #column-login,
            .social_login,
            .socalicon {
                float: none !important;
                width: 100%;
            }
            .account-login .btn-primary {
                float: none !important;
            }
            .social_login {
                padding: 0 10px;
            }
        }
    </style>
@endsection