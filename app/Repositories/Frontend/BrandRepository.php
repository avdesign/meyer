<?php

namespace AVD\Repositories\Frontend;


use AVD\Models\Frontend\Brand as Model;
use AVD\Interfaces\Frontend\BrandInterface;


class BrandRepository implements BrandInterface
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
     * Get Model
     *
     * @return array
     */
    public function get()
    {
        $data  = $this->model->where('status', 'Ativo')->orderBy('order')->get();
        return $data;    
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


}