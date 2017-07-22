@extends('frontend.layout.template-1')
@push('css')
	<link rel="stylesheet" href="{{url('assets/frontend/js/avd_home_slider/css/style.css')}}">
	<link rel="stylesheet" href="{{url('assets/frontend/js/avd_home_slider/css/animate.css')}}">
	<link rel="stylesheet" href="{{url('assets/frontend/js/avd_home_slider/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('assets/frontend/js/avd_deals/css/style.css')}}">
	<link rel="stylesheet" href="{{url('assets/frontend/js/avd_deals/css/css3.css')}}">
	<link rel="stylesheet" href="{{url('assets/frontend/js/avd_category_slider/css/slider.css')}}">
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
@endpush

@push('body')
<body class="common-home ltr res layout-1">
@endpush
@section('content')
	<div id="content">
	    <div class="custom-scoll hidden-sm hidden-md hidden-xs">
	        <div class="custom-html">
	            <div class="scoll-cate list_diemneo">
	                <ul>
	                    <li class="neo1 active"><span>Tendência</span></li>
	                    <li class="neo2"><span>Ofertas</span></li>
	                    <li class="neo3"><span>Feminino</span></li>
	                    <li class="neo4"><span>Masculino</span></li>
	                    <li class="neo5"><span>Infantil</span></li>
	                    <!-- <li class="neo6"><span>&nbsp;</span></li> -->
	                </ul>
	            </div>
	        </div>
	    </div>

	    @include('frontend.home.menu-categories')

	    <div class="container page-builder-ltr">
	        <div class="row row_k1fl row-style ">

	             @include('frontend.home.banners.banner-1')

	             @include('frontend.home.slider.slider-1')

	             @include('frontend.home.banners.banner-2')

	             @include('frontend.home.trends.trend-1')		

	        </div>
	    </div>      

	    @include('frontend.home.offers.offer-1')

	    @include('frontend.home.sections.section-1')

	    @include('frontend.brands.brand-1')

	    @include('frontend.popups.groups-1')

	</div>
@endsection