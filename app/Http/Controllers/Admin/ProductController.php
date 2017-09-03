<?php

namespace AVDPainel\Http\Controllers\Admin;

use AVDPainel\Http\Controllers\Controller;

use AVDPainel\Http\Requests\Admin\ProductRequest as ReqModel;


use AVDPainel\Interfaces\Admin\BrandInterface as InterBrand;
use AVDPainel\Interfaces\Admin\ProductInterface as InterModel;
use AVDPainel\Interfaces\Admin\ConfigKitInterface as ConfigKit;
use AVDPainel\Interfaces\Admin\SectionInterface as InterSection;
use AVDPainel\Interfaces\Admin\CategoryInterface as InterCategory;
use AVDPainel\Interfaces\Admin\AdminAccessInterface as InterAccess;
use AVDPainel\Interfaces\Admin\ProductPriceInterface as ProductPrice;
use AVDPainel\Interfaces\Admin\ConfigSystemInterface as ConfigSystem;
use AVDPainel\Interfaces\Admin\ConfigProductInterface as ConfigProduct;
use AVDPainel\Interfaces\Admin\ConfigFreightInterface as ConfigFreight;
use AVDPainel\Interfaces\Admin\ConfigPercentInterface as ConfigPercent;
use AVDPainel\Interfaces\Admin\ConfigProfileClientInterface as ConfigPrice;
use AVDPainel\Interfaces\Admin\ConfigUnitMeasureInterface as ConfigUnitMeasure;
use AVDPainel\Interfaces\Admin\ConfigImageProductInterface as ConfigImageProduct;

