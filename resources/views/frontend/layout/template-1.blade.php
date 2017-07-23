<!DOCTYPE html>

<html lang="{{ config('app.locale') }}">

<head>

    <meta property="og:image:width" content="450" />
    <meta property="og:image:height" content="298" />

    <title>{{$title or config('app.name')}}</title>
    <meta charset="UTF-8" />
    <base href="{{url('/')}}" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
@stack('meta')

    <link rel="stylesheet" href="{{url('assets/frontend/js/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/soconfig/css/lib.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/theme/meyer-calcados/css/ie9-and-up.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_newletter_custom_popup/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_page_builder/assets/css/shortcodes.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_page_builder/css/style_render_244.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_page_builder/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_page_builder/css/style_render_348.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_page_builder/css/style_render_356.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_page_builder/css/style_render_357.css')}}">
@stack('css')
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_tools/css/grey.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_sociallogin/css/so_sociallogin.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_searchpro/css/so_searchpro.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_megamenu/avd_megamenu.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/js/avd_megamenu/wide-grid.css')}}">    
    <link rel="stylesheet" href="{{url('assets/frontend/theme/meyer-calcados/css/layout1/grey.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/theme/meyer-calcados/css/header/header1.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/theme/meyer-calcados/css/footer/footer2.css')}}">
    <link rel="stylesheet" href="{{url('assets/frontend/theme/meyer-calcados/css/responsive.css')}}">

@stack('head')
    <script src="{{url('assets/frontend/js/jquery/jquery-2.1.1.min.js')}}"></script>
    <script src="{{url('assets/frontend/js/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/frontend/js/soconfig/js/libs.js')}}"></script>
    <script src="{{url('assets/frontend/js/soconfig/js/so.system.js')}}"></script>
    <script src="{{url('assets/frontend/theme/meyer-calcados/js/so.custom.js')}}"></script>
    <script src="{{url('assets/frontend/theme/meyer-calcados/js/common.js')}}"></script>
    <script src="{{url('assets/frontend/js/soconfig/js/jquery.unveil.js')}}"></script>
    <script src="{{url('assets/frontend/js/avd_tools/js/script.js')}}"></script>
@stack('scripts')
    <script src="{{url('assets/frontend/js/avd_page_builder/assets/js/shortcodes.js')}}"></script>
    <script src="{{url('assets/frontend/js/avd_page_builder/js/section.js')}}"></script>
    <script src="{{url('assets/frontend/js/avd_page_builder/js/modernizr.video.js')}}"></script>
    <script src="{{url('assets/frontend/js/avd_page_builder/js/swfobject.js')}}"></script>
    <script src="{{url('assets/frontend/js/avd_page_builder/js/video_background.js')}}"></script>   
    <script src="{{url('assets/frontend/js/avd_countdown/js/jquery.cookie.js')}}"></script>
    <script src="{{url('assets/frontend/js/avd_megamenu/avd_megamenu.js')}}"></script


    <link href='https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript">
        function _SoQuickView() {

            var $item_class = $('.so-quickview');
            if ($item_class.length > 0) {
                for (var i = 0; i < $item_class.length; i++) {
                    if ($($item_class[i]).find('.quickview_handler').length <= 0) {
                        var $product_id = $($item_class[i]).find('a', $(this)).attr('data-product');
                        if ($.isNumeric($product_id)) {

                            var _quickviewbutton = "<a class='quickview iframe-link visible-lg btn-button' href='product/quickview/" + $product_id + "' title=\"Cores\" data-toggle=\"tooltip\" data-title =\"Cores\" data-fancybox-type=\"iframe\" ><i class=\"fa fa-eye\"></i></a>";
                            //$($item_class[i]).append(_quickviewbutton);
                            if ($($item_class[i]).find('a.quickview').length <= 0) {
                                $($item_class[i]).find('a.hidden').after(_quickviewbutton);
                            }
                        }
                    }
                }
            }

        }
        jQuery(document).ready(function($) {
            _SoQuickView();
            // Hide tooltip when clicking on it
            var hasTooltip = $("[data-toggle='tooltip']").tooltip({
                container: 'body'
            });
            hasTooltip.on('click', function() {
                $(this).tooltip('hide')
            });
        });
    </script>

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

    <link href="{{url('assets/frontend/theme/meyer-calcados/images/favicon.png')}}" rel="icon" />


</head>

@stack('body')
    <div id="wrapper" class="wrapper-full banners-effect-5">
        @include('frontend.headers.header-1')

        <!-- POPPUP LOGIN -->
        @include('frontend.popups.popup-login-1')
        

         @yield('content')


        <!-- PARTE SUPERIOR -->
        @include('frontend.footers.footer-3')
        <!-- MENU PARA IR PARA O TOPO PERSONALIZADO -->
        <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
        <!-- POPUP -->
        @include('frontend.popups.popup-news-3')
        <script>
            //cart.load();
        </script>
    </div>
</body>
</html>