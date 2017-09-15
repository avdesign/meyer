<?php

namespace AVD\Interfaces\Frontend;

interface ProductInterface
{
    /**
     * Interface model Product
     *
     * @return \AVD\Repositories\Frontend\ProductRepository
     */
    public function setId($id);
    public function updateOffer($id, $status);

}