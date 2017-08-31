@extends('frontend.layout.template-1')
@push('meta')
    <meta property="og:title" content=" Nome do Produto" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Nome do Site" />
    <meta property="og:image" content="{{url('assets/frontend/images/products/300x300/produto8-cor1.jpg')}}" />
    <meta property="og:url" content="{{url('distribuidor/calcados/nome-produto')}}" />
    <meta property="og:description" content="Descrição do produto" />
    <meta property="og:image:width" content="450" />
    <meta property="og:image:height" content="298" />
@endpush
@push('css')
    <link rel="stylesheet" href="{{url('assets/frontend/js/soconfig/css/lightslider.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/jquery/datetimepicker/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_extra_slider/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_extra_slider/css/css3.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_extra_slider/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_extra_slider/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_countdown/css/style.css')}}">
@endpush


@push('scripts')
    <script src="{{url('assets/frontend/js/soconfig/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
    <script src="{{url('assets/frontend/js/soconfig/js/lightslider.js')}}"></script>
    <script src="{{url('assets/frontend/js/jquery/datetimepicker/moment.js')}}"></script>
    <script src="{{url('assets/frontend/js/jquery/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{url('assets/frontend/js/avd_extra_slider/js/owl.carousel.js')}}"></script>
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
    <link href="{{url('distribuidor/calcados/nome-produto')}}" rel="canonical" />
