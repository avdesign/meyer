<!DOCTYPE html>

<html class="js video audio" lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8" />
    <title>{{$title or config('app.name')}}</title>

    <base href="{{url('/')}}" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->

    <link rel="stylesheet" href="http://meyer.dev/assets/frontend/js/soconfig/css/lightslider.css">

    <link rel="stylesheet" href="{{url('assets/frontend/js/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/soconfig/css/lib.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/theme/meyer-calcados/css/ie9-and-up.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/jquery/datetimepicker/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_page_builder/assets/css/shortcodes.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_page_builder/css/style_render_348.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_page_builder/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_page_builder/css/style_render_356.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_page_builder/css/style_render_357.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_newletter_custom_popup/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_extra_slider/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_tools/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_countdown/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/theme/meyer-calcados/css/layout1/orange.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/theme/meyer-calcados/css/header/header1.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/theme/meyer-calcados/css/footer/footer3.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/theme/meyer-calcados/css/responsive.css')}}">


    <script src="{{url('assets/frontend/js/jquery/jquery-2.1.1.min.js')}}"></script>
    <script src="{{url('assets/frontend/js/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/frontend/js/soconfig/js/libs.js')}}"></script>
    <script src="{{url('assets/frontend/js/soconfig/js/so.system.js')}}"></script>
    <script src="{{url('assets/frontend/theme/meyer-calcados/js/so.custom.js')}}"></script>
    <script src="{{url('assets/frontend/theme/meyer-calcados/js/common.js')}}"></script>
    <script src="{{url('assets/frontend/js/soconfig/js/jquery.unveil.js')}}"></script>

    <script src="{{url('assets/frontend/js/soconfig/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
    <script src="{{url('assets/frontend/js/soconfig/js/lightslider.js')}}"></script>
    <script src="{{url('assets/frontend/js/jquery/datetimepicker/moment.js')}}"></script>
    <script src="{{url('assets/frontend/js/jquery/datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{url('assets/frontend/js/avd_extra_slider/js/owl.carousel.js')}}"></script>
    <script src="{{url('assets/frontend/js/avd_tools/js/script.js')}}"></script>
    <script src="{{url('assets/frontend/js/avd_page_builder/assets/js/shortcodes.js')}}"></script>
    <script src="{{url('assets/frontend/js/avd_page_builder/js/section.js')}}"></script>
    <script src="{{url('assets/frontend/js/avd_page_builder/js/modernizr.video.js')}}"></script>
    <script src="{{url('assets/frontend/js/avd_page_builder/js/swfobject.js')}}"></script>
    <script src="{{url('assets/frontend/js/avd_page_builder/js/video_background.js')}}"></script>
    <script src="{{url('assets/frontend/js/avd_countdown/js/jquery.cookie.js')}}"></script>

 

    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>


    <style type="text/css">
        body {
            font-family: 'Poppins', sans-serif
        }
    </style>

    <style type="text/css">
        .font-title,
        .container-megamenu.horizontal ul.megamenu>li>a,
        ul.megamenu li .sub-menu .content ul li a,
        .breadcrumbs .current-name,
        ul.breadcrumb li a,
        .so-deal .item-time-w,
        .modtitle,
        .so_filter_wrap,
        .module h2,
        .container-megamenu.vertical {
            font-family: 'Roboto', sans-serif
        }
    </style>

    <script>
        var avdJson = {!! json_encode([
            "cart_url" => url('carrinho/'),
            "cart_info" => route('cart.info'),
            "cart_popup" => route('cart.popup'),
            "token" => csrf_token()
        ]) !!};
    </script>

    <link href="{{url('distribuidor/calcados/nome-produto')}}" rel="canonical" />

</head>