use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class ProductController extends Controller
{
    protected $ability  = 'product';
    protected $view     = 'backend.products';
    protected $upload;
    protected $last_url;
    protected $messages;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        InterAccess $access,
        ConfigKit $configKit,
        InterModel $interModel,
        InterBrand $interBrand,
        ConfigSystem $confUser,
        ConfigPrice $configPrice,
        ProductPrice $productPrice,
        InterSection $interSection,
        InterCategory $interCategory,
        ConfigProduct $configProduct,
        ConfigFreight $configFreight,
        ConfigPercent $configPercent,
        ConfigUnitMeasure $configUnitMeasure,
        ConfigImageProduct $configImageProduct)
    {
        $this->middleware('auth:admin');

        $this->access             = $access;
        $this->confUser           = $confUser;
        $this->configKit          = $configKit;
        $this->interModel         = $interModel;
        $this->interBrand         = $interBrand;
        $this->configPrice        = $configPrice;
        $this->productPrice       = $productPrice;
        $this->interSection       = $interSection;
        $this->interCategory      = $interCategory;
        $this->configProduct      = $configProduct;
        $this->configFreight      = $configFreight;
        $this->configPercent      = $configPercent;
        $this->configUnitMeasure  = $configUnitMeasure;
        $this->configImageProduct = $configImageProduct;
        $this->upload             = $this->configImageProduct;
        $this->messages = array(
            'section_id.required'   => 'A seção é obrigatória.',
            'name.required'         => 'O nome do é obrigatório.',
            'order.required'        => 'A ordem é obrigatória.',
            'title_index'           => 'Catalogo:',
            'title_create'          => 'Adicionar:',
            'title_edit'            => 'Editar Produto',
            'store_true'            => 'A Produto foi cadastrado.',
            'store_false'           => 'Não foi possível cadastrar o produto.',
            'update_true'           => 'O produto foi alterado.',
            'update_false'          => 'Não foi possível alterar o produto.',
            'delete_true'           => 'O produto foi excluido.',
            'delete_false'          => 'Não foi possível excluir o produto.'
        );
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        if( Gate::denies("{$this->ability}-view") ) {
            return view("backend.erros.message-401");
        }

        $this->last_url = array("last_url" => "produtos/{$slug}/catalogo");


        $this->access->update($this->last_url);

        $data          = $this->interCategory->setName('slug', $slug);
        $title         = $this->messages['title_index'];
        $confUser      = $this->confUser->get();
        $title_create  = $this->messages['title_create'];
        $configProduct = $this->configProduct->setId(1);


        return view("{$this->view}.index", compact('data', 'configProduct', 'title', 'title_create', 'confUser'));

    }

    /**
     * Table getAll()
     *
     * @param  array  $request
     * @return json
     */
    public function data(Request $request, $id)
    {
        if( Gate::denies("{$this->ability}-view") ) {
            return view("backend.erros.message-401");
        }

        $data = $this->interModel->getAll($request, $id);

        return response()->json($data);     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idcat)
    {
        if( Gate::denies("{$this->ability}-create") ) {
            return view("backend.erros.message-401");
        }

        $idpro         = $idcat; // simular idpro (Só para um novo produto)
        $group         = array(); // array vazio 
        $pixel         = $this->configImageProduct->setName('default', 'Z');
        $brands        = $this->interBrand->pluck();
        $category      = $this->interCategory->setId($idcat);
        $percentage    = $this->configPercent->pluck();
        $unit_measure  = $this->configUnitMeasure->pluck();
        $configProduct = $this->configProduct->setId(1);


        ($configProduct->kit == 1 ? $kits = $this->configKit->pluck() : $kits = false);
        // Carregar Modulos
        ($configProduct->freight == 1 ? $freight = $this->configFreight->setId(1) : $freight = 0);
        
        ($configProduct->group_colors == 1 ? $hexa = \AVDPainel\Models\Admin\ConfigColorGroup::get() : $hexa = array());
        
        return view('backend.products.modal.tabs', compact(
            'hexa',
            'kits',
            'idpro',
            'group',
            'pixel',
            'brands',
            'freight',
            'category',
            'percentage',
            'configPrice',
            'unit_measure',
            'configProduct')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \AVDPainel\Http\Requests\Admin\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReqModel $request, $idcat)
    {

        $dataForm = $request->all();
        $brand    = $this->interBrand->setId($dataForm['prod']['brand_id']);

        $dataForm['prod']['brand'] = $brand->name;
        $data = $this->interModel->create($dataForm['prod']);

        if ($data) {

            $prices = $this->productPrice->create($dataForm['price'], $data->id, $data->offer);

            if ($prices) {
                $success = true;
                $message = $this->messages['store_true'];
                $product = $data;
                $prices  = $prices;
            }

        } else {
            $success = false;
            $message = $this->messages['store_false'];
            $product = null;
            $prices  = null;

        }

        $out = array(
            'success' => $success, 
            'message' => $message,
            'product' => $product,
            'prices'  => $prices
        );

        return response()->json($out);
    }

    /**
     * Show
     *
     * @param  int  $idcat
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idcat, $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $idcat
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idcat, $id)
    {
        if( Gate::denies("{$this->ability}-update") ) {
            return view("backend.erros.message-401");
        }

        $data          = $this->interModel->setId($id);
        $prices        = $data->prices;
        $brands        = $this->interBrand->pluck();
        $section       = $this->interSection->setId($data->section_id);
        $sections      = $this->interSection->pluck('name', 'id');
        $categories    = $section->categories;
        $percentage    = $this->configPercent->pluck();
        $unit_measure  = $this->configUnitMeasure->pluck();
        $configProduct = $this->configProduct->setId(1);

        ($configProduct->kit == 1 && $data->kit == 1 ? $kits = $this->configKit->pluck() : $kits = false);
        // Carregar Modulos
        ($configProduct->freight == 1 ? $freight = $this->configFreight->setId(1) : $freight = 0);

        return  view('backend.products.modal.forms.product', compact(
            'data',
            'kits',
            'prices',
            'freight',
            'brands',
            'sections',
            'categories',
            'percentage',
            'unit_measure',
            'configProduct'
        ));
    }

    /**
     * Update
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReqModel $request, $idcat, $id)
    {
        if( Gate::denies("{$this->ability}-update") ) {
            return view("backend.erros.message-401");
        }

        $data = $this->interModel->setId($id);

        $dataForm  = $request['prod'];
        $dataForm['change']   = false;
        $dataForm['refresh']  = true;
        $dataForm['redirect'] = url("painel/produto/{$id}/detalhes");

        if ($dataForm['brand_id'] != $data->brand_id) {
            $brand  = $this->interBrand->setId($dataForm['brand_id']);
            $dataForm['brand'] = $brand->name;
            $dataForm['change']  = true; 
        }

        if ($dataForm['section_id'] != $data->section_id) {
            $section  = $this->interSection->setId($dataForm['section_id']);
            $dataForm['section'] = $section->name;
            $dataForm['change']  = true;
            $dataForm['refresh'] = false;
        }

        if ($dataForm['category_id'] != $data->category_id) {
            $category  = $this->interCategory->setId($dataForm['category_id']);
            $dataForm['category'] = $category->name;
            $dataForm['change']  = true;
            $dataForm['refresh'] = false;
        }

        $update = $this->interModel->update($dataForm, $data, $id);
        if ($update) {
            $prices = $this->productPrice->update($request['price'], $id, $dataForm['offer']);
        }

        return response()->json($update);    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idcat, $id)
    {
        if( Gate::denies("{$this->ability}-update") ) {
            return view("backend.erros.message-401");
        }

        $config = $this->configImageProduct->get();

        $delete = $this->interModel->delete($id, $config);
        if ($delete) {
            $success = true;
            $message = 'O produto foi removido.';
            $prduct  = $delete;
        } else {
            $success = false;
            $message = 'Não foi possível remover o produto.';
            $prduct  = false;
        }

        $out = array(
            'success' => $success,
            'message' => $message,
            'product' => $prduct
        );

        return response()->json($out);

    }



    /**
     * Status Fields
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $id)
    {
        if( Gate::denies("{$this->ability}-update") ) {
            return view("backend.erros.message-401");
        }

        $data = $this->interModel->status($request->all(), $id);

        return response()->json($data);    
    }

    /**
     * Details 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
        if( Gate::denies("{$this->ability}-view") ) {
            return view("backend.erros.message-401");
        }

        $data = $this->interModel->setId($id);
        $prices = $data->prices;
        $stock  = $data->grids()->sum('stock');
        $configProduct = $this->configProduct->setId(1);
        $configFreight = $this->configFreight->setId(1);


        return view('backend.products.details', compact(
            'data',
            'configProduct',
            'configFreight',
            'stock',
            'prices')
        );
    }

    /**
     * Loader grids.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function grids($idpro, $module, $idmod, $stock, $kit)
    {
        if( Gate::denies("{$this->ability}-create") ) {
            return view("backend.erros.message-401");
        }
        if ($module == 'category') {
            $set   = $this->interCategory->setId($idmod);
            $grids = $set->grids;
            if (count($grids) == 0) {
                return '<p class="message icon-speech red-gradient">
                            Não existe grade desta categoria!
                        </p>';
            }
        } elseif ($module == 'section') {
            $set   = $this->interSection->setId($idmod);
            $grids = $set->grids;
            if (count($grids) == 0) {
                return '<p class="message icon-speech red-gradient">
                            Não existe grade desta seção!
                        </p>';
            }
        } elseif ($module == 'brand') {
            $set   = $this->interBrand->setId($idmod);
            $grids = $set->grids;
            if (count($grids) == 0) {
                return '<p class="message icon-speech red-gradient">
                            Não existe grade deste fabricante!
                        </p>';
            }
        }

        if ($kit == 1) {
            return view('backend.products.modal.forms.grids-create-kits', compact('grids','module','idpro','stock'));
        } else {
            return view('backend.products.modal.forms.grids-create', compact('grids','module','idpro','stock'));
        }
    }

    /**
     * Change select category.
     *
     * @param  int  $id section
     * @return \Illuminate\Http\Response
     */
    public function combo($id)
    {
        if( Gate::denies("{$this->ability}-update") ) {
            return view("backend.erros.message-401");
        }

        $section       = $this->interSection->setId($id);
        $categories    = $section->categories;

        return view('backend.products.modal.forms.categories', compact('categories'));
    }

    
}