<?php

namespace AVD\Interfaces\Frontend;

interface CategoryInterface
{
    /**
     * Interface model Category
     *
     * @return \AVD\Repositories\Frontend\CategoryRepository
     */
    public function get();
    public function active();
    public function setId($id);

}