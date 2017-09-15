<?php

namespace AVD\Interfaces\Frontend;

interface ConfigProductInterface
{
    /**
     * Interface model ConfigProduct
     *
     * @return \AVD\Repositories\Frontend\ConfigProductRepository
     */
    public function get($value, $id);
    public function setId($id);
}