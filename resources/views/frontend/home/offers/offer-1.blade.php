<div class="container page-builder-ltr">
    <div class="row row_{{numLetter(rand(), 'letter')}} row-flashsale box-content2 ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_{{numLetter(rand(), 'letter')}}">
            <div class="box-title">
                <h3>Venda Rápida: Ofertas da Semana </h3>
                <a href="#"> Ver Todos </a>
            </div>
        </div>

        @php $i=1; @endphp
        @foreach($sections as $key => $section)
            <!-- Ofertas da seção {{$section['name']}} -->
            <!-- /Ofertas da seção {{$section['name']}} -->
            @php $i++; @endphp
        @endforeach  
    </div>
</div>