@endpush
@push('body')
<body class="product-product-182 ltr res layout-1">
@endpush
@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumbs">
        <div class="container ">
            <div class="current-name">Nome do Produto</div>
            <ul class="breadcrumb">
                <li><a href="{{url('/')}}"><i class="fa fa-home"></i></a></li>
                <li><a href="{{url('/')}}"> Nome da Seção</a></li>
            </ul>
        </div>
    </div>

    <div class="content-main container product-detail product-full">
        <div class="row">

            <div id="content" class="col-sm-12">
                <div class="row product-view product-info product-view-bg clearfix" itemprop="offerDetails" itemscope itemtype="http://schema.org/Product">
                    <div class="content-product-left   col-md-6 col-sm-12 col-xs-12 ">
                        <div id="thumb-slider" class="thumb-vertical-outer">
                            <span class="btn-more prev-thumb nt"><i class="fa fa-arrow-up"></i></span>
                            <span class="btn-more next-thumb nt"><i class="fa fa-arrow-down"></i></span>
                            <ul class="thumb-vertical">
                                <li class="owl2-item">
                                     <a id="img-3" onclick="selColor(3)" data-color="Branco" data-index="0" class="img thumbnail" data-image="{{url('assets/frontend/images/products/700x700/produto1-cor3.jpg')}}" title=" Nome do Produto">
                                        <img src="{{url('assets/frontend/images/products/300x300/produto1-cor3.jpg')}}" title=" Nome do Produto" alt=" Nome do Produto" />
                                    </a>                                    
                                </li>
                                <li class="owl2-item">
                                     <a id="img-2" onclick="selColor(2)" data-color="Bordo" data-index="1" class="img thumbnail" data-image="{{url('assets/frontend/images/products/700x700/produto1-cor2.jpg')}}" title=" Nome do Produto">
                                        <img src="{{url('assets/frontend/images/products/300x300/produto1-cor2.jpg')}}" title=" Nome do Produto" alt=" Nome do Produto" />
                                    </a>                                    
                                </li>
                                <li class="owl2-item">
                                     <a id="img-1" onclick="selColor(1)" data-color="Bordo" data-index="2" class="img thumbnail" data-image="{{url('assets/frontend/images/products/700x700/produto1-cor1.jpg')}}" title=" Nome do Produto">
                                        <img src="{{url('assets/frontend/images/products/300x300/produto1-cor1.jpg')}}" title=" Nome do Produto" alt=" Nome do Produto" />
                                    </a>                                    
                                </li>
                            </ul>                          

                        </div>


                        <div id="new_color" class="large-image vertical">
                            <img itemprop="image" class="product-image-zoom" src="{{url('assets/frontend/images/products/700x700/produto1-cor3.jpg')}}" data-zoom-image="{{url('assets/frontend/images/products/900x900/produto1-cor3.jpg')}}" title=" Nome do Produto" alt=" Nome do Produto" />
                            <div class="box-label">
                                <span class="label-product label-sale">-15%  </span><br>
                            </div>
                        </div>

                    </div>

                    <div class="content-product-right  col-md-6 col-sm-12 col-xs-12">
                        <div class="title-product">
                            <h1 itemprop="name"> Nome do Produto</h1>
                        </div>
                        <!-- Review -->
                        <div class="box-review" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">
                            <div class="ratings">
                                <div class="rating-box" itemprop="ratingValue" content="5">
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                </div>
                            </div>

                            <a class="reviews_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;" itemprop="reviewCount" content="1">1 Comentário </a> | <a class="write_review_button" href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Faça um comentário</a>
                        </div>


                        <div class="product-label">
                            <div class="product_page_price price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <span class="price-new">
                                    <span itemprop="price" id="price-old" content="54.00">À vista R$ 40,00</span>
                                    <meta itemprop="priceCurrency" content="BRL" />
                                </span>
                                <div class="price-tax"><span>Em até 3x sem juros:</span> R$ 45.00</div>
                            </div>
                        </div>

                        <div class="product-box-desc">
                            <div id="new_code" class="model"><span>Ref:</span> #6575884</div>
                            <div id="new_stock" class="stock"><span> Estoque: </span> <i class="fa fa-check-square-o"></i> 18 cx</div>
                        </div>
                        <div class="short_description form-group" itemprop="description">
                            <h3>Descrição:</h3>
                            Descrição do produto
                        </div>

                        <!--Countdown box-->
                        <div class="countdown_box">
                            <div class="countdown_inner">
                                <div class="title ">ESTA OFERTA É POR TEMPO LIMITADO</div>
                                <script type="text/javascript">
                                    $(function() {
                                        var austDay = new Date(2018, 2 - 1, 09);
                                        $('.defaultCountdown-76').countdown(austDay, function(event) {
                                            var $this = $(this).html(event.strftime('' +
                                                '<div class="time-item time-day"><div class="num-time">%D</div><div class="name-time">Dias </div></div>' +
                                                '<div class="time-item time-hour"><div class="num-time">%H</div><div class="name-time">Horas </div></div>' +
                                                '<div class="time-item time-min"><div class="num-time">%M</div><div class="name-time">Min </div></div>' +
                                                '<div class="time-item time-sec"><div class="num-time">%S</div><div class="name-time">Seg </div></div>'));
                                        });
                                    });
                                </script>
                                <div class="defaultCountdown-76">
                                    <div class="time-item time-day">
                                        <div class="num-time">206</div>
                                        <div class="name-time">Dias </div>
                                    </div>
                                    <div class="time-item time-hour">
                                        <div class="num-time">02</div>
                                        <div class="name-time">Horas </div>
                                    </div>
                                    <div class="time-item time-min">
                                        <div class="num-time">42</div>
                                        <div class="name-time">Min </div>
                                    </div>
                                    <div class="time-item time-sec">
                                        <div class="num-time">31</div>
                                        <div class="name-time">Seg </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="product">

                            <div class="options clearfix">
                                <h3>Cores disponíveis</h3>
                                <div class="box-checkbox form-group required">

                                    <label id="new_name" class="control-label">Branco</label>
                                    <div id="input-option234">

                                        <div class="checkbox  radio-type-button">
                                            <label id="label_3" class="color active" style="border:solid1px#000;background-color:#ffffff;" data-title="Branco" data-toggle='tooltip'>
                                                <input type="radio" name="color_id" value="3" />
                                            </label>
                                        </div>
                                        <div class="checkbox  radio-type-button">
                                            <label id="label_2" class="color" style="background-color:#b43e3e;" data-title="Bordo" data-toggle='tooltip'>
                                                <input type="radio" name="color_id" value="2" />
                                                <span class="option-content-box">
                                                    <span class="option-name"></span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="checkbox  radio-type-button">
                                            <label id="label_1" class="color" style="background-color:#30344d;" data-title="Azul" data-toggle='tooltip'>
                                                <input type="radio" name="color_id" value="1" />
                                                <span class="option-content-box">
                                                    <span class="option-name"></span>
                                                </span>
                                            </label>
                                        </div>


                                        <script type="text/javascript">

                                            $(document).ready(function() {
                                                $('#input-option234').on('click', 'label', function() {
                                                    $('#input-option234 label').removeClass("active");
                                                    $(this).addClass("active");
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <div class="cart clearfix">
                                <!-- QUANTIDADE -->
                                <div class="form-group box-info-product">
                                    <div class="option quantity">
                                        <label>Qtd</label>
                                        <div class="input-group quantity-control">
                                            <span class="input-group-addon product_quantity_down fa fa-minus"></span>
                                            <input class="form-control" type="text" name="quantity" value="1" />
                                            <input type="hidden" name="product_id" value="182" />
                                            <span class="input-group-addon product_quantity_up fa fa-plus"></span>
                                        </div>
                                    </div>
                                    <div class="detail-action">
                                        <!-- CART -->
                                        <div class="cart">
                                            <input type="button" title="Adicionar" value=" Adicionar " data-loading-text="Aguarde..." id="button-cart" class="btn btn-mega btn-lg" />
                                        </div>
                                        <!--
                                        <div class="add-to-links wish_comp">
                                            <ul class="blank">
                                                <li class="wishlist">
                                                    <a class="icon" data-toggle="tooltip" title="Desejo" onclick="wishlist.add('182');"><i class="fa fa-heart"></i></a>
                                                </li>
                                                <li class="compare">
                                                    <a class="icon" data-toggle="tooltip" title="Compare" onclick="compare.add('182');"><i class="fa fa-retweet"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        -->
                                    </div>
                                </div>
                            </div>
                            <!-- COMPARTILHAR -->
                            <div class="social-share">
                                <div class="title-share">Compartilhar</div>
                                    <div class="wrap-content">
                                        <a href="#" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                        <a href="#" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                            <i class="fa fa-dribbble"></i>
                                        </a>
                                        <a href="#" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        <!-- end box info product -->
                        </div>
                    </div>

                    @include('frontend.popups.groups-1')

                    <div class="row product-bottom">
                        <div id="new_zoom">
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    var zoomCollection = '.large-image img.product-image-zoom';
                                    $(zoomCollection).elevateZoom({
                                        zoomType: "inner",
                                        lensSize: "250",
                                        easing: true,
                                        gallery: 'thumb-slider',
                                        cursor: 'pointer',
                                        galleryActiveClass: "active"
                                    });
                                    $('.large-image img.product-image-zoom').magnificPopup({
                                        items: [{
                                            src: "{{url('assets/frontend/images/products/700x700/produto1-cor3.jpg')}}"
                                        }, {
                                            src: "{{url('assets/frontend/images/products/700x700/produto1-cor2.jpg')}}"
                                        }, {
                                            src: "{{url('assets/frontend/images/products/700x700/produto1-cor1.jpg')}}"
                                        }, ],
                                        gallery: {
                                            enabled: true,
                                            preload: [0, 2]
                                        },
                                        type: 'image',
                                        mainClass: 'mfp-fade',
                                        callbacks: {
                                            open: function() {
                                                var activeIndex = parseInt($('#thumb-slider .img.active').attr('data-index'));
                                                var magnificPopup = $.magnificPopup.instance;
                                                magnificPopup.goTo(activeIndex);
                                            }
                                        }
                                    });

                                });
                            </script>
                        </div>

                        @include('frontend.products.tabs-2')

                        @include('frontend.products.related-2')

                    </div>

                </div>


            </div>
        </div>

<script type="text/javascript">
    <!--
    $('select[name=\'recurring_id\'], input[name="quantity"]').change(function() {
        $.ajax({
            url: '{{url("product/$id/description/recurring")}}',
            type: 'post',
            data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
            dataType: 'json',
            beforeSend: function() {
                $('#recurring-description').html('');
            },
            success: function(json) {
                $('.alert, .text-danger').remove();

                if (json['success']) {
                    $('#recurring-description').html(json['success']);
                }
            }
        });
    });
    //-->
</script>

<script type="text/javascript">
    <!--
    $('#button-cart').on('click', function() {
        $.ajax({
            url: 'carrinho',
            type: 'post',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},           
            data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
            dataType: 'json',
            beforeSend: function() {
                $('#button-cart').button('loading');
            },
            complete: function() {
                $('#button-cart').button('reset');
            },
            success: function(json) {
                $('.alert, .text-danger').remove();
                $('.form-group').removeClass('has-error');

                if (json['error']) {
                    if (json['error']['option']) {
                        for (i in json['error']['option']) {
                            var element = $('#input-option' + i.replace('_', '-'));

                            if (element.parent().hasClass('input-group')) {
                                element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                            } else {
                                element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                            }
                        }
                    }

                    if (json['error']['recurring']) {
                        $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
                    }

                    // Highlight any found errors
                    $('.text-danger').parent().addClass('has-error');
                }
                if (json['success']) {
                    $('#content').parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="fa fa-close close" data-dismiss="alert"></button></div>');
                    $('#cart  .total-shopping-cart ').html(json['total']);
                    $('#cart > ul').load('{{route("cart.info")}} ul li');
                    $('.so-groups-sticky #popup-mycart .popup-content').load('{{route("cart.popup")}} .popup-content .cart-header');
                    $('.text-danger').remove();
                    timer = setTimeout(function() {
                        $('.alert').addClass('fadeOut');
                    }, 4000);
                }

            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });

    //-->
</script>

<script type="text/javascript">
    <!--
    $('.date').datetimepicker({
        pickTime: false
    });

    $('.datetime').datetimepicker({
        pickDate: true,
        pickTime: true
    });

    $('.time').datetimepicker({
        pickDate: false
    });

    $('button[id^=\'button-upload\']').on('click', function() {
        var node = this;

        $('#form-upload').remove();

        $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

        $('#form-upload input[name=\'file\']').trigger('click');
        if (typeof timer != 'undefined') {
            clearInterval(timer);
        }
        timer = setInterval(function() {
            if ($('#form-upload input[name=\'file\']').val() != '') {
                clearInterval(timer);

                $.ajax({
                    url: "{{url('product/file/upload')}}",
                    type: 'post',
                    headers: {'X-CSRF-TOKEN': '{{ csrf_token()}}'},
                    dataType: 'json',
                    data: new FormData($('#form-upload')[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $(node).button('loading');
                    },
                    complete: function() {
                        $(node).button('reset');
                    },
                    success: function(json) {
                        $('.text-danger').remove();

                        if (json['error']) {
                            $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                        }

                        if (json['success']) {
                            alert(json['success']);

                            $(node).parent().find('input').attr('value', json['code']);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }
                });
            }
        }, 500);
    });
    //-->
</script>

<script type="text/javascript">
    <!--
    $('#review').delegate('.pagination a', 'click', function(e) {
        e.preventDefault();

        $('#review').fadeOut('slow');
        $('#review').load(this.href);
        $('#review').fadeIn('slow');
    });

    $('#review').load("{{url('product/'.$id.'/review')}}");

    $('#button-review').on('click', function() {
        $.ajax({
            url: '{{url("product/$id/review")}}',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token()}}'},
            type: 'post',
            dataType: 'json',
            data: 'name=' + encodeURIComponent($('input[name=\'name\']').val()) + '&text=' + encodeURIComponent($('textarea[name=\'text\']').val()) + '&rating=' + encodeURIComponent($('input[name=\'rating\']:checked').val() ? $('input[name=\'rating\']:checked').val() : ''),
            beforeSend: function() {
                $('#button-review').button('loading');
            },
            complete: function() {
                $('#button-review').button('reset');
            },
            success: function(json) {
                $('.alert-success, .alert-danger').remove();

                if (json.error) {
                    $('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
                }

                if (json.success) {
                    $('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

                    $('input[name=\'name\']').val('');
                    $('textarea[name=\'text\']').val('');
                    $('input[name=\'rating\']:checked').prop('checked', false);
                }
                timer = setTimeout(function() {
                        $('.alert').hide('fadeOut');
                }, 4000);
            }
        });
    });

    //-->
</script>

<script type="text/javascript">
    <!--
    $(document).ready(function() {

        $('.product-options li.radio').click(function() {
            $(this).addClass(function() {
                if ($(this).hasClass("active")) return "";
                return "active";
            });

            $(this).siblings("li").removeClass("active");
            $(this).parent().find('.selected-option').html('<span class="label label-success">' + $(this).find('img').data('original-title') + '</span>');
        })

        // CUSTOM BUTTON
        $(".thumb-vertical-outer .next-thumb").click(function() {
            $(".thumb-vertical-outer .lSNext").trigger("click");
        });

        $(".thumb-vertical-outer .prev-thumb").click(function() {
            $(".thumb-vertical-outer .lSPrev").trigger("click");
        });

        $(".thumb-vertical-outer .thumb-vertical").lightSlider({
            item: 4,
            autoWidth: false,
            vertical: true,
            slideMargin: 10,
            verticalHeight: 414,
            pager: false,
            controls: true,
            prevHtml: '<i class="fa fa-arrow-up"></i>',
            nextHtml: '<i class="fa fa-arrow-down"></i>',
            responsive: [{
                    breakpoint: 1199,
                    settings: {
                        verticalHeight: 310,
                        item: 3,
                        slideMargin: 5,
                    }
                }, {
                    breakpoint: 1024,
                    settings: {
                        verticalHeight: 560,
                        item: 5,
                        slideMargin: 5,
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        verticalHeight: 604,
                        item: 4,
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        verticalHeight: 200,
                        item: 1,
                    }
                }

            ]

        });


        $("#thumb-slider .owl2-item").each(function() {
            $(this).find("[data-index='0']").addClass('active');
        });

        $('.thumb-video').magnificPopup({
            type: 'iframe',
            iframe: {
                patterns: {
                    youtube: {
                        index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).
                        id: 'v=', // String that splits URL in a two parts, second part should be %id%
                        src: '//www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe. 
                    },
                }
            }
        });
    });


    //-->
</script>

<script type="text/javascript">
    var ajax_color = function() {
        $.ajax({
            type: 'POST',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token()}}'},
            url: '{{url("product/$id/color")}}',
            data: $('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\']:checked, .product-info input[type=\'checkbox\']:checked, .product-info select, .product-info textarea'),
            dataType: 'json',
            success: function(json) {
                if (json.success) {
                    if ( json.new_stock == false){
                        $("#button-cart").attr("disabled", true);
                        $("#new_stock").html('<span> Estoque: </span> 0 cx');
                    } else {
                        change_stock('#new_stock', json.new_stock);
                        $("#button-cart").attr("disabled", false);
                    }
                    change_price('#price-special', json.new_price.special);
                    change_price('#price-tax', json.new_price.tax);
                    change_price('#price-old', json.new_price.price);
                    change_name('#new_name', json.new_name);
                    change_code('#new_code', json.new_code);
                    change_color('#new_color', json.new_color);
                    change_zoom('#new_zoom', json.new_zoom);
                }
            }
        });
    }

    var change_price = function(id, new_price) {
        $(id).html(new_price);
    }
    var change_name = function(id, new_name) {
        $(id).html(new_name);
    }
    var change_stock = function(id, new_stock) {
        $(id).html(new_stock);
    }
    var change_code = function(id, new_code) {
        $(id).html(new_code);
    }
    var change_color = function(id, new_color) {
        $(id).html(new_color);
    }
    var change_zoom = function(id, new_zoom) {
        $(id).html(new_zoom);
    }

    $('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\'], .product-info input[type=\'checkbox\'], .product-info select, .product-info textarea, .product-info input[name=\'quantity\']').on('click', function() {
        ajax_color();
        $("#thumb-slider a").parent().find('a').removeClass("active");
        $('#img-'+$(this).val()).addClass('active');
    });
</script>

@endsection