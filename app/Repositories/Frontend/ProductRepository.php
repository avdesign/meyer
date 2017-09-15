<?php

namespace AVD\Repositories\Frontend;


use AVD\Models\Frontend\Product as Model;
use AVD\Interfaces\Frontend\ProductInterface;


class ProductRepository implements ProductInterface
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


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return array
     */
    public function setId($id)
    {
        return $this->model->find($id);
    }



    /**
     * Update Offer
     *
     * @param  array  $data
     * @param  int  $status
     * @return mixe
     */
    public function updateOffer($data, $status)
    {
        $data->offer = $status;
        $data->save();
    }


}