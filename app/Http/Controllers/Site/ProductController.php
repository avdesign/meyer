<?php

namespace AVDPainel\Http\Controllers\Site;

use Illuminate\Http\Request;
use AVDPainel\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        return view('frontend.products.product-'.$id, compact('id'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }



    public function quickview($id)
    {

        return view('frontend.products.quickview-1', compact('id'));
    }


    public function quickAddCart(Request $request)
    {
        $out = array( 'success' => 'O produto foi adicionado!');  
        return response()->json($out);
    }
    



    public function color(Request $request, $id)
    {

            $color_id = $request['color_id'];

            $new_name = '<span style="color:red">Azul: Não disponível no estoque!</span>';
            $new_stock = false;
            $new_code = '<span>Ref:</span> #869696';




            if ($color_id == 3) {
                $new_name = 'Branco';
                $new_stock = '<span> Estoque: </span> <i class="fa fa-check-square-o"></i> 10 cx';
                $new_code = '<span>Ref:</span> #867474';
            } else if ($color_id == 2) {
                $new_name = 'Bordo';
                $new_stock = '<span> Estoque: </span> <i class="fa fa-check-square-o"></i> 5 cx';
                $new_code = '<span>Ref:</span> #7654545';
            }

           //$html = '<div class="large-image">';
                $html  = '<img itemprop="image" class="product-image-zoom" src="'.url('assets/frontend/images/products/700x700/produto1-cor'.$color_id.'-posicao-1.jpg');
                $html .= '" data-zoom-image="'.url('assets/frontend/images/products/900x900/produto1-cor'.$color_id.'-posicao-1.jpg');
                $html .= '" title=" Nome do Produto" alt=" Nome do Produto" />';
                $html .= '<div class="box-label">';
                    $html .= '<span class="label-product label-sale">-15%  </span><br>';
                $html .= '</div>';
             /*   
            $html .= '</div>';
            $html .= '<div id="thumb-slider" class="full_slider owl-carousel">';

                $html .= '<a data-index="0" class="img thumbnail" data-image="'.url('assets/frontend/images/products/700x700/produto1-cor3-posicao-1.jpg');
                $html .= '" title=" Nome do Produto">';
                    $html .= '<img src="'.url('assets/frontend/images/products/300x300/produto1-cor3-posicao-1.jpg');
                    $html .= '" title=" Nome do Produto" alt=" Nome do Produto" />';
                $html .= '</a>';

                $html .= '<a data-index="1" class="img thumbnail" data-image="'.url('assets/frontend/images/products/700x700/produto1-cor2-posicao-1.jpg');
                $html .= '" title=" Nome do Produto">';
                    $html .= '<img src="'.url('assets/frontend/images/products/700x700/produto1-cor2-posicao-1.jpg');
                    $html .= '" title=" Nome do Produto" alt=" Nome do Produto" />';
                $html .= '</a>';

                $html .= '<a data-index="2" class="img thumbnail" data-image="'.url('assets/frontend/images/products/700x700/produto1-cor1-posicao-1.jpg');
                $html .= '" title=" Nome do Produto">';
                    $html .= '<img src="'.url('assets/frontend/images/products/300x300/produto1-cor1-posicao-1.jpg');
                    $html .= '" title=" Nome do Produto" alt=" Nome do Produto" />';
                $html .= '</a>';

            $html .= '</div>';
            $html .= '<script type="text/javascript">';
                $html .= '$(function($) {';
                    $html .= 'var $nav = $("#thumb-slider");';
                    $html .= '$nav.each(function() {';
                        $html .= '$(this).owlCarousel2({';
                            $html .= 'nav: true,';
                            $html .= 'dots: false,';
                            $html .= 'slideBy: 1,';
                            $html .= 'margin: 10,';
                            $html .= "navText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],";
                            $html .= 'responsive: {';
                                $html .= '0: {';
                                    $html .= 'items: 2';
                                $html .= '},';
                                $html .= '600: {';
                                    $html .= 'items: 4';
                                $html .= '},';
                                $html .= '1000: {';
                                    $html .= 'items: 4';
                                $html .= '},';
                                $html .= '1200: {';
                                    $html .= 'items: 5';
                                $html .= '}';
                            $html .= '}';
                        $html .= '});';
                    $html .= '})';

                $html .= '});';
            $html .= '</script>';
            */



            $zoom = '<script type="text/javascript">';
                        $zoom .= '$(document).ready(function() {';
                             $zoom .= 'var zoomCollection = ".large-image img.product-image-zoom";';
                             $zoom .= '$(zoomCollection).elevateZoom({';
                                 $zoom .= 'zoomType: "inner",';
                                 $zoom .= 'lensSize: "250",';
                                 $zoom .= 'easing: true,';
                                 $zoom .= 'gallery: "thumb-slider",';
                                 $zoom .= 'cursor: "pointer",';
                                 $zoom .= 'galleryActiveClass: "active"';
                             $zoom .= '});';
                             $zoom .= '$(".large-image img.product-image-zoom").magnificPopup({';
                                 $zoom .= 'items: [{';
                                     $zoom .= 'src: "'.url('assets/frontend/images/products/700x700/produto1-cor3.jpg').'"';
                                 $zoom .= '}, {';
                                     $zoom .= 'src: "'.url('assets/frontend/images/products/700x700/produto1-cor2.jpg').'"';
                                 $zoom .= '}, {';
                                     $zoom .= 'src: "'.url('assets/frontend/images/products/700x700/produto1-cor1.jpg').'"';
                                 $zoom .= '}, ],';
                                 $zoom .= 'gallery: {';
                                     $zoom .= 'enabled: true,';
                                     $zoom .= 'preload: [0, 2]';
                                $zoom .= '},';
                                 $zoom .= 'type: "image",';
                                $zoom .= 'mainClass: "mfp-fade",';
                                 $zoom .= 'callbacks: {';
                                     $zoom .= 'open: function() {';
                                        $zoom .= 'var activeIndex = parseInt($("#thumb-slider .img.active").attr("data-index"));';
                                         $zoom .= 'var magnificPopup = $.magnificPopup.instance;';
                                         $zoom .= 'magnificPopup.goTo(activeIndex);';
                                     $zoom .= '}';
                                 $zoom .= '}';
                             $zoom .= '});';
                         $zoom .= '});';
                     $zoom .= '</script>';




        $error='';

        if (!$error) {
            $out = array( 'success' => true,
                "new_code"  => $new_code,
                "new_stock" => $new_stock,
                "new_name"  => $new_name,
                "new_color" => $html,
                "new_zoom" => $zoom,
                "new_price" => array(
                    "price" => "À vista R$ 40,00",
                    "special" => false,
                    "tax" => "<span>Em até 3x sem juros:</span> R$ 45,00"
                )
            );        
        } else {
            $out = array( 'error' => $error);        
        }

        return response()->json($out);

    }
    
    
    
}
