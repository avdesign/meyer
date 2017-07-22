@extends('frontend.layout.template-1')
@push('meta')
    <meta property="og:image:width" content="450" />
    <meta property="og:image:height" content="298" />
@endpush

@push('css')
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_countdown/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_extra_slider/css/owl.carousel.css')}}">
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
<body class="product-category-57 ltr res layout-1">
@endpush
@section('content')     
    <!-- BREADCRUMB -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="current-name">Nome da Seção</div>
            <ul class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="{{url("categoria/$id")}}">Nome da Categoria</a></li>
            </ul>
        </div>
    </div>
    <div class="container content-main">
        <div class="row">
            <div id="content" class="col-sm-12">

                @include('frontend.popups.groups-1')

                <div class="products-category">

                     @include('frontend.categories.filters.filter-2')

                    <!--Changed Listings-->
                    <div class="products-category">
                        <div class="products-list row grid">

                            <div class="product-layout col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="label-stock label label-success">3 Cores</div>
                                        <div class="product-image-container lazy second_img ">
                                            <a href="{{url('produto/detalhes/4')}}">
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto1-cor1.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto1-cor1.jpg')}}"  title="Nome do Produto" class="img-1 img-responsive" />
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto1-cor2.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto1-cor2.jpg')}}"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />
                                            </a>
                                        </div>
                                        <div class="box-label"></div>
                                        <div class="button-group">
                                            <!-- CART -->
                                            <button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add('167', '1');"><i class="fa fa-shopping-cart"></i></button>
                                            <!-- WISHLIST 
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add('c');"><i class="fa fa-heart"></i></button>-->

                                            <!-- COMPARE
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add('167');"><i class="fa fa-retweet"></i></button> -->
                                            <!-- QUICK VIEW -->
                                            <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="{{url('product/quickview/167')}}"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="ratings">
                                                <!--
                                                <div class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                </div>
                                                -->
                                            </div>
                                            <h4><a href="{{url('produto/detalhes/4')}}">Nome do Produto</a></h4>
                                            <div class="price">
                                                À vista <span class="price-new">R$ 45,00</span> </br>
                                                <span class="price-term">No Cartão 3x R$ 15,00</span>
                                            </div>
                                            <div class="description  hidden">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="product-layout col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="label-stock label label-success 2 Cores">2 Cores</div>
                                        <div class="product-image-container lazy second_img ">
                                            <a href="{{url('produto/detalhes/4')}}">
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto2-cor3.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto2-cor3.jpg')}}"  title="Nome do Produto" class="img-1 img-responsive" />
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto2-cor3-posicao-3.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto2-cor3-posicao-3.jpg')}}"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />
                                            </a>
                                        </div>

                                        <!--COUNTDOWN BOX-->
                                        <div class="countdown_box">
                                            <div class="countdown_inner">
                                                <div class="title ">Esta oferta limitada acaba</div>
                                                <script type="text/javascript">
                                                    $(function() {
                                                        var austDay = new Date(2017, 8 - 1, 31);
                                                        $('.defaultCountdown-74').countdown(austDay, function(event) {
                                                            var $this = $(this).html(event.strftime('' +
                                                                '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Dias </div></div>' +
                                                                '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Horas </div></div>' +
                                                                '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Min </div></div>' +
                                                                '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Seg </div></div>'));
                                                        });


                                                    });
                                                </script>
                                                <div class="defaultCountdown-74"></div>
                                            </div>
                                        </div>
                                        <div class="box-label"><span class="label-product label-sale">-15%</span></div>

                                        <!-- BOX BUTTON -->
                                        <div class="button-group">
                                            <!-- CART -->
                                            <button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add('168', '1');"><i class="fa fa-shopping-cart"></i></button>
                                            <!-- WISHLIST 
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add('168');"><i class="fa fa-heart"></i></button>-->
                                            <!-- COMPARE
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add('168');"><i class="fa fa-retweet"></i></button> -->
                                            <!-- QUICK VIEW -->
                                            <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="{{url('product/quickview/168')}}"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                    </div>

                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="ratings">
                                                <!--
                                                <div class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                </div>
                                                -->
                                            </div>

                                            <h4><a href="{{url('produto/detalhes/4')}}">Nome do Produto</a></h4>
                                            <div class="price">
                                                À vista <span class="price-new">R$ 45,00</span> </br>
                                                <span class="price-term">No Cartão 3x R$ 15,00</span>
                                            </div>
                                            <div class="description  hidden ">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="product-layout col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="label-stock label label-success">3 Cores</div>
                                        <div class="product-image-container lazy second_img ">
                                            <a href="{{url('produto/detalhes/4')}}">
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto3-cor2.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto3-cor2.jpg')}}"  title="Nome do Produto" class="img-1 img-responsive" />
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto3-cor2-posicao-3.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto3-cor2-posicao-3.jpg')}}"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />
                                            </a>
                                        </div>
                                        <div class="box-label"></div>
                                        <div class="button-group">
                                            <!-- CART -->
                                            <button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add('167', '1');"><i class="fa fa-shopping-cart"></i></button>
                                            <!-- WISHLIST 
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add('c');"><i class="fa fa-heart"></i></button>-->

                                            <!-- COMPARE
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add('167');"><i class="fa fa-retweet"></i></button> -->
                                            <!-- QUICK VIEW -->
                                            <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="{{url('product/quickview/167')}}"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="ratings">
                                                <!--
                                                <div class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                </div>
                                                -->
                                            </div>
                                            <h4><a href="{{url('produto/detalhes/4')}}">Nome do Produto</a></h4>
                                            <div class="price">
                                                À vista <span class="price-new">R$ 45,00</span> </br>
                                                <span class="price-term">No Cartão 3x R$ 15,00</span>
                                            </div>
                                            <div class="description  hidden">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="product-layout col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="label-stock label label-success">3 Cores</div>
                                        <div class="product-image-container lazy second_img ">
                                            <a href="{{url('produto/detalhes/4')}}">
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto6-cor1.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto6-cor2.jpg')}}"  title="Nome do Produto" class="img-1 img-responsive" />
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto6-cor1-posicao-2.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto6-cor1-posicao-2.jpg')}}"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />
                                            </a>
                                        </div>
                                        <div class="box-label"></div>
                                        <div class="button-group">
                                            <!-- CART -->
                                            <button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add('167', '1');"><i class="fa fa-shopping-cart"></i></button>
                                            <!-- WISHLIST 
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add('c');"><i class="fa fa-heart"></i></button>-->

                                            <!-- COMPARE
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add('167');"><i class="fa fa-retweet"></i></button> -->
                                            <!-- QUICK VIEW -->
                                            <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="{{url('product/quickview/167')}}"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="ratings">
                                                <!--
                                                <div class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                </div>
                                                -->
                                            </div>
                                            <h4><a href="{{url('produto/detalhes/4')}}">Nome do Produto</a></h4>
                                            <div class="price">
                                                À vista <span class="price-new">R$ 45,00</span> </br>
                                                <span class="price-term">No Cartão 3x R$ 15,00</span>
                                            </div>
                                            <div class="description  hidden">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="product-layout col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="label-stock label label-success">3 Cores</div>
                                        <div class="product-image-container lazy second_img ">
                                            <a href="{{url('produto/detalhes/4')}}">
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto9-cor2.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto9-cor2.jpg')}}"  title="Nome do Produto" class="img-1 img-responsive" />
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto9-cor2-posicao-3.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto9-cor2-posicao-3.jpg')}}"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />
                                            </a>
                                        </div>
                                        <div class="box-label"></div>
                                        <div class="button-group">
                                            <!-- CART -->
                                            <button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add('167', '1');"><i class="fa fa-shopping-cart"></i></button>
                                            <!-- WISHLIST 
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add('c');"><i class="fa fa-heart"></i></button>-->

                                            <!-- COMPARE
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add('167');"><i class="fa fa-retweet"></i></button> -->
                                            <!-- QUICK VIEW -->
                                            <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="{{url('product/quickview/167')}}"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="ratings">
                                                <!--
                                                <div class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                </div>
                                                -->
                                            </div>
                                            <h4><a href="{{url('produto/detalhes/4')}}">Nome do Produto</a></h4>
                                            <div class="price">
                                                À vista <span class="price-new">R$ 45,00</span> </br>
                                                <span class="price-term">No Cartão 3x R$ 15,00</span>
                                            </div>
                                            <div class="description  hidden">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>                           
                            </div>


                            <div class="product-layout col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="label-stock label label-success 2 Cores">2 Cores</div>
                                        <div class="product-image-container lazy second_img ">
                                            <a href="{{url('produto/detalhes/4')}}">
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto8-cor1.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto8-cor1.jpg')}}"  title="Nome do Produto" class="img-1 img-responsive" />
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto8-cor1-posicao-4.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto8-cor1-posicao-4.jpg')}}"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />
                                            </a>
                                        </div>

                                        <!--COUNTDOWN BOX-->
                                        <div class="countdown_box">
                                            <div class="countdown_inner">
                                                <div class="title ">Esta oferta limitada acaba</div>
                                                <script type="text/javascript">
                                                    $(function() {
                                                        var austDay = new Date(2017, 8 - 1, 31);
                                                        $('.defaultCountdown-74').countdown(austDay, function(event) {
                                                            var $this = $(this).html(event.strftime('' +
                                                                '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Dias </div></div>' +
                                                                '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Horas </div></div>' +
                                                                '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Min </div></div>' +
                                                                '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Seg </div></div>'));
                                                        });


                                                    });
                                                </script>
                                                <div class="defaultCountdown-74"></div>
                                            </div>
                                        </div>
                                        <div class="box-label"><span class="label-product label-sale">-15%</span></div>

                                        <!-- BOX BUTTON -->
                                        <div class="button-group">
                                            <!-- CART -->
                                            <button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add('168', '1');"><i class="fa fa-shopping-cart"></i></button>
                                            <!-- WISHLIST 
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add('168');"><i class="fa fa-heart"></i></button>-->
                                            <!-- COMPARE
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add('168');"><i class="fa fa-retweet"></i></button> -->
                                            <!-- QUICK VIEW -->
                                            <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="{{url('product/quickview/168')}}"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                    </div>

                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="ratings">
                                                <!--
                                                <div class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                </div>
                                                -->
                                            </div>

                                            <h4><a href="{{url('produto/detalhes/4')}}">Nome do Produto</a></h4>
                                            <div class="price">
                                                À vista <span class="price-new">R$ 45,00</span> </br>
                                                <span class="price-term">No Cartão 3x R$ 15,00</span>
                                            </div>
                                            <div class="description  hidden ">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>     
                            </div>

                            <div class="product-layout col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="label-stock label label-success">3 Cores</div>
                                        <div class="product-image-container lazy second_img ">
                                            <a href="{{url('produto/detalhes/4')}}">
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto4-cor1.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto4-cor1.jpg')}}"  title="Nome do Produto" class="img-1 img-responsive" />
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto4-cor2.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto4-cor2.jpg')}}"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />
                                            </a>
                                        </div>
                                        <div class="box-label"></div>
                                        <div class="button-group">
                                            <!-- CART -->
                                            <button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add('167', '1');"><i class="fa fa-shopping-cart"></i></button>
                                            <!-- WISHLIST 
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add('c');"><i class="fa fa-heart"></i></button>-->

                                            <!-- COMPARE
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add('167');"><i class="fa fa-retweet"></i></button> -->
                                            <!-- QUICK VIEW -->
                                            <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="{{url('product/quickview/167')}}"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="ratings">
                                                <!--
                                                <div class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                </div>
                                                -->
                                            </div>
                                            <h4><a href="{{url('produto/detalhes/4')}}">Nome do Produto</a></h4>
                                            <div class="price">
                                                À vista <span class="price-new">R$ 45,00</span> </br>
                                                <span class="price-term">No Cartão 3x R$ 15,00</span>
                                            </div>
                                            <div class="description  hidden">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="product-layout col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="label-stock label label-success 2 Cores">2 Cores</div>
                                        <div class="product-image-container lazy second_img ">
                                            <a href="{{url('produto/detalhes/4')}}">
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto7-cor1.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto7-cor1.jpg')}}"  title="Nome do Produto" class="img-1 img-responsive" />
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto7-cor1-posicao-4.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto7-cor1-posicao-4.jpg')}}"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />
                                            </a>
                                        </div>

                                        <!--COUNTDOWN BOX-->
                                        <div class="countdown_box">
                                            <div class="countdown_inner">
                                                <div class="title ">Esta oferta limitada acaba</div>
                                                <script type="text/javascript">
                                                    $(function() {
                                                        var austDay = new Date(2017, 8 - 1, 31);
                                                        $('.defaultCountdown-74').countdown(austDay, function(event) {
                                                            var $this = $(this).html(event.strftime('' +
                                                                '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Dias </div></div>' +
                                                                '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Horas </div></div>' +
                                                                '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Min </div></div>' +
                                                                '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Seg </div></div>'));
                                                        });


                                                    });
                                                </script>
                                                <div class="defaultCountdown-74"></div>
                                            </div>
                                        </div>
                                        <div class="box-label"><span class="label-product label-sale">-15%</span></div>

                                        <!-- BOX BUTTON -->
                                        <div class="button-group">
                                            <!-- CART -->
                                            <button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add('168', '1');"><i class="fa fa-shopping-cart"></i></button>
                                            <!-- WISHLIST 
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add('168');"><i class="fa fa-heart"></i></button>-->
                                            <!-- COMPARE
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add('168');"><i class="fa fa-retweet"></i></button> -->
                                            <!-- QUICK VIEW -->
                                            <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="{{url('product/quickview/168')}}"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                    </div>

                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="ratings">
                                                <!--
                                                <div class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                </div>
                                                -->
                                            </div>

                                            <h4><a href="{{url('produto/detalhes/4')}}">Nome do Produto</a></h4>
                                            <div class="price">
                                                À vista <span class="price-new">R$ 45,00</span> </br>
                                                <span class="price-term">No Cartão 3x R$ 15,00</span>
                                            </div>
                                            <div class="description  hidden ">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="product-layout col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="label-stock label label-success">3 Cores</div>
                                        <div class="product-image-container lazy second_img ">
                                            <a href="{{url('produto/detalhes/4')}}">
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto10-cor2.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto10-cor2.jpg')}}"  title="Nome do Produto" class="img-1 img-responsive" />
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto10-cor2-posicao-3.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto10-cor2-posicao-3.jpg')}}"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />
                                            </a>
                                        </div>
                                        <div class="box-label"></div>
                                        <div class="button-group">
                                            <!-- CART -->
                                            <button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add('167', '1');"><i class="fa fa-shopping-cart"></i></button>
                                            <!-- WISHLIST 
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add('c');"><i class="fa fa-heart"></i></button>-->

                                            <!-- COMPARE
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add('167');"><i class="fa fa-retweet"></i></button> -->
                                            <!-- QUICK VIEW -->
                                            <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="{{url('product/quickview/167')}}"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="ratings">
                                                <!--
                                                <div class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                </div>
                                                -->
                                            </div>
                                            <h4><a href="{{url('produto/detalhes/4')}}">Nome do Produto</a></h4>
                                            <div class="price">
                                                À vista <span class="price-new">R$ 45,00</span> </br>
                                                <span class="price-term">No Cartão 3x R$ 15,00</span>
                                            </div>
                                            <div class="description  hidden">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="product-layout col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="label-stock label label-success">3 Cores</div>
                                        <div class="product-image-container lazy second_img ">
                                            <a href="{{url('produto/detalhes/4')}}">
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto9-cor1.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto9-cor1.jpg')}}"  title="Nome do Produto" class="img-1 img-responsive" />
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto9-cor1-posicao-3.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto9-cor1-posicao-3.jpg')}}"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />
                                            </a>
                                        </div>
                                        <div class="box-label"></div>
                                        <div class="button-group">
                                            <!-- CART -->
                                            <button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add('167', '1');"><i class="fa fa-shopping-cart"></i></button>
                                            <!-- WISHLIST 
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add('c');"><i class="fa fa-heart"></i></button>-->

                                            <!-- COMPARE
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add('167');"><i class="fa fa-retweet"></i></button> -->
                                            <!-- QUICK VIEW -->
                                            <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="{{url('product/quickview/167')}}"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="ratings">
                                                <!--
                                                <div class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                </div>
                                                -->
                                            </div>
                                            <h4><a href="{{url('produto/detalhes/4')}}">Nome do Produto</a></h4>
                                            <div class="price">
                                                À vista <span class="price-new">R$ 45,00</span> </br>
                                                <span class="price-term">No Cartão 3x R$ 15,00</span>
                                            </div>
                                            <div class="description  hidden">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="product-layout col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="label-stock label label-success 2 Cores">2 Cores</div>
                                        <div class="product-image-container lazy second_img ">
                                            <a href="{{url('produto/detalhes/4')}}">
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto8-cor2.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto8-cor2.jpg')}}"  title="Nome do Produto" class="img-1 img-responsive" />
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto8-cor2-posicao-4.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto8-cor2-posicao-4.jpg')}}"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />
                                            </a>
                                        </div>

                                        <!--COUNTDOWN BOX-->
                                        <div class="countdown_box">
                                            <div class="countdown_inner">
                                                <div class="title ">Esta oferta limitada acaba</div>
                                                <script type="text/javascript">
                                                    $(function() {
                                                        var austDay = new Date(2017, 8 - 1, 31);
                                                        $('.defaultCountdown-74').countdown(austDay, function(event) {
                                                            var $this = $(this).html(event.strftime('' +
                                                                '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Dias </div></div>' +
                                                                '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Horas </div></div>' +
                                                                '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Min </div></div>' +
                                                                '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Seg </div></div>'));
                                                        });


                                                    });
                                                </script>
                                                <div class="defaultCountdown-74"></div>
                                            </div>
                                        </div>
                                        <div class="box-label"><span class="label-product label-sale">-15%</span></div>

                                        <!-- BOX BUTTON -->
                                        <div class="button-group">
                                            <!-- CART -->
                                            <button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add('168', '1');"><i class="fa fa-shopping-cart"></i></button>
                                            <!-- WISHLIST 
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add('168');"><i class="fa fa-heart"></i></button>-->
                                            <!-- COMPARE
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add('168');"><i class="fa fa-retweet"></i></button> -->
                                            <!-- QUICK VIEW -->
                                            <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="{{url('product/quickview/168')}}"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                    </div>

                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="ratings">
                                                <!--
                                                <div class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                </div>
                                                -->
                                            </div>

                                            <h4><a href="{{url('produto/detalhes/4')}}">Nome do Produto</a></h4>
                                            <div class="price">
                                                À vista <span class="price-new">R$ 45,00</span> </br>
                                                <span class="price-term">No Cartão 3x R$ 15,00</span>
                                            </div>
                                            <div class="description  hidden ">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="product-layout col-lg-2 col-md-4 col-sm-6 col-xs-12 ">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="label-stock label label-success">3 Cores</div>
                                        <div class="product-image-container lazy second_img ">
                                            <a href="{{url('produto/detalhes/4')}}">
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto4-cor3.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto4-cor3.jpg')}}"  title="Nome do Produto" class="img-1 img-responsive" />
                                                <img data-src="{{url('assets/frontend/images/products/300x300/produto4-cor1.jpg')}}" 
                                                    src="{{url('assets/frontend/images/products/300x300/produto4-cor1.jpg')}}"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />
                                            </a>
                                        </div>
                                        <div class="box-label"></div>
                                        <div class="button-group">
                                            <!-- CART -->
                                            <button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add('167', '1');"><i class="fa fa-shopping-cart"></i></button>
                                            <!-- WISHLIST 
                                            <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add('c');"><i class="fa fa-heart"></i></button>-->

                                            <!-- COMPARE
                                            <button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add('167');"><i class="fa fa-retweet"></i></button> -->
                                            <!-- QUICK VIEW -->
                                            <a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="{{url('product/quickview/167')}}"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <div class="ratings">
                                                <!--
                                                <div class="rating-box">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                </div>
                                                -->
                                            </div>
                                            <h4><a href="{{url('produto/detalhes/4')}}">Nome do Produto</a></h4>
                                            <div class="price">
                                                À vista <span class="price-new">R$ 45,00</span> </br>
                                                <span class="price-term">No Cartão 3x R$ 15,00</span>
                                            </div>
                                            <div class="description  hidden">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                     @include('frontend.categories.filters.filter-3')

                </div>
            </div>

            <script type="text/javascript">
                <!--
                $('.view-mode .list-view button').bind("click", function() {
                    if ($(this).is(".active")) {
                        return false;
                    }
                    $.cookie('listingType', $(this).is(".grid") ? 'grid' : 'list', {
                        path: '/'
                    });
                    location.reload();
                });
                //-->
            </script>
        </div>
    </div>
@endsection