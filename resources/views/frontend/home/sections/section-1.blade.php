@if(isset($sectionFeatured))


    <div class="container page-builder-ltr">
        <div class="row row_8quc row-style ">
            @php  $i=1; @endphp
            @foreach ($sections as $section)
            @php  
                $rand = numLetter('1357', 'letter');
            @endphp
            @foreach ($sectionFeatured as $featured)
            @if ($section->name == $featured['section_name'])
                           

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_{{$rand}} box-content{{$i}}">
                <div id="so_section_slider_{{$section->id}}" class="container-slider module so-category-slider-ltr cate-slider cate-slider{{$i}}">

                    <!-- .page-top -->
                    <div class="page-top">
                        <h3 class="catetitle"><span>Seção {{$section->name}}</span></h3>
                        <div class="item-sub-cat font-title">
                            <a class="view-all" href="#" title="Seção {{$section->name}}" target="_self"> Ver Todas </a>
                            <ul>
                                 @foreach($section->categories as $category)
                                    <li>
                                        <a href="#" title="{{$category->name}}" target="_self">
                                            {{$category->name}} <span style="display: none;">&nbsp;&nbsp;(48)&nbsp;</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- /.page-top -->
                    <div class="modcontent">
                        <div class="categoryslider-content products-list grid show preset01-4 preset02-3 preset03-2 preset04-2 preset05-1">
                            <!-- /.item-cat-image -->
                            <div class="item-cat-image">
                                <a href="#" title="Seção {{$section->name}}" target="_self">
                                    <img class="categories-loadimage" alt="Seção {{$section->name}}" src="{{urf('assets/imagens/secoes/234x319')}}/{{$section->featured_image}}"/>                            
                                </a>
                            </div>
                            <!-- /.item-cat-image -->
                            <div class="slider so-category-slider not-js product-layout" data-effect="none">

                            @foreach($section->categories()->inRandomOrder()->get() as $category)
                            @foreach ($category->products()->where(['featured' => 1])->inRandomOrder()->limit(4)->get() as $product)
                                @foreach($product->images()->where('active', 1)->orderBy('cover', 'desc')->limit(1)->get() as $image)
                                    @php
                                        if($image->cover == 1 && $image->active == 1) {
                                            $src = urf("assets/imagens/produtos/300x300/$image->image");
                                        } else {
                                            $src = urf("assets/imagens/produtos/300x300/$image->image");
                                        }
                                        $color = $image->color;
                                        $count_colors = count($product->images);
                                        ($count_colors >= 2 ? $total_colors = $count_colors.' cores' : $total_colors = $count_colors.' cor');
                                    @endphp
                                @endforeach
                                @foreach($product->prices()->where('profile', 'Normal')->get() as $price)
                                <div class="item product-layout">
                                    <div class="item-inner product-thumb transition product-item-container">
                                        <div class="right-block">
                                            <div class="box-label">
                                                @if($product->offer == 1)
                                                <span class="label-sale">-{{rand($price->offer_percent, 2)}}%  </span>
                                                @endif
                                                 @if($product->new == 1)
                                                <span class="label label-new">Novo</span>
                                                @endif
                                            </div>
                                            <div class="caption">
                                                <!--
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                </div>
                                                -->
                                                <h4 class="item-title">
                                                    <a href="#" title="{{$product->name}}" target="_self">{{$product->name}}</a>
                                                </h4>
                                                <p class="price">
                                                    <span class="price-new">{{setReal($price->price_cash)}}</span> À vista</br>
                                                    <span class="price-term">{{setReal($price->price_card)}} Parcelado</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="left-block">
                                            <div class="label-stock label label-success Pre-Order">{{$total_colors}}</div>
                                            <div class="product-image-container ">
                                                <div class="image">
                                                    <a class="lt-image" href="#" target="_self" title="{{$product->name}}">
                                                        <img src="{{$src}}" alt="{{$product->name}} {{$color}}">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="button-group so-quickview">
                                                <button class="addToCart btn-button" type="button" data-toggle="tooltip" title="Adicionar" onclick="cart.add('64');"><i class="fa fa-shopping-cart"></i></button>
                                                <!--
                                                <button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add('64');"><i class="fa fa-heart-o"></i></button>

                                                <button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add('64');"><i class="fa fa-retweet"></i></button>
                                                -->
                                                <a class="hidden" data-product='64' href="#" target="_self"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            @endforeach
                            @endforeach
                            </div>

                            <div class="item-sub-cat" style="display: none;">
                                <ul>
                                 @foreach($section->categories as $category)
                                    <li>
                                        <a href="#" title="{{$category->name}}" target="_self">
                                            {{$category->name}} <span style="display: none;">&nbsp;&nbsp;(48)&nbsp;</span>
                                        </a>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                            <div class="icon-cate" style="display: none;">
                                <a title="Seção {{$section->name}}" href="#">Seção {{$section->name}} </a>
                            </div>
                        </div>
                        <script type="text/javascript">
                            //<![CDATA[
                            jQuery(document).ready(function($) {;
                                (function(element) {
                                    var id = $("#so_section_slider_{{$section->id}}");
                                    var $element = $(element),
                                        $extraslider = $(".slider", $element),
                                        _delay = 500,
                                        _duration = 800,
                                        _effect = 'none',
                                        total_item = 4;

                                    $extraslider.on("initialized.owl.carousel2", function() {
                                        var $item_active = $(".owl2-item.active", $element);
                                        if ($item_active.length > 1 && _effect != "none") {
                                            _getAnimate($item_active);
                                        } else {
                                            var $item = $(".owl2-item", $element);
                                            $item.css({
                                                "opacity": 1,
                                                "filter": "alpha(opacity = 100)"
                                            });
                                        }
                                        var $navpage = $(".prev_next", id);
                                        $(".owl2-controls", id).insertAfter($navpage);
                                        $(".owl2-dot", id).css("display", "none");

                                    });

                                    $extraslider.owlCarousel2({
                                        rtl: false,
                                        margin: 0,
                                        slideBy: 1,
                                        autoplay: 0,
                                        autoplayHoverPause: 0,
                                        autoplayTimeout: 0,
                                        autoplaySpeed: 1000,
                                        startPosition: 0,
                                        mouseDrag: 1,
                                        touchDrag: 1,
                                        autoWidth: false,
                                        responsive: {
                                            0: {
                                                items: 1,
                                                nav: total_item <= 1 ? false : ((false) ? true : false),
                                            },
                                            480: {
                                                items: 2,
                                                nav: total_item <= 2 ? false : ((false) ? true : false),
                                            },
                                            768: {
                                                items: 2,
                                                nav: total_item <= 2 ? false : ((false) ? true : false),
                                            },
                                            992: {
                                                items: 3,
                                                nav: total_item <= 3 ? false : ((false) ? true : false),
                                            },
                                            1200: {
                                                items: 4,
                                                nav: total_item <= 4 ? false : ((false) ? true : false),
                                            }
                                        },

                                        nav: false,
                                        loop: true,
                                        navSpeed: 500,
                                        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                                        navClass: ["owl2-prev", "owl2-next"]

                                    });

                                    $extraslider.on("translate.owl.carousel2", function(e) {

                                        var $item_active = $(".owl2-item.active", $element);
                                        _UngetAnimate($item_active);
                                        _getAnimate($item_active);
                                    });

                                    $extraslider.on("translated.owl.carousel2", function(e) {


                                        var $item_active = $(".owl2-item.active", $element);
                                        var $item = $(".owl2-item", $element);

                                        _UngetAnimate($item);

                                        if ($item_active.length > 1 && _effect != "none") {
                                            _getAnimate($item_active);
                                        } else {

                                            $item.css({
                                                "opacity": 1,
                                                "filter": "alpha(opacity = 100)"
                                            });

                                        }
                                    });

                                    function _getAnimate($el) {
                                        if (_effect == "none") return;
                                        //if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
                                        $extraslider.removeClass("extra-animate");
                                        $el.each(function(i) {
                                            var $_el = $(this);
                                            $(this).css({
                                                "-webkit-animation": _effect + " " + _duration + "ms ease both",
                                                "-moz-animation": _effect + " " + _duration + "ms ease both",
                                                "-o-animation": _effect + " " + _duration + "ms ease both",
                                                "animation": _effect + " " + _duration + "ms ease both",
                                                "-webkit-animation-delay": +i * _delay + "ms",
                                                "-moz-animation-delay": +i * _delay + "ms",
                                                "-o-animation-delay": +i * _delay + "ms",
                                                "animation-delay": +i * _delay + "ms",
                                                "opacity": 1
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
                                                "animation": "",
                                                "-webkit-animation": "",
                                                "-moz-animation": "",
                                                "-o-animation": "",
                                                "opacity": 1
                                            });
                                        });
                                    }

                                })("#so_section_slider_{{$section->id}}");
                            });
                            //]]>
                        </script>
                    </div>

                    <div class="form-group"></div>

                </div>
            </div>
            @endif           

            @endforeach
            @php $i++; @endphp
            @endforeach
        </div>
    </div>

@endif