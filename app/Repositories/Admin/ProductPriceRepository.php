<?php

namespace AVDPainel\Repositories\Admin;

use AVDPainel\Models\Admin\ProductPrice as Model;
use AVDPainel\Interfaces\Admin\ProductPriceInterface;


class ProductPriceRepository implements ProductPriceInterface
{

    public $model;

    /**
     * Create construct.
     *
     * @return void
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create($input, $idpro, $offer)
    {
        $text_offer = '';
        $data = false;
        foreach ($input as $key => $value) {
            $value['product_id'] = $idpro;
            $data = $this->model->create($value);
            if ($data) {
                if ($offer == 1) {
                    $text_offer .= ', Oferta Parcelado:'.setReal($data->offer_card);
                    $text_offer .= ', Á vista:'.setReal($data->offer_cash);
                    $text_offer .= ' '.$data->offer_percent.'%';
                }
                generateAccessesTxt(utf8_decode('Perfil:'.$data->profile.
                    ', Parcelado:'.setReal($data->price_card).
                    ', À vista:'.setReal($data->price_cash).
                    ' '.$data->price_percent.'%'.
                    ' '.$text_offer));
            }
        }

        return $data;
    }


    public function update($input, $idpro, $offer)
    {
        $current = $this->model->where('product_id', $idpro)->delete();

        $text_offer = '';
        $data = false;

        foreach ($input as $key => $value) {

           $data = $this->model->create($value);
            if ($data) {
                if ($offer == 1) {
                    $text_offer .= ', Oferta Parcelado:'.setReal($data->offer_card);
                    $text_offer .= ', Á vista:'.setReal($data->offer_cash);
                    $text_offer .= ' '.$data->offer_percent.'%';
                }
                generateAccessesTxt(utf8_decode('Perfil:'.$data->profile.
                    ', Parcelado:'.setReal($data->price_card).
                    ', À vista:'.setReal($data->price_cash).
                    ' '.$data->price_percent.'%'.
                    ' '.$text_offer));
            }
        }


        

        /*
        $text_offer = '';
        $data = false;
        foreach ($input as $key => $value) {
            $data = $this->model->create($value);
            if ($data) {
                if ($offer == 1) {
                    $text_offer .= ', Oferta Parcelado:'.setReal($data->offer_card);
                    $text_offer .= ', Á vista:'.setReal($data->offer_cash);
                    $text_offer .= ' '.$data->offer_percent.'%';
                }
                generateAccessesTxt(utf8_decode('Perfil:'.$data->profile.
                    ', Parcelado:'.setReal($data->price_card).
                    ', À vista:'.setReal($data->price_cash).
                    ' '.$data->price_percent.'%'.
                    ' '.$text_offer));
            }
        }

        */

        return $data;
    }


}