<?php

namespace AVDPainel\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use AVDPainel\Interfaces\Admin\ConfigProductInterface as ConfigProduct;
use AVDPainel\Interfaces\Admin\ConfigFreightInterface as ConfigFreight;

class ProductRequest extends FormRequest
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ConfigProduct $configProduct, ConfigFreight $configFreight)
    {
        $this->configProduct  = $configProduct;
        $this->configFreight  = $configFreight;
    }
    
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $configFreight = $this->configFreight->setId(1);
        $configProduct = $this->configProduct->setId(1);        
        $inputProduct  = $this->request->get('prod');
        $inputPrice    = $this->request->get('price');
        $offer         = $inputProduct['offer'];  

        foreach($inputProduct as $key => $val) {

            if ($key == 'brand_id') {
               $rules['prod.'.$key] = 'required|min:1';
            }
            if ($key == 'section_id') {
               $rules['prod.'.$key] = 'required';
            }
            if ($key == 'category_id') {
               $rules['prod.'.$key] = 'required';
            }
            if($key == 'name'){
               $rules['prod.'.$key] = 'required';
            }
        }

        foreach ($inputPrice as $key => $value) {
            foreach ($value as $k => $v) {
                if($k == 'price_card' && $v == '' || $v == '0.00'){
                   $rules[$k] = 'required';
                }
                if($k == 'price_cash' && $v == '' || $v == '0.00'){
                   $rules[$k] = 'required';
                }
                if ($offer == 1) {
                    if ($k == 'offer_cash' && $v == '' || $v == '0.00') {
                         $rules[$k] = 'required';
                    }
                    if ($k == 'offer_card' && $v == '' || $v == '0.00') {
                         $rules[$k] = 'required';
                    }
                }
            }
        }

        // Se habilitar o preço de custo
        if ($configProduct->cost == 1) {
            if ($inputProduct['cost'] == '' || $inputProduct['cost'] = '0.00') {
                $rules['prod.cost'] = 'required';
            }
        }


        // Se cobrar frete validar os campos
        if (isset($inputProduct['freight'])) {
            if ($inputProduct['freight'] == 1) {
                if ($configFreight->weight == 1) {
                    $rules['prod.weight'] = 'required';
                }
                if ($configFreight->width == 1) {
                    $rules['prod.width'] = 'required';
                }
                if ($configFreight->height == 1) {
                    $rules['prod.height'] = 'required';
                }
                if ($configFreight->length == 1) {
                    $rules['prod.length'] = 'required';
                }                 
            }
        }

        return $rules;
     
    }


    public function messages()
    {
        $msg = '';
        $messages = [];
        $inputProduct = $this->request->get('prod');
        $inputPrice   = $this->request->get('price');

        foreach($inputProduct as $key => $val){

            if ($key == 'brand_id') {
                $msg = "O fabricante é obrigatório.";
            }
            if ($key == 'section_id') {
                $msg = "A seção é obrigatória.";
            }
            if ($key == 'category_id') {
                $msg = "A categoria é obrigatória.";
            }
            if($key == 'name'){
                $msg = "O nome do produto é obrigatório.";
            }
            if($key == 'weight'){
               $msg = "O peso é obrigatório.";
            }
            if($key == 'width'){
               $msg = "A largura é obrigatória.";
            }
            if($key == 'height'){
               $msg = "A altura é obrigatória.";
            }
            if($key == 'length'){
               $msg = "O comprimento é obrigatório.";
            }
            if($key == 'cost'){
               $msg = "O valor do custo é obrigatório.";
            }

            $messages['prod.'.$key.'.required'] = $msg;
        }

        foreach ($inputPrice as $key => $value) {
            foreach ($value as $k => $v) {

                if($k == 'price_card'){
                    $msg = "Valor parcelado é obrigatório.";
                }
                if($k == 'price_cash'){
                    $msg = "Valor á vista é obrigatório.";
                }
                if($k == 'offer_card'){
                    $msg = "Valor em oferta à prazo é obrigatório.";
                }
                if($k == 'offer_cash'){
                   $msg = "Valor em oferta à vista é obrigatório.";
                }

                $messages[$k.'.required'] = $msg;
            }
        }


        return $messages;
    }   
}
