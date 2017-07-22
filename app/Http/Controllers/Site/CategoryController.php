<?php

namespace AVDPainel\Http\Controllers\Site;

use Illuminate\Http\Request;
use AVDPainel\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view("frontend.categories.category-{$id}", compact('id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function order($id)
    {
        return view("frontend.categories.category-{$id}", compact('id'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request, $id, $search='')
    {
        $maxPrice         = $request['maxPrice'];
        $minPrice         = $request['minPrice'];
        $text_search      = $request['text_search'];
        $opt_value_id     = $request['opt_value_id'];   
        $att_value_id     = $request['att_value_id']; 
        $manu_value_id    = $request['manu_value_id'];  
        $product_arr_all  = $request['product_arr_all'];
        $subcate_value_id = $request['subcate_value_id'];
        $category_id_path = $request['category_id_path'];


        $html = '<div class="breadcrumbs">';
            $html .= '<div class="container">';
                $html .= '<div class="current-name">Nome da Seção</div>';
                $html .= '<ul class="breadcrumb">';
                    $html .= '<li><a href="'.url('/').'"><i class="fa fa-home"></i></a></li>';
                    $html .= '<li><a href="'.url("categoria/$id").'">Nome da Categoria</a></li>';
                $html .= '</ul>';
            $html .= '</div>';
        $html .= '</div>';
        $html .= '<div class="container content-main">';
            $html .= '<div class="row">';
                $html .= '<div class="product-filter filters-panel">';
                    $html .= '<div class="row">';
                        $html .= '<div class="box-list col-md-2 hidden-sm hidden-xs">';
                            $html .= '<div class="view-mode">';
                                $html .= '<div class="list-view">';
                                    $html .= '<button class="btn btn-default grid active" data-toggle="tooltip" title="Grade"><i class="fa fa-th-large"></i></button>';
                                    $html .= '<button class="btn btn-default list " data-toggle="tooltip" title="Lista"><i class="fa fa-bars"></i></button>';
                                $html .= '</div>';
                            $html .= '</div>';
                        $html .= '</div>';
                        $html .= '<div class="short-by-show form-inline text-right col-md-10 col-sm-12">';
                            $html .= '<div class="form-group short-by">';
                                $html .= '<label class="control-label" for="input-sort">Ordenar por:</label>';
                                $html .= '<select id="input-sort" class="form-control" onchange="location = this.value;">';
                                    $html .= '<option value="'.url("categoria/$id").'" selected="selected">Padrão</option>';
                                    $html .= '<option value="'.url("categoria/$id").'">Outros</option>';
                                $html .= '</select>';
                            $html .= '</div>';
                            $html .= '<div class="form-group">';
                                $html .= '<label class="control-label" for="input-limit">Mostrar:</label>';
                                $html .= '<select id="input-limit" class="form-control" onchange="location = this.value;">';
                                    $html .= '<option value="'.url("categoria/$id").'" selected="selected">12</option>';
                                    $html .= '<option value="'.url("categoria/$id").'">25</option>';
                                    $html .= '<option value="'.url("categoria/$id").'">50</option>';
                                    $html .= '<option value="'.url("categoria/$id").'">75</option>';
                                    $html .= '<option value="'.url("categoria/$id").'">100</option>';
                                $html .= '</select>';
                            $html .= '</div>';
                            $html .= '<div class="product-compare form-group" style="margin: 0 10px"><a href="#" id="compare-total" class="btn btn-default"><i class="fa fa-refresh"></i> Compare</a></div>';
                        $html .= '</div>';
                    $html .= '</div>';
                $html .= '</div>';

                $html .= '<div class="products-category">';
                    $html .= '<div class="products-list row grid">';

                        $html .= '<div class="product-layout col-lg-3 col-md-4 col-sm-4 col-xs-12">';
                            $html .= '<div class="product-item-container">';
                                $html .= '<div class="left-block">';
                                    $html .= '<div class="label-stock label label-success">3 Cores</div>';
                                    $html .= '<div class="product-image-container lazy second_img ">';
                                        $html .= '<a href="'.url('produto/detalhes/4').'">';
                                            $html .= '<img data-src="'.url("assets/frontend/images/products/300x300/produto1-cor1.jpg").'" ';
                                                $html .= 'src="'.url("assets/frontend/images/products/300x300/produto1-cor1.jpg").'"  title="Nome do Produto" class="img-1 img-responsive" />';
                                            $html .= '<img data-src="'.url("assets/frontend/images/products/300x300/produto1-cor2.jpg").'" ';
                                                $html .= 'src="'.url("assets/frontend/images/products/300x300/produto1-cor2.jpg").'"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />';
                                        $html .= '</a>';
                                    $html .= '</div>';
                                    $html .= '<div class="box-label"></div>';
                                    $html .= '<div class="button-group">';
                                        $html .= '<!-- CART -->';
                                        $html .= '<button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add(\'167\', \'1\');"><i class="fa fa-shopping-cart"></i></button>';
                                        $html .= '<!-- WISHLIST ';
                                        $html .= '<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add(\'167\');"><i class="fa fa-heart"></i></button>-->';

                                        $html .= '<!-- COMPARE';
                                        $html .= '<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add(\'167\');"><i class="fa fa-retweet"></i></button> -->';
                                        $html .= '<!-- QUICK VIEW -->';
                                        $html .= '<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="'.url('product/quickview/167').'"> <i class="fa fa-eye"></i> </a>';
                                    $html .= '</div>';
                                $html .= '</div>';
                                $html .= '<div class="right-block">';
                                    $html .= '<div class="caption">';
                                        $html .= '<div class="ratings">';
                                            $html .= '<!--';
                                            $html .= '<div class="rating-box">';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                            $html .= '</div>';
                                            $html .= '-->';
                                        $html .= '</div>';
                                        $html .= '<h4><a href="'.url('produto/detalhes/4').'">Nome do Produto</a></h4>';
                                        $html .= '<div class="price">';
                                            $html .= 'À vista <span class="price-new">R$ 45,00</span> </br>';
                                            $html .= '<span class="price-term">No Cartão 3x R$ 15,00</span>';
                                        $html .= '</div>';
                                        $html .= '<div class="description  hidden">';
                                            $html .= '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>';
                                        $html .= '</div>';
                                    $html .= '</div>';

                                $html .= '</div>';
                            $html .= '</div>';
                        $html .= '</div>';

                        $html .= '<div class="product-layout col-lg-3 col-md-4 col-sm-4 col-xs-12">';
                            $html .= '<div class="product-item-container">';
                                $html .= '<div class="left-block">';
                                    $html .= '<div class="label-stock label label-success">3 Cores</div>';
                                    $html .= '<div class="product-image-container lazy second_img ">';
                                        $html .= '<a href="'.url('produto/detalhes/4').'">';
                                            $html .= '<img data-src="'.url("assets/frontend/images/products/300x300/produto8-cor1.jpg").'" ';
                                                $html .= 'src="'.url("assets/frontend/images/products/300x300/produto8-cor1.jpg").'"  title="Nome do Produto" class="img-1 img-responsive" />';
                                            $html .= '<img data-src="'.url("assets/frontend/images/products/300x300/produto8-cor2.jpg").'" ';
                                                $html .= 'src="'.url("assets/frontend/images/products/300x300/produto8-cor2.jpg").'"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />';
                                        $html .= '</a>';
                                    $html .= '</div>';
                                    $html .= '<div class="box-label"></div>';
                                    $html .= '<div class="button-group">';
                                        $html .= '<!-- CART -->';
                                        $html .= '<button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add(\'167\', \'1\');"><i class="fa fa-shopping-cart"></i></button>';
                                        $html .= '<!-- WISHLIST ';
                                        $html .= '<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add(\'167\');"><i class="fa fa-heart"></i></button>-->';

                                        $html .= '<!-- COMPARE';
                                        $html .= '<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add(\'167\');"><i class="fa fa-retweet"></i></button> -->';
                                        $html .= '<!-- QUICK VIEW -->';
                                        $html .= '<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="'.url('product/quickview/167').'"> <i class="fa fa-eye"></i> </a>';
                                    $html .= '</div>';
                                $html .= '</div>';
                                $html .= '<div class="right-block">';
                                    $html .= '<div class="caption">';
                                        $html .= '<div class="ratings">';
                                            $html .= '<!--';
                                            $html .= '<div class="rating-box">';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                            $html .= '</div>';
                                            $html .= '-->';
                                        $html .= '</div>';
                                        $html .= '<h4><a href="'.url('produto/detalhes/4').'">Nome do Produto</a></h4>';
                                        $html .= '<div class="price">';
                                            $html .= 'À vista <span class="price-new">R$ 45,00</span> </br>';
                                            $html .= '<span class="price-term">No Cartão 3x R$ 15,00</span>';
                                        $html .= '</div>';
                                        $html .= '<div class="description  hidden">';
                                            $html .= '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>';
                                        $html .= '</div>';
                                    $html .= '</div>';

                                $html .= '</div>';
                            $html .= '</div>';
                        $html .= '</div>';

                        $html .= '<div class="product-layout col-lg-3 col-md-4 col-sm-4 col-xs-12">';
                            $html .= '<div class="product-item-container">';
                                $html .= '<div class="left-block">';
                                    $html .= '<div class="label-stock label label-success">3 Cores</div>';
                                    $html .= '<div class="product-image-container lazy second_img ">';
                                        $html .= '<a href="'.url('produto/detalhes/4').'">';
                                            $html .= '<img data-src="'.url("assets/frontend/images/products/300x300/produto10-cor1.jpg").'" ';
                                                $html .= 'src="'.url("assets/frontend/images/products/300x300/produto10-cor1.jpg").'"  title="Nome do Produto" class="img-1 img-responsive" />';
                                            $html .= '<img data-src="'.url("assets/frontend/images/products/300x300/produto10-cor2.jpg").'" ';
                                                $html .= 'src="'.url("assets/frontend/images/products/300x300/produto10-cor2.jpg").'"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />';
                                        $html .= '</a>';
                                    $html .= '</div>';
                                    $html .= '<div class="box-label"></div>';
                                    $html .= '<div class="button-group">';
                                        $html .= '<!-- CART -->';
                                        $html .= '<button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add(\'167\', \'1\');"><i class="fa fa-shopping-cart"></i></button>';
                                        $html .= '<!-- WISHLIST ';
                                        $html .= '<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add(\'167\');"><i class="fa fa-heart"></i></button>-->';

                                        $html .= '<!-- COMPARE';
                                        $html .= '<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add(\'167\');"><i class="fa fa-retweet"></i></button> -->';
                                        $html .= '<!-- QUICK VIEW -->';
                                        $html .= '<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="'.url('product/quickview/167').'"> <i class="fa fa-eye"></i> </a>';
                                    $html .= '</div>';
                                $html .= '</div>';
                                $html .= '<div class="right-block">';
                                    $html .= '<div class="caption">';
                                        $html .= '<div class="ratings">';
                                            $html .= '<!--';
                                            $html .= '<div class="rating-box">';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                            $html .= '</div>';
                                            $html .= '-->';
                                        $html .= '</div>';
                                        $html .= '<h4><a href="'.url('produto/detalhes/4').'">Nome do Produto</a></h4>';
                                        $html .= '<div class="price">';
                                            $html .= 'À vista <span class="price-new">R$ 45,00</span> </br>';
                                            $html .= '<span class="price-term">No Cartão 3x R$ 15,00</span>';
                                        $html .= '</div>';
                                        $html .= '<div class="description  hidden">';
                                            $html .= '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>';
                                        $html .= '</div>';
                                    $html .= '</div>';

                                $html .= '</div>';
                            $html .= '</div>';
                        $html .= '</div>';

                        $html .= '<div class="product-layout col-lg-3 col-md-4 col-sm-4 col-xs-12">';
                            $html .= '<div class="product-item-container">';
                                $html .= '<div class="left-block">';
                                    $html .= '<div class="label-stock label label-success">3 Cores</div>';
                                    $html .= '<div class="product-image-container lazy second_img ">';
                                        $html .= '<a href="'.url('produto/detalhes/4').'">';
                                            $html .= '<img data-src="'.url("assets/frontend/images/products/300x300/produto4-cor1.jpg").'" ';
                                                $html .= 'src="'.url("assets/frontend/images/products/300x300/produto4-cor1.jpg").'"  title="Nome do Produto" class="img-1 img-responsive" />';
                                            $html .= '<img data-src="'.url("assets/frontend/images/products/300x300/produto4-cor2.jpg").'" ';
                                                $html .= 'src="'.url("assets/frontend/images/products/300x300/produto4-cor2.jpg").'"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />';
                                        $html .= '</a>';
                                    $html .= '</div>';
                                    $html .= '<div class="box-label"></div>';
                                    $html .= '<div class="button-group">';
                                        $html .= '<!-- CART -->';
                                        $html .= '<button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add(\'167\', \'1\');"><i class="fa fa-shopping-cart"></i></button>';
                                        $html .= '<!-- WISHLIST ';
                                        $html .= '<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add(\'167\');"><i class="fa fa-heart"></i></button>-->';

                                        $html .= '<!-- COMPARE';
                                        $html .= '<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add(\'167\');"><i class="fa fa-retweet"></i></button> -->';
                                        $html .= '<!-- QUICK VIEW -->';
                                        $html .= '<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="'.url('product/quickview/167').'"> <i class="fa fa-eye"></i> </a>';
                                    $html .= '</div>';
                                $html .= '</div>';
                                $html .= '<div class="right-block">';
                                    $html .= '<div class="caption">';
                                        $html .= '<div class="ratings">';
                                            $html .= '<!--';
                                            $html .= '<div class="rating-box">';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                            $html .= '</div>';
                                            $html .= '-->';
                                        $html .= '</div>';
                                        $html .= '<h4><a href="'.url('produto/detalhes/4').'">Nome do Produto</a></h4>';
                                        $html .= '<div class="price">';
                                            $html .= 'À vista <span class="price-new">R$ 45,00</span> </br>';
                                            $html .= '<span class="price-term">No Cartão 3x R$ 15,00</span>';
                                        $html .= '</div>';
                                        $html .= '<div class="description  hidden">';
                                            $html .= '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>';
                                        $html .= '</div>';
                                    $html .= '</div>';

                                $html .= '</div>';
                            $html .= '</div>';
                        $html .= '</div>';

                        $html .= '<div class="product-layout col-lg-3 col-md-4 col-sm-4 col-xs-12">';
                            $html .= '<div class="product-item-container">';
                                $html .= '<div class="left-block">';
                                    $html .= '<div class="label-stock label label-success">3 Cores</div>';
                                    $html .= '<div class="product-image-container lazy second_img ">';
                                        $html .= '<a href="'.url('produto/detalhes/4').'">';
                                            $html .= '<img data-src="'.url("assets/frontend/images/products/300x300/produto2-cor1.jpg").'" ';
                                                $html .= 'src="'.url("assets/frontend/images/products/300x300/produto2-cor1.jpg").'"  title="Nome do Produto" class="img-1 img-responsive" />';
                                            $html .= '<img data-src="'.url("assets/frontend/images/products/300x300/produto2-cor2.jpg").'" ';
                                                $html .= 'src="'.url("assets/frontend/images/products/300x300/produto2-cor2.jpg").'"  alt="Nome do Produto" title="Nome do Produto" class="img-2 img-responsive" />';
                                        $html .= '</a>';
                                    $html .= '</div>';
                                    $html .= '<div class="box-label"></div>';
                                    $html .= '<div class="button-group">';
                                        $html .= '<!-- CART -->';
                                        $html .= '<button class="addToCart btn-button" type="button" title="Adicionar" onclick="cart.add(\'167\', \'1\');"><i class="fa fa-shopping-cart"></i></button>';
                                        $html .= '<!-- WISHLIST ';
                                        $html .= '<button class="wishlist btn-button" type="button" data-toggle="tooltip" title="Desejo" onclick="wishlist.add(\'167\');"><i class="fa fa-heart"></i></button>-->';

                                        $html .= '<!-- COMPARE';
                                        $html .= '<button class="compare btn-button" type="button" data-toggle="tooltip" title="Compare" onclick="compare.add(\'167\');"><i class="fa fa-retweet"></i></button> -->';
                                        $html .= '<!-- QUICK VIEW -->';
                                        $html .= '<a class="quickview iframe-link visible-lg btn-button" data-toggle="tooltip" title="Comprar" data-fancybox-type="iframe" href="'.url('product/quickview/167').'"> <i class="fa fa-eye"></i> </a>';
                                    $html .= '</div>';
                                $html .= '</div>';
                                $html .= '<div class="right-block">';
                                    $html .= '<div class="caption">';
                                        $html .= '<div class="ratings">';
                                            $html .= '<!--';
                                            $html .= '<div class="rating-box">';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                                $html .= '<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>';
                                            $html .= '</div>';
                                            $html .= '-->';
                                        $html .= '</div>';
                                        $html .= '<h4><a href="'.url('produto/detalhes/4').'">Nome do Produto</a></h4>';
                                        $html .= '<div class="price">';
                                            $html .= 'À vista <span class="price-new">R$ 45,00</span> </br>';
                                            $html .= '<span class="price-term">No Cartão 3x R$ 15,00</span>';
                                        $html .= '</div>';
                                        $html .= '<div class="description  hidden">';
                                            $html .= '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ..</p>';
                                        $html .= '</div>';
                                    $html .= '</div>';

                                $html .= '</div>';
                            $html .= '</div>';
                        $html .= '</div>';

                    $html .= '</div>';

                    $html .= '<div class="product-filter product-filter-bottom filters-panel">';
                        $html .= '<div class="row">';
                            $html .= '<div class="box-list col-md-2 hidden-sm hidden-xs">';
                                $html .= '<div class="view-mode">';
                                    $html .= '<div class="list-view">';
                                        $html .= '<button class="btn btn-default grid active" data-toggle="tooltip" title="Grade"><i class="fa fa-th-large"></i></button>';
                                        $html .= '<button class="btn btn-default list " data-toggle="tooltip" title="Lista"><i class="fa fa-bars"></i></button>';
                                    $html .= '</div>';
                                $html .= '</div>';
                            $html .= '</div>';
                            $html .= '<div class="short-by-show text-center col-md-10 col-sm-12">';
                                $html .= '<div class="form-group" style="margin:0px">Mostrando 1 a 6 de 6 (Página 1)</div>';
                            $html .= '</div>';

                        $html .= '</div>';
                    $html .= '</div>';
                    
                    $html .= '<script type="text/javascript"></script>';

                $html .= '</div>';
            $html .= '</div>';
        $html .= '</div>';



        $out = array(
            "product_arr" => "152",
            "minPrice_new" => 54,
            "maxPrice_new" => 54,
            "html" => $html
        );

        return response()->json($out);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
