<?php

namespace AVDPainel\Http\Controllers\Site;

use Illuminate\Http\Request;
use AVDPainel\Http\Controllers\Controller;

class ProductReviewControlle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return view('frontend.products.review-1', compact('id'));
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
    public function store(Request $request, $id)
    {
        $error='';
        $dataForm = $request->all();
        if ($dataForm['name'] == '') {
            $error = "Por favor, digite seu nome!";
        } else if($dataForm['text'] == '') {
            $error = "Por favor, digite seu comentário!";
        } else if($dataForm['rating'] == '') {
            $error = "Por favor, selecione uma avaliação!";
        } 

        if (!$error) {
            $out = array( 'success' => 'Seu comentário foi enviado sucesso!');        
        } else {
            $out = array( 'error' => $error);        
        }

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
