<?php

namespace AVD\Repositories\Frontend;


use AVD\Models\Frontend\Category as Model;
use AVD\Interfaces\Frontend\CategoryInterface;


class CategoryRepository implements CategoryInterface
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
        $data  = $this->model->orderBy('order', 'asc')->get();
        return $data;    
    }

    /**
     * Get Model
     *
     * @return array
     */
    public function active()
    {
        $data  = $this->model->where('status', 'Ativo')->orderBy('order', 'asc')->get();
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