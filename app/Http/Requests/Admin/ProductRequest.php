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

        //dd($inputPrice);

        foreach($inputProduct as $key => $val) {

            if ($key == 'brand_id') {
               $rules['prod.brand_id'] = 'required|min:1';
            }
            if ($key == 'section_id') {
               $rules['prod.section_id'] = 'required';
            }
            if ($key == 'category_id') {
               $rules['prod.category_id'] = 'required';
            }
            if($key == 'name'){
               $rules['prod.name'] = 'required';
            }
        }

        foreach ($inputPrice as $key => $value) {
            foreach ($value as $k => $v) {

                $profile = $value['profile'];

                if ($profile != 'Normal') {
                    if ($k == 'config_price_id' && $v < 1) {
                        $rules['price.'.$profile.'.config_price_id'] = 'required';
                    }
                    if ($k == 'price_card_percent' && $v == '') {
                        $rules['price.'.$profile.'.price_card_percent'] = 'required';
                    }
                    if($k == 'price_card' && $v == '' || $v == '0.00'){
                        $rules['price.'.$profile.'.price_card'] = 'required';
                    }
                    if($k == 'price_cash' && $v == '' || $v == '0.00'){
                        $rules['price.'.$profile.'.price_cash'] = 'required';
                    }
                    if ($k == 'price_cash_percent' && $v == '') {
                        $rules['price.'.$profile.'.price_cash_percent'] = 'required';
                    }

                    if ($offer == 1) {
                        if ($k == 'offer_percent' && $v < 1) {
                            $rules['price.'.$profile.'.offer_percent'] = 'required';
                        }
                        if ($k == 'offer_cash' && $v == '' || $v == '0.00') {
                            $rules['price.'.$profile.'.offer_cash'] = 'required';
                        }
                        if ($k == 'offer_card' && $v == '' || $v == '0.00') {
                            $rules['price.'.$profile.'.offer_card'] = 'required';
                        }
                    }

                } else {

                    $price_card         = $value['price_card'];
                    $price_cash         = $value['price_cash'];
                    $price_cash_percent = $value['price_cash_percent'];


                    if ($price_cash_percent < 1) {
                        $rules['price.'.$profile.'.price_cash_percent'] = 'required';
                    }
                    if($price_card == '' || $price_card == '0.00'){
                        $rules['price.'.$profile.'.price_card'] = 'required';
                    }
                    if($price_cash == '' || $price_cash == '0.00'){
                        $rules['price.'.$profile.'.price_cash'] = 'required';
                    }
                    if ($offer == 1) {

                        $offer_card    = $value['offer_card'];
                        $offer_cash    = $value['offer_cash'];
                        $offer_percent = $value['offer_percent'];

                        if ($offer_percent < 1) {
                            $rules['price.'.$profile.'.offer_percent'] = 'required';
                        }
                        if ($offer_card == '' || $offer_card == '0.00') {
                            $rules['price.'.$profile.'.offer_card'] = 'required';
                        }
                        if ($offer_cash == '' || $offer_cash == '0.00') {
                            $rules['price.'.$profile.'.offer_cash'] = 'required';
                        }
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

        //dd($rules);

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

                $profile = $value['profile'];                

                if ($k == 'price_card_percent') {
                    $messages['price.'.$profile.'.price_card_percent.required'] = "A porcentagem {$profile} parcelado é obrigatória.";
                }
                if($k == 'price_card'){
                    $messages['price.'.$profile.'.price_card.required'] = "Valor {$profile} parcelado é obrigatório.";
                }
                if ($k == 'price_cash_percent') {
                    $messages['price.'.$profile.'.price_cash_percent.required'] = "A porcentagem {$profile} à vísta é obrigatória.";
                }
                if($k == 'price_cash'){
                    $messages['price.'.$profile.'.price_cash.required'] = "Valor {$profile} á vista é obrigatório.";
                }
                if ($k == 'offer_percent') {
                    $messages['price.'.$profile.'.offer_percent.required'] = "A porcentagem {$profile} do valor da oferta é obrigatório.";
                }                
                if($k == 'offer_card'){
                    $messages['price.'.$profile.'.offer_card.required'] = "Valor {$profile} em oferta à prazo é obrigatório.";
                }
                if($k == 'offer_cash'){
                    $messages['price.'.$profile.'.offer_cash.required'] = "Valor {$profile} em oferta à vista é obrigatório.";
                }
            }
        }

        return $messages;
    }   
}