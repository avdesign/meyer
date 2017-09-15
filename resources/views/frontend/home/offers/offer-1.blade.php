@if(isset($colorsOffers))
    <div class="container page-builder-ltr">
        @php  
            $rand1 = numLetter('1357', 'letter');
            $rand2 = numLetter('2468', 'letter');
            $rand3 = numLetter('0246', 'letter');
            $rand4 = numLetter('9753', 'letter');
            $rand5 = numLetter('8642', 'letter'); 
        @endphp
        <div class="row row_{{$rand1}} row-flashsale box-content2 ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_{{$rand2}}">
                <div class="box-title">
                    <h3>Venda Rápida: Ofertas da Semana </h3>
                    <a href="#"> Ver Todos </a>
                </div>
            </div>
            @php  $i=1; @endphp

            @foreach ($sections as $section)

                @if($section->banner_active == 'Ativo' && $section->banner_image != '')

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col_{{$rand3}} col-style">
                    <div class="row row_tyn0 row-style ">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_{{$rand4}} col-style">
                            <div class="banner-deal">
                                <a href="#">
                                    <img src="{{urf('assets/imagens/secoes/870x229')}}/{{$section->banner_image}}" alt="image">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_{{$rand5}} col-style">
                            <script>
                                //<![CDATA[
                                var listdeal{{$i}} = [];
                                //]]>
                            </script>
                            <div class="module so-deals-ltr deals-layout1">
                                <div class="modcontent">
                                    <div id="offerts_section_{{$section->id}}" class="so-deal modcontent clearfix preset00-1 preset01-1 preset02-1 preset03-1 preset04-1 button-type1 style2">
                                        <div class="extraslider-inner products-list grid" data-effect="none">
                                        @foreach($section->categories()->inRandomOrder()->get() as $category)
                                        @foreach($category->products()->where('offer', 1)->inRandomOrder()->limit(1)->get() as $product)
                                        @foreach($product->images()->where('active', 1)->orderBy('cover', 'desc')->limit(1)->get() as $image)
                                            @php
                                                if($image->cover == 1 && $image->active == 1) {
                                                    $src = urf("assets/imagens/produtos/300x300/$image->image");
                                                } else {
                                                    $src = urf("assets/imagens/produtos/300x300/$image->image");
                                                }
                                            @endphp
                                        @endforeach

                                        @foreach($product->prices()->where('profile', 'Normal')->get() as $price)
                                                <div class="item">
                                                    <div class="product-layout product-thumb transition">
                                                        <div class="row">
                                                            <div class="item-left col-lg-6 col-md-6">
                                                                <div class="image">
                                                                    <span class="label-product label-product-sale">-{{rand($price->offer_percent, 2)}}%  </span>
                                                                    <a href="#" target="_self" class="img-link">
                                                                        <img src="{{$src}}" alt="Nome do Produto" class="img-responsive">
                                                                    </a>
                                                                    <div class="button-group so-quickview">
                                                                        <button class="btn-button addToCart" type="button" data-toggle="tooltip" title="Adicionar" onclick="cart.add('{{$product->id}}');"><i class="fa fa-shopping-cart"></i></button>
                                                                        
                                                                        <a class="hidden" data-product='{{$product->id}}' href="#" target="_self"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item-right col-lg-6 col-md-6">
                                                                <div class="category-name">
                                                                    <a href="#">{{$product->category}}</a>
                                                                    <a href="#">{{$product->section}}</a>
                                                                </div>
                                                                <div class="caption">
                                                                    <!--
                                                                    <div class="rating">
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                                    </div>
                                                                    
                                                                    <a class="reviews_button" href=""><b>Notice</b><b>156</b></a>
                                                                    -->

                                                                    <h4><a href="#" target="_self" title="{{$product->name}}">{{$product->name}}</a></h4>

                                                                    <p class="price">
                                                                        À vista <span class="price-new">{{setReal($price->offer_cash)}}</span> </br>
                                                                        Parcelado <span class="price-term">{{setReal($price->offer_card)}}</span>
                                                                    </p>
                                                                    <div class="item-time-w">
                                                                        <span class="icon-time">Se apresse! A oferta termina em:</span>
                                                                        <div class="item-time">
                                                                            <div class="item-timer product_time_{{$product->id}}"></div>
                                                                            @php  $date_countdown =  date('Y/m/d H:i:s', strtotime($product->offer_date)); @endphp
                                                                            <script type="text/javascript">
                                                                                //<![CDATA[
                                                                                listdeal{{$i}}.push('product_time_{{$product->id}}|{{$date_countdown}}');
                                                                                //]]>
                                                                            </script>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        @endforeach
                                        @endforeach        
                                        @endforeach
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        //<![CDATA[
                                        jQuery(document).ready(function($) {;
                                            (function(element) {
                                                var $element = $(element),
                                                    $extraslider = $('.extraslider-inner', $element),
                                                    $featureslider = $('.product-feature', $element),
                                                    _delay = 500,
                                                    _duration = 800,
                                                    _effect = 'none';

                                                $extraslider.on('initialized.owl.carousel2', function() {
                                                    var $item_active = $('.extraslider-inner .owl2-item.active', $element);
                                                    if ($item_active.length > 1 && _effect != 'none') {
                                                        _getAnimate($item_active);
                                                    } else {
                                                        var $item = $('.extraslider-inner .owl2-item', $element);
                                                        $item.css({
                                                            'opacity': 1,
                                                            'filter': 'alpha(opacity = 100)'
                                                        });
                                                    }
                                                    $('.extraslider-inner .owl2-dots', $element).insertAfter($('.extraslider-inner .owl2-prev', $element));
                                                    $('.extraslider-inner .owl2-controls', $element).insertBefore($extraslider).addClass('extraslider');

                                                });

                                                $extraslider.owlCarousel2({
                                                    rtl: false,
                                                    margin: 30,
                                                    slideBy: 1,
                                                    autoplay: false,
                                                    autoplayHoverPause: 0,
                                                    autoplayTimeout: 500,
                                                    autoplaySpeed: 1000,
                                                    startPosition: 0,
                                                    mouseDrag: true,
                                                    touchDrag: true,
                                                    autoWidth: false,
                                                    responsive: {
                                                        0: {
                                                            items: 1
                                                        },
                                                        480: {
                                                            items: 1
                                                        },
                                                        768: {
                                                            items: 1
                                                        },
                                                        992: {
                                                            items: 1
                                                        },
                                                        1200: {
                                                            items: 1
                                                        }
                                                    },
                                                    dotClass: 'owl2-dot',
                                                    dotsClass: 'owl2-dots',
                                                    dots: false,
                                                    dotsSpeed: 500,
                                                    nav: true,
                                                    loop: true,
                                                    navSpeed: 500,
                                                    navText: ['&#171;', '&#187;'],
                                                    navClass: ['owl2-prev', 'owl2-next']
                                                });

                                                $extraslider.on('translated.owl.carousel2', function(e) {
                                                    var $item_active = $('.extraslider-inner .owl2-item.active', $element);
                                                    var $item = $('.extraslider-inner .owl2-item', $element);

                                                    _UngetAnimate($item);

                                                    if ($item_active.length > 1 && _effect != 'none') {
                                                        _getAnimate($item_active);
                                                    } else {
                                                        $item.css({
                                                            'opacity': 1,
                                                            'filter': 'alpha(opacity = 100)'
                                                        });
                                                    }
                                                });
                                                /*feature product*/
                                                $featureslider.on('initialized.owl.carousel2', function() {
                                                    var $item_active = $('.product-feature .owl2-item.active', $element);
                                                    if ($item_active.length > 1 && _effect != 'none') {
                                                        _getAnimate($item_active);
                                                    } else {
                                                        var $item = $('.owl2-item', $element);
                                                        $item.css({
                                                            'opacity': 1,
                                                            'filter': 'alpha(opacity = 100)'
                                                        });
                                                    }
                                                    $('.product-feature .owl2-dots', $element).insertAfter($('.product-feature .owl2-prev', $element));
                                                    $('.product-feature .owl2-controls', $element).insertBefore($featureslider).addClass('featureslider');
                                                });

                                                $featureslider.owlCarousel2({
                                                    rtl: false,
                                                    margin: 30,
                                                    slideBy: 1,
                                                    autoplay: false,
                                                    autoplayHoverPause: 0,
                                                    autoplayTimeout: 500,
                                                    autoplaySpeed: 1000,
                                                    startPosition: 0,
                                                    mouseDrag: true,
                                                    touchDrag: true,
                                                    autoWidth: false,
                                                    responsive: {
                                                        0: {
                                                            items: 1
                                                        },
                                                        480: {
                                                            items: 1
                                                        },
                                                        768: {
                                                            items: 1
                                                        },
                                                        992: {
                                                            items: 1
                                                        },
                                                        1200: {
                                                            items: 1
                                                        }
                                                    },
                                                    dotClass: 'owl2-dot',
                                                    dotsClass: 'owl2-dots',
                                                    dots: false,
                                                    dotsSpeed: 500,
                                                    nav: true,
                                                    loop: true,
                                                    navSpeed: 500,
                                                    navText: ['&#171;', '&#187;'],
                                                    navClass: ['owl2-prev', 'owl2-next']
                                                });

                                                $featureslider.on('translated.owl.carousel2', function(e) {
                                                    var $item_active = $('.product-feature .owl2-item.active', $element);
                                                    var $item = $('.product-feature .owl2-item', $element);

                                                    _UngetAnimate($item);

                                                    if ($item_active.length > 1 && _effect != 'none') {
                                                        _getAnimate($item_active);
                                                    } else {
                                                        $item.css({
                                                            'opacity': 1,
                                                            'filter': 'alpha(opacity = 100)'
                                                        });
                                                    }
                                                });

                                                function _getAnimate($el) {
                                                    if (_effect == 'none') return;
                                                    $extraslider.removeClass('extra-animate');
                                                    $el.each(function(i) {
                                                        var $_el = $(this);
                                                        $(this).css({
                                                            '-webkit-animation': _effect + ' ' + _duration + "ms ease both",
                                                            '-moz-animation': _effect + ' ' + _duration + "ms ease both",
                                                            '-o-animation': _effect + ' ' + _duration + "ms ease both",
                                                            'animation': _effect + ' ' + _duration + "ms ease both",
                                                            '-webkit-animation-delay': +i * _delay + 'ms',
                                                            '-moz-animation-delay': +i * _delay + 'ms',
                                                            '-o-animation-delay': +i * _delay + 'ms',
                                                            'animation-delay': +i * _delay + 'ms',
                                                            'opacity': 1
                                                        }).animate({
                                                            opacity: 1
                                                        });

                                                        if (i == $el.size() - 1) {
                                                            $extraslider.addClass("extra-animate");
                                                        }
                                                    });
                                                }

                                                function _UngetAnimate($el) {
                                                    $el.each(function(i) {
                                                        $(this).css({
                                                            'animation': '',
                                                            '-webkit-animation': '',
                                                            '-moz-animation': '',
                                                            '-o-animation': '',
                                                            'opacity': 1
                                                        });
                                                    });
                                                }
                                                data = new Date(2013, 10, 26, 12, 00, 00);

                                                function CountDown(date, id) {
                                                    dateNow = new Date();
                                                    amount = date.getTime() - dateNow.getTime();
                                                    if (amount < 0 && $('#' + id).length) {
                                                        $('.' + id).html("Now!");
                                                    } else {
                                                        days = 0;
                                                        hours = 0;
                                                        mins = 0;
                                                        secs = 0;
                                                        out = "";
                                                        amount = Math.floor(amount / 1000);
                                                        days = Math.floor(amount / 86400);
                                                        amount = amount % 86400;
                                                        hours = Math.floor(amount / 3600);
                                                        amount = amount % 3600;
                                                        mins = Math.floor(amount / 60);
                                                        amount = amount % 60;
                                                        secs = Math.floor(amount);
                                                        if (days != 0) {
                                                            out += "<div class='time-item time-day'>" + "<div class='num-time'>" + days + "</div>" + " <div class='name-time'>" + ((days == 1) ? "Dia" : "Dias") + "</div>" + "</div> ";
                                                        }
                                                        if (days == 0 && hours != 0) {
                                                            out += "<div class='time-item time-hour' style='width:33.33%'>" + "<div class='num-time'>" + hours + "</div>" + " <div class='name-time'>" + ((hours == 1) ? "Hora" : "Horas") + "</div>" + "</div> ";
                                                        } else if (hours != 0) {
                                                            out += "<div class='time-item time-hour'>" + "<div class='num-time'>" + hours + "</div>" + " <div class='name-time'>" + ((hours == 1) ? "Hora" : "Horas") + "</div>" + "</div> ";
                                                        }
                                                        if (days == 0 && hours != 0) {
                                                            out += "<div class='time-item time-min' style='width:33.33%'>" + "<div class='num-time'>" + mins + "</div>" + " <div class='name-time'>" + ((mins == 1) ? "Min" : "Mins") + "</div>" + "</div> ";
                                                            out += "<div class='time-item time-sec' style='width:33.33%'>" + "<div class='num-time'>" + secs + "</div>" + " <div class='name-time'>" + ((secs == 1) ? "Seg" : "Segs") + "</div>" + "</div> ";
                                                            out = out.substr(0, out.length - 2);
                                                        } else if (days == 0 && hours == 0) {
                                                            out += "<div class='time-item time-min' style='width:50%'>" + "<div class='num-time'>" + mins + "</div>" + " <div class='name-time'>" + ((mins == 1) ? "Min" : "Mins") + "</div>" + "</div> ";
                                                            out += "<div class='time-item time-sec' style='width:50%'>" + "<div class='num-time'>" + secs + "</div>" + " <div class='name-time'>" + ((secs == 1) ? "Seg" : "Segs") + "</div>" + "</div> ";
                                                            out = out.substr(0, out.length - 2);
                                                        } else {
                                                            out += "<div class='time-item time-min'>" + "<div class='num-time'>" + mins + "</div>" + " <div class='name-time'>" + ((mins == 1) ? "Min" : "Mins") + "</div>" + "</div> ";
                                                            out += "<div class='time-item time-sec'>" + "<div class='num-time'>" + secs + "</div>" + " <div class='name-time'>" + ((secs == 1) ? "Seg" : "Segs") + "</div>" + "</div> ";
                                                            out = out.substr(0, out.length - 2);
                                                        }

                                                        $('.' + id).html(out);

                                                        setTimeout(function() {
                                                            CountDown(date, id);
                                                        }, 1000);
                                                    }
                                                }
                                                if (listdeal{{$i}}.length > 0) {
                                                    for (var i = 0; i < listdeal{{$i}}.length; i++) {
                                                        var arr = listdeal{{$i}}[i].split("|");
                                                        if (arr[1].length) {
                                                            var data = new Date(arr[1]);
                                                            CountDown(data, arr[0]);
                                                        }
                                                    }
                                                }
                                            })('#offerts_section_{{$section->id}}');
                                        });
                                        //]]>
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $i++;
                @endphp
                @endif
            @endforeach
        </div>
    </div>
@endif