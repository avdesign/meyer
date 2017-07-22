<?php

namespace AVDPainel\Http\Controllers\Site;

use Illuminate\Http\Request;
use AVDPainel\Http\Controllers\Controller;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $html    = '<i class="fa fa-check-circle"></i>';
        $html   .= '<span class="items_cart">1 </span>';
        $html   .= '<span class="items_cart2">item(s)</span>';
        $html   .= '<span class="items_carts">$123.00</span>';

        $ucart  = '<a href="items_carts">'.url('carrinho').'</a>';
        $uchek  = '<a href="items_carts">'.url('pedido').'</a>';

        $out = array(
            'success' => "Sucesso: você adicionou !" ,
            'total' => $html
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
        $html    = '<i class="fa fa-check-circle"></i>';
        $html   .= '<span class="items_cart">1</span>';
        $html   .= '<span class="items_cart2">item(s)</span>';
        $html   .= '<span class="items_carts">0.00</span>';


        $out = array(
            'success' => true,
            'total' => $html
        );

        return response()->json($out);
    }



    public function cartInfo()
    {
        return view('frontend.cart.ajax.info');
    }
    
    public function cartPopup()
    {
        return view('frontend.cart.ajax.popup');
    }



}