<body class="extension-soconfig-quickview-79 ltr res layout-1  loaded">
    <div id="wrapper" class="wrapper-full banners-effect-5">

        <style type="text/css">
            body {
                background: none;
            }

            #wrapper {
                box-shadow: none;
                background: #fff;
            }

            #wrapper>*:not(.product-detail) {
                display: none;
            }

            #wrapper .product-view {
                margin: 0;
            }

            #wrapper .short_description {
                padding: 0
            }

            .container {
                width: 100%;
            }

            .no-res {
                width: auto;
            }

            .rtl .zoomWindowContainer .zoomWindow {
                left: auto!important;
                right: 0!important;
            }
        </style>

        <div class="product-detail">
            <div id="product-quick" class="product-info">
                <div class="product-view row">
                    <div class="left-content-product">
                        <div class="content-product-left class-honizol  col-sm-5">

                            <div id="new_color" class="large-image">
                                <img itemprop="image" class="product-image-zoom" src="{{url('assets/frontend/images/products/700x700/produto1-cor3.jpg')}}" data-zoom-image="{{url('assets/frontend/images/products/900x900/produto1-cor3.jpg')}}" title=" Nome do Produto" alt=" Nome do Produto" />
                                <div class="box-label">
                                    <span class="label-product label-sale">-15%  </span><br>
                                </div>
                            </div>

                            <div id="thumb-slider" class="full_slider owl-carousel">

                                <a id="img-3" onclick="selColor(3)" data-color="Branco" data-index="0" class="img thumbnail" data-image="{{url('assets/frontend/images/products/700x700/produto1-cor3.jpg')}}" title=" Nome do Produto">
                                    <img src="{{url('assets/frontend/images/products/300x300/produto1-cor3.jpg')}}" title=" Nome do Produto" alt=" Nome do Produto" />
                                </a>

                                <a id="img-2" onclick="selColor(2)" data-color="Bordo" data-index="1" class="img thumbnail" data-image="{{url('assets/frontend/images/products/700x700/produto1-cor2.jpg')}}" title=" Nome do Produto">
                                    <img src="{{url('assets/frontend/images/products/700x700/produto1-cor2.jpg')}}" title=" Nome do Produto" alt=" Nome do Produto" />
                                </a>

                                <a id="img-1" onclick="selColor(1)"  data-color="Azul" data-index="2" class="img thumbnail" data-image="{{url('assets/frontend/images/products/700x700/produto1-cor1.jpg')}}" title=" Nome do Produto">
                                    <img src="{{url('assets/frontend/images/products/300x300/produto1-cor1.jpg')}}" title=" Nome do Produto" alt=" Nome do Produto" />
                                </a>

                            </div>

                            <script type="text/javascript">
                                function selColor(id)
                                {
                                    $("#new_name").html($("#img-"+id).attr('data-color'));
                                    $("#input-option234 label").parent().find('label').removeClass("active");
                                    $('#label_'+id).addClass('active');
                                }
                            </script>


                            <script type="text/javascript">
                                $(function($) {
                                    var $nav = $("#thumb-slider");                            
                                    $nav.each(function() {
                                        $(this).owlCarousel2({
                                            nav: true,
                                            dots: false,
                                            slideBy: 1,
                                            margin: 10,
                                            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                                            responsive: {
                                                0: {
                                                    items: 2
                                                },
                                                600: {
                                                    items: 4
                                                },
                                                1000: {
                                                    items: 4
                                                },
                                                1200: {
                                                    items: 5
                                                }

                                            }
                                        });
                                    })

                                });
                            </script>
                        </div>

                        <div class="content-product-right col-sm-7">

                            <div class="title-product">
                                <h1>Nome do Produto</h1>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <!-- Review -->
                                    <div class="box-review">
                                        <!--
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                            </div>
                                        </div>
                                        -->
                                        <span class="reviews_button">1 Comentário</span>
                                    </div>

                                    <div class="short_description">Nome da marca</div>

                                    <div class="short_description">Nome da categoria</div>

                                    <div class="product_page_price price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <span class="price-new">
                                            <span itemprop="price" id="price-old" content="54.00">À vista R$ 40,00</span>
                                            <meta itemprop="priceCurrency" content="BRL" />
                                        </span>
                                        <div class="price-tax"><span>Em até 3x sem juros:</span> R$ 45.00</div>
                                    </div>

                                    <!--Countdown box-->
                                    <div class="countdown_box">
                                        <div class="countdown_inner">
                                            <div class="title ">OFERTA POR TEMPO LIMITADO</div>
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


                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="product-box-desc">
                                        <div id="new_code" class="model"><span>Ref:</span> #6575884</div>
                                        <div id="new_stock" class="stock"><span> Estoque:</span> <i class="fa fa-check-square-o"></i> 18 cx</div>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th scope="row">QTD:</th>                           
                                                    <th>3/35</th>
                                                    <th>2/36</th>
                                                    <th>3/37</th>
                                                    <th>2/38</th>
                                                    <th>3/39</th>
                                                </tr>
                                            </thead>
                                        </table>


                                        <div class="short_description form-group" itemprop="description">
                                            <h3>Descrição:</h3>
                                            Descrição do produto
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
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </div>
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
                                                    <input type="radio" name="color_id" value="3" checked />
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
                                    <!-- QUANTITY -->
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




                            </div>

                        </div>
                    </div>
                    <!-- end - left-content-product -->

                </div>


            </div>
        </div>


