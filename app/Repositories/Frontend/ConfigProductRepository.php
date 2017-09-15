<?php

namespace AVD\Repositories\Frontend;


use AVD\Models\Frontend\ConfigProduct as Model;
use AVD\Interfaces\Frontend\ConfigProductInterface;



class ConfigProductRepository implements ConfigProductInterface
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

    public function get($value, $id)
    {
        $data = $this->model->find($id);
        return $data->value;
    }


    public function setId($id)
    {
        return $this->model->find($id);
    }

}