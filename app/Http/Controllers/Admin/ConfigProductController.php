<?php

namespace AVDPainel\Http\Controllers\Admin;

use AVDPainel\Interfaces\Admin\AdminAccessInterface as InterAccess;
use AVDPainel\Interfaces\Admin\ConfigProductInterface as InterModel;
use AVDPainel\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ConfigProductController extends Controller
{

    protected $ability  = 'config-product';
    protected $view     = 'backend.config.products';
    protected $last_url;

    public function __construct(
        InterAccess $access,
        InterModel $interModel)
    {
        $this->middleware('auth:admin');

        $this->access     = $access;
        $this->interModel = $interModel;
        $this->last_url   = array("last_url" => "config/produtos");
    }


    /**
     * Form configurações do frete.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if( Gate::denies("{$this->ability}-view") ) {
            return view("backend.erros.message-401");
        }

        $this->access->update($this->last_url);
        
        $data  = $this->interModel->setId($id);
        $title = 'Configuração dos Produtos';
        return view("{$this->view}.form", compact('data', 'title'));    
    }

    /**
     * Alterar as configurações do frete.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if( Gate::denies("{$this->ability}-update") ) {
            return view("backend.erros.message-401");
        }

        $dataForm   = $request->all();
        $update = $this->interModel->update($dataForm, $id);
        if( $update ) {
            $success = true;
            $message = 'A configuração foi alterada.';
        } else {
            $success = false;
            $message = 'Não foi possível alterar.';
        }

        $out = array(
            'success' => $success,
            'message' => $message
        );

        return response()->json($out);
    }


}