<script type="text/javascript">
    <!--
    $('select[name=\'recurring_id\'], input[name="quantity"]').change(function() {
        $.ajax({
            url: '{{url("product/$id/description/recurring")}}',
            type: 'post',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},        
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

<script type="text/javascript"><!--
$('#button-cart').on('click', function() {
    $.ajax({
        url: "{{route('quickview.add')}}",
        headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},           
        type: 'post',
        data: $('#product-quick input[type=\'text\'], #product-quick input[type=\'hidden\'], #product-quick input[type=\'radio\']:checked, #product-quick input[type=\'checkbox\']:checked, #product-quick select, #product-quick textarea'),
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
                parent.$('#content').parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="fa fa-close close" data-dismiss="alert"></button></div>');
                parent.$('#cart  .total-shopping-cart ').html(json['total'] );
                parent.$('#cart > ul').load('{{route("cart.info")}} ul li');
                parent.$('.so-groups-sticky #popup-mycart .popup-content').load('{{route("cart.popup")}} .popup-content .cart-header');
                parent.$('.text-danger').remove();
                timer = setTimeout(function () {
                    parent.$('.alert').addClass('fadeOut');
                }, 4000);
            }
            
            /*if (json['success']) {
                parent.addProductNotice(json['title'], json['thumb'], json['success'], 'success');
                
                // Need to set timeout otherwise it wont update the total
                setTimeout(function () {
                    parent.$('#cart .text-shopping-cart').html(json['total'] );
                    $('.text-danger').remove();
                }, 100);
                parent.$('#cart > ul').load('index.php?route=common/cart/info ul li');
            }*/
            
        },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});

var wishlist = {
    'add': function(product_id) {
        $.ajax({
            url: 'index.php?route=extension/soconfig/wishlist/add',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            /*success: function(json) {
                
                if (json['success']) {
                    parent.addProductNotice(json['title'], json['thumb'], json['success'], 'success');
                }
                if (json['info']) {
                  parent.addProductNotice(json['title'], json['thumb'], json['info'], 'warning');
                }
                parent.$('#wishlist-total').html(json['total']);
                parent.$('#wishlist-total').attr('title', json['total']);
            }*/
            success: function(json) {
                $('.alert').remove();
                if (json['redirect']) {
                    location = json['redirect'];
                }
                if (json['success']) {
                    parent.$('#content').parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="fa fa-close close" data-dismiss="alert"></button></div>');
                }
                if (json['info']) {
                    parent.$('#content').parent().before('<div class="alert alert-info"><i class="fa fa-info-circle"></i> ' + json['info'] + '<button type="button" class="fa fa-close close"></button></div>');
                }
                parent.$('#wishlist-total').html(json['total']);
                parent.$('#wishlist-total').attr('title', json['total']);
                timer = setTimeout(function() {
                    parent.$('.alert').addClass('fadeOut');
                }, 4000);
            },
        });
    }
}


var compare = {
    'add': function(product_id) {
        $.ajax({
            url: 'index.php?route=extension/soconfig/compare/add',
            type: 'post',
            data: 'product_id=' + product_id,
            dataType: 'json',
            /*success: function(json) {
                if (json['success']) {
                    parent.addProductNotice(json['title'], json['thumb'], json['success'], 'success');
                    parent.$('#compare-total').html(json['total']);
                }
            }*/
            success: function(json) {
                $('.alert').remove();
                if (json['info']) {
                   parent. $('#content').parent().before('<div class="alert alert-info"><i class="fa fa-info-circle"></i>  ' + json['info'] + '<button type="button" class="fa fa-close close"></button></div>');
                }
                if (json['success']) {
                    parent.$('#content').parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i>' + json['success'] + '<button type="button" class="fa fa-close close"></button></div>');
                    if (json['warning']) {
                        parent.$('.alert').append('<div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> ' + json['warning'] + '<button type="button" class="fa fa-close close"></button></div>');
                    }
                    parent.$('#compare-total').attr('data-original-title', json['total']);
                    parent.$('#compare-total').html('<span>' + json['total'] + '</span>');
                }
                timer = setTimeout(function() {
                    parent.$('.alert').addClass('fadeOut');
                }, 4000);
            },
        });
    }
    
}
//-->
</script>

<script type="text/javascript"><!--
    $('.product-options li.radio').click(function(){
        $(this).addClass(function() {
            if($(this).hasClass("active")) return "";
            return "active";
        });
        
        $(this).siblings("li").removeClass("active");
        $(this).parent().find('.selected-option').html('<span class="label label-success">'+ $(this).find('img').data('original-title') +'</span>');
    })

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
                    url: 'index.php?route=tool/upload',
                    type: 'post',
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



    </div>


</body>

</html>