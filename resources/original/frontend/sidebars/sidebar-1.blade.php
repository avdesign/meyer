<aside class="col-md-3 col-sm-12 col-xs-12 content-aside left_column sidebar-offcanvas">
    <span id="close-sidebar" class="fa fa-times"></span>
    <div class="module icon-style module-category">
        <h3 class="modtitle"><span>Categorias</span></h3>
        <div class="mod-content box-category">
            <ul class="accordion" id="accordion-category">
                <li class="panel">
                    <a href="#">Feminino</a>
                    <span class="head"><a  class="pull-right accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category1"></a></span>
                    <div id="category1" class="panel-collapse collapse " style="clear:both">
                        <ul>
                            <li>
                                <a href="#">Categoria 1</a>
                            </li>
                            <li>
                                <a href="#">Categoria 2</a>
                            </li>
                            <li>
                                <a href="#">Categoria 3</a>
                            </li>
                            <li>
                                <a href="#">Categoria 4</a>
                            </li>
                            <li>
                                <a href="#">Categoria 5</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="panel">
                    <a href="#">Masculino</a>
                    <span class="head"><a  class="pull-right accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category2"></a></span>
                    <div id="category2" class="panel-collapse collapse " style="clear:both">
                        <ul>
                            <li>
                                <a href="#">Categoria 1</a>
                            </li>
                            <li>
                                <a href="#">Categoria 2</a>
                            </li>
                            <li>
                                <a href="#">Categoria 3</a>
                            </li>
                            <li>
                                <a href="#">Categoria 4</a>
                            </li>
                            <li>
                                <a href="#">Categoria 5</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="panel">
                    <a href="#">Infantil</a>
                    <span class="head"><a  class="pull-right accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion-category" href="#category3"></a></span>
                    <div id="category3" class="panel-collapse collapse " style="clear:both">
                        <ul>
                            <li>
                                <a href="#">Categoria 1</a>
                            </li>
                            <li>
                                <a href="#">Categoria 2</a>
                            </li>
                            <li>
                                <a href="#">Categoria 3</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="panel">
                    <a href="#">Oferta Especial</a>
                </li>
                <li class="panel">
                    <a href="#">Black Friday</a>
                </li>
            </ul>
        </div>
    </div>
    
    @include('frontend.sidebars.offer-1')

    <div class="module banner-left hidden-xs">
        <div class="banner-sidebar banners">
            <div>
                <a title="Nome da Seção" href="#">
                    <img src="{{url('assets/frontend/images/sections/234x319/destaque1.jpg')}}" alt="Nome da Seção">
                </a>
            </div>
        </div>
    </div>
      
    
</aside>