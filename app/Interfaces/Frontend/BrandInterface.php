<?php

namespace AVD\Interfaces\Frontend;

interface BrandInterface
{
    /**
     * Interface model Brand
     *
     * @return \AVD\Repositories\Frontend\BrandRepository
     */
    public function get();
    public function setId($id);

}