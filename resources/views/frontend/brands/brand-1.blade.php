@if(isset($brandsLogo));
    
    <div class="container page-builder-ltr">
        <div class="row row_c59u row-style ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_ikvg col-style">
                <div class="module slider-brand-layout1">
                    <div class="modcontent slider-brand">
                        @foreach($brandsLogo as $logo)
                        <div class="item">
                            <a title="{{$logo['name']}}" href="#">
                                <img src="{{urf('assets/imagens/marcas/173x91')}}/{{$logo['image']}}" alt="image">
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endif