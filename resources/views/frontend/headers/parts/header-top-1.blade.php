<div class="header-top compact-hidden">
    <div class="container">
        <div class="row">
            <div class="header-top-left  col-lg-6 col-md-5 col-sm-6 col-xs-6">
                <div class="telephone hidden-xs hidden-sm hidden-md">Telefone: (99) 9999-9999 / 9999-9999 </div>
                <!-- WHATSAPP REDES SOCIAIS -->
                <ul class="top-link list-inline lang-curr">
                    <li class="currency">
                        <div class="btn-group currencies-block">
                            <form action="#" method="post" onsubmit="return false">
                                <div class="btn-group">
                                    <button class="btn-link dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{url('assets/frontend/theme/meyer-calcados/images/icon/whatsapp-top.png')}}" alt="WhatsApp" title="WhatsApp">
                                         <span class="hidden-md hidden-sm hidden-xs">WhatsApp </span>(99) 99999-9999
                                    </button>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="language hidden-md hidden-sm hidden-xs">
                        <div class="btn-group languages-block">
                            <form action="#" method="post" id="form-language" onsubmit="return false">
                                <div class="btn-group">
                                    <button class="btn-link dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{url('assets/frontend/theme/meyer-calcados/images/icon/facebook-top.png')}}" alt="Facebook" title="Facebook">
                                        <span class="hidden-xs">Facebook</span> 
                                    </button>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <button class="btn-block language-select" type="button" name="en-gb">
                                                <img src="{{url('assets/frontend/theme/meyer-calcados/images/icon/facebook-top.png')}}" alt="Facebook" title="Facebook" />
                                                Facebook
                                            </button>
                                        </li>
                                        <li>
                                            <button class="btn-block language-select" type="button" name="ar">
                                                <img src="{{url('assets/frontend/theme/meyer-calcados/images/icon/instagram-icon.png')}}" alt="Instagram" title="Instagram" />
                                                 Instagram
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <input type="hidden" name="code" value="" />
                                <input type="hidden" name="redirect" value="http://facebook.com" />
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-top-right collapsed-block col-lg-6 col-md-7 col-sm-6 col-xs-6">
                <ul class="top-link list-inline">

                    <li class="account" id="my_account">
                        <a href="#" title="Minha Conta" class="btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span>Minha Conta</span> <span class="fa fa-caret-down"></span>
                        </a>
                        <!-- VISITANTE -->
                        <ul class="account dropdown-menu ">
                            <li><a href="{{ route('register') }}">Cadastre-se</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                        </ul>

                        <!-- LOGADO 
                        <ul class="account dropdown-menu ">
                            <li><a href="#">Minha Conta</a></li>
                            <li><a href="#">Histórico dos Pedidos</a></li>
                            <li><a href="#">Transações</a></li>
                            <li><a href="#">Downloads</a></li>
                            <li class="wishlist">
                                <a href="#" id="wishlist-total" class="top-link-wishlist" title="Desejos (1)">
                                    <span>Desejos (1)</span>
                                </a>
                            </li>
                            <li><a href="#">Sair</a></li>
                        </ul>
                        -->
                    </li>
                    <!-- LISTA DE DESEJOS  -->
                    <li class="wishlist hidden-xs">
                        <a href="#" id="wishlist-total" class="btn-link" title="Desejos (1)">
                            <span >Desejos (1)</span>
                        </a>
                    </li>
                    <!-- COMPARE -->
                    <li class="checkout hidden-xs">
                        <a href="#" class="btn-link" title="Finalizar Pedido"><span >Finalizar Pedido</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>